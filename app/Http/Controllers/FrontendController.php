<?php

namespace App\Http\Controllers;

use App\Models\Appsection;
use Illuminate\Http\Request;
use App\Models\ContactInfo;
use App\Models\FooterAbout;
use App\Models\SocialLink;
use App\Models\Copyright;
use App\Models\Header;
use App\Models\ServiceLists;
use App\Models\UsefulLinks;

class FrontendController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        $contactInfo = ContactInfo::all();
        $footer_about = FooterAbout::all();
        $socialLinks = SocialLink::all();
        $copys = Copyright::all();
        $usefullinks = UsefulLinks::all();
        $servicesLists = ServiceLists::all();
        $apps = Appsection::all();
        $headers = Header::all();
        return view('frontend.affiliate.index', compact('contactInfo', 'footer_about', 'socialLinks','copys', 'usefullinks', 'servicesLists', 'apps', 'headers'));

    }
}
