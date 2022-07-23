<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use PayPal\Api\ExecutePayment;
use PayPal\Api\PaymentExecution;
use PayPal\Api\Amount;
use PayPal\Api\Details;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\RedirectUrls;
use PayPal\Api\Transaction;
use PayPal\Rest\ApiContext;
use PayPal\Auth\OAuthTokenCredential;
use Redirect;
use Session;
use Illuminate\Support\Facades\URL;
use Notification;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;
use App\Models\Order;



class PaymentController extends Controller
{
    private $_api_context;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

        /** PayPal api context **/
        $paypal_conf = \Config::get('paypal');

        $this->_api_context = new ApiContext(
            new OAuthTokenCredential(
                $paypal_conf['client_id'],
                $paypal_conf['secret']
            )
        );
        $this->_api_context->setConfig($paypal_conf['settings']);
    }
    public function index()
    {
        return view('paywithpaypal');
    }
    public function payWithpaypal(Request $request)
    {
        // My personal code
        Session::put('payment_method', $request->payment_method);
        Session::put('shipping_address', $request->shipping_address);

        // End of my personal code
        $payer = new Payer();

        $payer->setPaymentMethod('paypal');
        $item_1 = new Item();

        $item_1->setName('Item 1')->setCurrency('USD')->setQuantity(1)->setPrice($request->get('total_payable_amount'));
        /** unit price **/

        $item_list = new ItemList();
        $item_list->setItems(array($item_1));

        $amount = new Amount();
        $amount->setCurrency('USD')->setTotal($request->get('total_payable_amount'));

        $transaction = new Transaction();
        $transaction->setAmount($amount)
            ->setItemList($item_list)
            ->setDescription('Your transaction description');

        $redirect_urls = new RedirectUrls();
        $redirect_urls->setReturnUrl(URL::to('status'))
            /** Specify return URL **/
            ->setCancelUrl(URL::to('status'));

        $payment = new Payment();
        $payment->setIntent('Sale')
            ->setPayer($payer)
            ->setRedirectUrls($redirect_urls)
            ->setTransactions(array($transaction));
        // dd($payment->create($this->_api_context));exit; 
        try {

            $payment->create($this->_api_context);
        } catch (\PayPal\Exception\PPConnectionException $ex) {

            if (\Config::get('app.debug')) {

                \Session::put('error', 'Connection timeout');
                return Redirect::to('/');
            } else {

                \Session::put('error', 'Some error occur, sorry for inconvenient');
                return Redirect::to('/');
            }
        }

        foreach ($payment->getLinks() as $link) {

            if ($link->getRel() == 'approval_url') {

                $redirect_url = $link->getHref();
                break;
            }
        }

        /** add payment ID to session **/
        Session::put('paypal_payment_id', $payment->getId());

        if (isset($redirect_url)) {

            /** redirect to paypal **/
            return Redirect::away($redirect_url);
        }

        Session::put('error', 'Unknown error occurred');
        return Redirect::to('/');
    }

    public function getPaymentStatus()
    {
        $request = request(); //try get from method
        //dd(Session::get('payment_method'));
        /** Get the payment ID before session clear **/
        $payment_id = Session::get('paypal_payment_id');

        /** clear the session payment ID **/
        Session::forget('paypal_payment_id');
        //if (empty(Input::get('PayerID')) || empty(Input::get('token'))) {
        if (empty($request->PayerID) || empty($request->token)) {

            Session::put('error', 'Payment failed');
            return Redirect::to('/');
        }

        $payment = Payment::get($payment_id, $this->_api_context);
        $execution = new PaymentExecution();
        //$execution->setPayerId(Input::get('PayerID'));
        $execution->setPayerId($request->PayerID);

        /**Execute the payment **/
        $result = $payment->execute($execution, $this->_api_context);

        if ($result->getState() == 'approved') {


            Session::put('success-pay', 'Payment success');
            // Since , Success input the data into database

            $userId = Auth::user()->id;
            $allCart = Cart::where('user_id', $userId)->get();
            foreach ($allCart as $cart) {
                $order = new Order();
                $order->product_id = $cart['product_id'];
                $order->user_id = $cart['user_id'];
                $order->shipping_address = Session::get('shipping_address');
                $order->status = "Pending";
                $order->payment_method = Session::get('payment_method');
                $order->payment_status = "Success";
                $order->paypal_payment_id = $payment_id;
                $order->_token = $request->token;
                $order->paypal_payer_ID = $request->PayerID;
                $order->save();
            }
            Cart::where('user_id', $userId)->delete();
            // return $request->input();
            Session::forget('shipping_address');
            Session::forget('payment_method');



            //add update record for cart
            $email = 'aalfaisal.m@gmail.com';
            // Notification::route('mail', $email)->notify(new \App\Notifications\orderPaid($email));
            return Redirect::to('products');  //back to product page

        }

        Session::put('error', 'Payment failed');
        return Redirect::to('/');
    }
}
