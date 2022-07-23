<?php

namespace App\Http\Controllers;

use App\Models\RaffleTicket;
use Illuminate\Http\Request;

class RaffleTicketController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }

    public function index()
    {
        $raffleticket = RaffleTicket::all();
        return view('raffleticket.index', compact('raffleticket'));
    }

    public function create()
    {
        return view('raffleticket.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    
/*          $request->validate([
            'title' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'price' => 'required',
            'status' => 'required',
            'first_ticket_no' => 'required',
            'last_ticket_no' => 'required'
        ]); */
   
        //for image 
       $prod = new RaffleTicket();
        $prod->title = $request->title;
        $prod->start_date = $request->start_date;
        $prod->end_date = $request->end_date;
        $prod->price = $request->price;
        $prod->status = $request->status;
        $prod->first_ticket_no = $request->first_ticket_no;
        $prod->last_ticket_no = $request->last_ticket_no;
        $prod->save();
        return redirect()->route('raffleticket.index')->with('create', 'Raffle Insert Successfully.'); 
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   /*  public function edit(RaffleTicket $raffle)
    {
        dd($raffle);
        return view('raffleticket.edit', compact('raffle'));
    } */
    public function edit($id)
    {
        $raffle = RaffleTicket::find($id);
        return view('raffleticket.edit', compact('raffle'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RaffleTicket $raffle, $id)
    {
        $raffle = RaffleTicket::find($id);
        $raffle->update([
            'title' => $request['title'],
            'start_date' => $request['start_date'],
            'end_date' => $request['end_date'],
            'price' => $request['price'],
            'status' => $request['status'],
            'first_ticket_no' => $request['first_ticket_no'],
            'last_ticket_no' => $request['last_ticket_no'],
        ]);
        return redirect()->route('raffleticket.index')->with('update', 'Raffle Tickte successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
