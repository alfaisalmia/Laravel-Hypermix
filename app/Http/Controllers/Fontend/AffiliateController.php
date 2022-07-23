<?php

namespace App\Http\Controllers\Fontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\ContactInfo;
use App\Models\FooterAbout;
use App\Models\SocialLink;
use App\Models\Copyright;
use App\Models\ServiceLists;
use App\Models\UsefulLinks;
use App\Models\Post;
use App\Models\Header;

class AffiliateController extends Controller
{
    public function index()
    {
       // $countries= Country::all();
        //return view('countries.index',compact('countries'));

        //return view('frontend.affiliate.index');
        $contactInfo = ContactInfo::all();
        $footer_about = FooterAbout::all();
        $socialLinks = SocialLink::all();
        $copys = Copyright::all();
        $servicesLists = ServiceLists::all();
        $usefullinks = UsefulLinks::all();
        $posts = Post::orderBy('id', 'desc')->paginate(9);
        $recentposts = Post::select('post_title', 'id', 'post_image', 'created_at')->orderBy('id', 'desc')->take(12)->get();
        $headers = Header::all();
        return view('frontend.affiliate.index', compact('contactInfo', 'footer_about', 'socialLinks','copys','usefullinks','servicesLists','posts','recentposts','headers'));
    }
    
    public function create()
    {
       
        return view('countries.create');
    }

    public function store(Request $request)
    {

    }

    public function postdetails($id)
    {
        $usefullinks = UsefulLinks::all();
        $contactInfo = ContactInfo::all();
        $footer_about = FooterAbout::all();
        $socialLinks = SocialLink::all();
        $copys = Copyright::all();
        $servicesLists = ServiceLists::all();
        $categories = Category::all();
        $posts =  Post::where('id', $id)->get();
        $recentposts = Post::select('post_title', 'id', 'post_image', 'created_at')->orderBy('id', 'desc')->take(12)->get();
        return view('frontend.affiliate.single-post', compact('contactInfo', 'footer_about', 'socialLinks','copys','usefullinks','servicesLists','posts','categories','recentposts'));
    }
/* 
    public function edit(Country $country)
    {
 
        return view('countries.edit', compact('country'));   
    }

    public function update(CountryStorRequest $request, Country $country)
    {
        $country->update([
            'country_code' => $request['country_code'],    
            'name' => $request['name']
         ]);
         $country->update($request->validated());
            return redirect()->route('countries.index')->with('message','Country updated successfully');
    }

    public function destroy(Country $country)
    {

       $country->delete();
        return redirect()->route('countries.index')->with('message','Country  deleting successfully');
    }  */
}
