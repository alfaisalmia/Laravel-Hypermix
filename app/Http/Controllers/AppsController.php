<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactInfo;
use App\Models\FooterAbout;
use App\Models\SocialLink;
use App\Models\Copyright;
use App\Models\UsefulLinks;
use App\Models\ServiceLists;
use App\Models\Appsection;
use App\Models\Header;

class AppsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
       // $this->middleware('admin');
    }
    public function index()
    {
       // return view('frontend.appspage');
        $contactInfo = ContactInfo::all();
        $footer_about = FooterAbout::all();
        $socialLinks = SocialLink::all();
        $copys = Copyright::all();
        $usefullinks = UsefulLinks::all();
        $servicesLists = ServiceLists::all();
        $apps = Appsection::all();
        $headers = Header::all();
        return view('frontend.appspage', compact('contactInfo', 'footer_about', 'socialLinks','copys', 'usefullinks','servicesLists','apps','headers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
