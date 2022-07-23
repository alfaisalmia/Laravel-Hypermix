<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\ContactInfo;
use App\Models\Copyright;
use App\Models\FooterAbout;
use App\Models\ServiceLists;
use App\Models\SocialLink;
use App\Models\UsefulLinks;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class FooterController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }
    public function index()
    {
        $contactInfo = ContactInfo::all();
        $footer_about = FooterAbout::all();
        $socialLinks = SocialLink::all();
        $copys = Copyright::all();
        $usefulLinks = UsefulLinks::all();
        $serviceLists = ServiceLists::all();
        return view('footer.index', compact('contactInfo', 'footer_about', 'socialLinks', 'copys', 'usefulLinks', 'serviceLists'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, ContactInfo $contact, $id)
    {
        $contactinfo = ContactInfo::find($id);
        $contactinfo->address_line1 = $request->address_line1;
        $contactinfo->address_line2 = $request->address_line2;
        $contactinfo->address_line3 = $request->address_line3;
        $contactinfo->phone = $request->phone;
        $contactinfo->email = $request->email;
        $contactinfo->save();
        return $this->index();
    }
    public function about(Request $request, FooterAbout $fa, $id)
    {
        $ft_about_info = FooterAbout::find($id);
        $ft_about_info->title = $request->title;
        $ft_about_info->footer_about_text = $request->footer_about_text;
        $ft_about_info->save();
        return $this->index();
    }
    public function updateSocialLink(Request $request, SocialLink $sol)
    {
        $ft_social_link = SocialLink::find($request->id);
        $ft_social_link->twitter = $request->twitter;
        $ft_social_link->facebook  = $request->facebook;
        $ft_social_link->instagram = $request->instagram;
        $ft_social_link->linkedin = $request->linkedin;
        $ft_social_link->save();
        return response()->json(['status' => 1, 'message' => 'Social Link updated successfully']);
    }
    public function copyrightUpdate(Request $request, Copyright $copys)
    {
        $copyrightinfos = Copyright::find($request->id);
        $copyrightinfos->copyright = $request->copyright;
        $copyrightinfos->save();
        return response()->json(['status' => 1, 'message' => 'Copyright updated successfully']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function insertUsefulLink(Request $request)

    {
        DB::table('useful_links')->truncate();
        foreach ($request->title as $key => $value) {
            $item = new UsefulLinks;
            $item->title = $request->get('title')[$key];
            $item->links = $request->get('link')[$key];
            $item->save();
        }
        return response()->json(['status' => 1, 'message' => 'Useful Links inserted successfully']);
    }
    public function updateServiceList(Request $request)
    {
        DB::table('service_lists')->truncate();
        foreach ($request->service_title as $key => $value) {
            $items = new ServiceLists();
            $items->service_title = $request->get('service_title')[$key];
            $items->service_link = $request->get('service_link')[$key];
            $items->save();
        }
        return response()->json(['status' => 1, 'message' => 'Service Lists updated successfully']);
    }
}
