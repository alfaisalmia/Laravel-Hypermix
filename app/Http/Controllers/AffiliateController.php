<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\ContactInfo;
use App\Models\FooterAbout;
use App\Models\SocialLink;
use App\Models\Copyright;
use App\Models\ServiceLists;
use App\Models\UsefulLinks;
use App\Models\Post;
use Illuminate\Support\Facades\Storage;

class AffiliateController extends Controller
{
  public function __construct()
  {
    //$this->middleware('auth');
  }

/*   public function index()
  {
    $contactInfo = ContactInfo::all();
    $footer_about = FooterAbout::all();
    $socialLinks = SocialLink::all();
    $copys = Copyright::all();
    $servicesLists = ServiceLists::all();
    $usefullinks = UsefulLinks::all();
    // $posts = Post::with('categories')->paginate(5);
    //$posts =$ondata = DB::table('official_news') -> orderBy('created_date', 'desc') -> get() -> paginate(7);;
    $category = Category::first();
    //$posts = $category->posts()->paginate(5);
    //$posts = Post::all()->categories()->paginate(5);
    $posts = Post::all()->paginate(5);
    dd($posts);
    //$txt = fgets(fopen(Storage::path('\posts\1627718007.txt'),'r'));
    // $txt = fgets(fopen(Storage::path("\posts\\" . $val . '"'), 'r'));
    return view('frontend.affiliate.index', compact('contactInfo', 'footer_about', 'socialLinks', 'copys', 'servicesLists', 'posts', 'category'));
    // return view('frontend.affiliate.affiliate');

  } */
}
