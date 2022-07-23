<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactInfo;
use App\Models\FooterAbout;
use App\Models\SocialLink;
use App\Models\Copyright;
use App\Models\UsefulLinks;
use App\Models\ServiceLists;
use App\Models\Header;
class RaffleCotroller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
       // $this->middleware('admin');
    }
    public function index()
    {
        //return view('frontend.raffle');

        $contactInfo = ContactInfo::all();
        $footer_about = FooterAbout::all();
        $socialLinks = SocialLink::all();
        $copys = Copyright::all();
        $usefullinks = UsefulLinks::all();
        $servicesLists = ServiceLists::all();
        $headers = Header::all();
        return view('frontend.raffle', compact('contactInfo', 'footer_about', 'socialLinks','copys','usefullinks','servicesLists', 'headers'));
    }
}
