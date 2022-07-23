<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Header;
use Illuminate\Http\Request;

class HeaderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }

    public function index()
    {
        $headers = Header::all();
        return view('header.index', compact('headers'));
    }

    public function create()
    {
        return view('header.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'site_title' => 'required',
            'site_logo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1024',
            'site_icon' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1024',
            'background_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1024',
        ]);

        $logoURL = '';
        $siteIconURL = '';
        $siteBackgroundURL = '';

        $uploadPath = public_path('uploads/images/');
        if ($request->file('site_logo')  && $request->file('site_icon')  && $request->file('background_image') != '') {
            
            $fileName = $request->file('site_logo')->getClientOriginalExtension();
            $siteIcon = $request->file('site_icon')->getClientOriginalExtension();
            $background_image = $request->file('background_image')->getClientOriginalExtension();

            $newFileName = 'logo-'.time() . '.' . $fileName;
            $siteIconFileName ='icon-'. time() . '.' . $siteIcon;
            $background_imageFileName = 'bg-'. time() . '.' . $background_image;

            $logoURL = $newFileName;
            $siteIconURL = $siteIconFileName;
            $siteBackgroundURL = $background_imageFileName;


            $request->site_logo->move($uploadPath, $newFileName);
            $request->site_icon->move($uploadPath, $siteIconFileName);
            $request->background_image->move($uploadPath, $background_imageFileName);
        }

        $headerInfo = new Header();
        $headerInfo->site_title = $request->site_title;
        $headerInfo->site_tagline = $request->site_tagline;
        $headerInfo->site_logo = $logoURL;
        $headerInfo->site_logo_name = $request->site_logo_name;
        $headerInfo->site_icon = $siteIconURL;
        $headerInfo->background_image = $siteBackgroundURL;
        $headerInfo->save();
        return redirect()->route('header.index')->with('message', 'Country saved successfully');
    }

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
    public function edit(Header $header)
    {
        return view('header.edit', compact('header'));  
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
        $request->validate([
            'site_title' => 'required',
        ]); 

       $headers = Header::find($id);
       $old_logo = public_path('/upoads/images/' . $headers->site_logo);
       $old_icon = public_path('/upoads/images/' . $headers->site_icon);
       $old_bg = public_path('/upoads/images/' . $headers->background_image);
       // Logic for Logo
       if ($request->hasFile('site_logo')) {
        if (file_exists(public_path('uploads/images/' . $headers->site_logo))) {
            unlink(public_path('uploads/images/' . $headers->site_logo));
        }
        $logo = $request->file('site_logo');
        $new_logo = 'logo-'.time() . '.' . $logo->getClientOriginalExtension();
        $destinationPath = public_path('/uploads/images');
        $logo->move($destinationPath, $new_logo);
        $headers->site_logo =  $new_logo;
    } else {
        $headers->site_logo =  $headers->site_logo;
    }

    // Logic for Icon
    if ($request->hasFile('site_icon')) {
        if (file_exists(public_path('uploads/images/' . $headers->site_icon))) {
            unlink(public_path('uploads/images/' . $headers->site_icon));
        }
        $icon = $request->file('site_icon');
        $new_icon = 'icon-'.time() . '.' . $icon->getClientOriginalExtension();
        $destinationPath = public_path('/uploads/images');
        $icon->move($destinationPath, $new_icon);
        $headers->site_icon =  $new_icon;
    } else {
        $headers->site_icon =  $headers->site_icon;
    }

       // Logic for BG Image
       if ($request->hasFile('background_image')) {
        if (file_exists(public_path('uploads/images/' . $headers->background_image))) {
            unlink(public_path('uploads/images/' . $headers->background_image));
        }
        $bg = $request->file('background_image');
        $new_bg = 'bg-'.time() . '.' . $bg->getClientOriginalExtension();
        $destinationPath = public_path('/uploads/images');
        $bg->move($destinationPath, $new_bg);
        $headers->background_image =  $new_bg;
    } else {
        $headers->background_image =  $headers->background_image;
    }

    $headers->update([
        $headers->site_title = $request->site_title,
        $headers->site_tagline = $request->site_tagline,
        $headers->site_logo_name = $request->site_logo_name,
    ]);
    return redirect()->route('header.index')->with('update', 'Post has been created successfully.');
/*
        $header = Header::find($id);
        $uploadPath = public_path('uploads/');

        if($request->hasFile('site_logo')){
            $image = $request->file('site_logo');
            $extension = $image->getClientOriginalExtension();
            $logoURL = time().'.'.$image->getClientOriginalExtension();
            if (file_exists(public_path('/uploads/' . $logoURL))) {
                unlink(public_path('/uploads/' . $logoURL));
            }
            $image->move($uploadPath, $logoURL);
            $header->site_logo =$logoURL;
        }else{
            $header->site_logo = $request->file('site_logo');
        }


        if($request->hasFile('site_icon')){
            $image2 = $request->file('site_icon');
            $extension2 = $image2->getClientOriginalExtension();
            $logoURL2 = time().'.'.$image2->getClientOriginalExtension();
            if (file_exists(public_path('/uploads/' . $logoURL2))) {
                unlink(public_path('/uploads/' . $logoURL2));
            }
            $image2->move($uploadPath, $logoURL2);
            $header->site_icon =$logoURL2;
        }else{
            $header->site_icon = $request->file('site_icon');
        }

        if($request->hasFile('background_image')){
            $image3 = $request->file('background_image');
            $extension3 = $image3->getClientOriginalExtension();
            $logoURL3 = time().'.'.$image3->getClientOriginalExtension();
            if (file_exists(public_path('/uploads/' . $logoURL3))) {
                unlink(public_path('/uploads/' . $logoURL3));
            }
            $image3->move($uploadPath, $logoURL3);
            $header->background_image =$logoURL3;
        }else{
            $header->background_image = $request->file('background_image');
        }

        $header->site_title = $request->site_title;
        $header->site_tagline = $request->site_tagline;
        $header->site_logo_name = $request->site_logo_name;
        $header->save();



/*
        $input = $request->all();
        $destinationPath = public_path('uploads/');
        if ($site_logo = $request->file('site_logo')) {
            $siteLogoName = $request->file('site_logo')->getClientOriginalName();
            $MainSiteLogo = time() . "." . $siteLogoName;
            $site_logo->move($destinationPath, $MainSiteLogo);
            $input['site_logo'] = $MainSiteLogo;
        }else{
            unset($input['site_logo']);
        }

        
        $header->update($input);*/
       // return $request->file('site_logo');
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
    public function formValidation($request)
    {
        $this->validate($request, [
            'site_title' => 'required',
            'site_logo' => 'required',
            'site_icon' => 'required',
            'background_image' => 'required',
        ]);
    }
}
