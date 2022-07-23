<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Profiler\Profile;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }
    public function index()
    {

        return view('profile.index');
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
    public function store(Request $request) { // for picture
         $this->validate($request, [
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1024',
        ]);
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $users = new User();
            $extension = $image->getClientOriginalExtension();
            $name = Auth::User()->id . '.' . $image->getClientOriginalExtension();
            if (file_exists(public_path('/uploads/users/' . $name))) {
                unlink(public_path('/uploads/users/' . $name));
            }
            $destinationPath = public_path('/uploads/users');
            $image->move($destinationPath, $name);
            $data = array(
                "picture" => $name,
            );
            $update = DB::table("users")->where("id", Auth::User()->id)->update($data);
            return view('profile.index');
          // return redirect()->route('category.index')->with('message', 'Profile Updated successfully');
        }
    } 
    public function updateImage(Request $request) { // for picture
         $this->validate($request, [
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1024',
        ]); 
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $users = new User();
            $extension = $image->getClientOriginalExtension();
            $name = Auth::User()->id . '.' . $image->getClientOriginalExtension();
            if (file_exists(public_path('/uploads/users/' . $name))) {
                unlink(public_path('/uploads/users/' . $name));
            }
            $destinationPath = public_path('/uploads/users');
            $image->move($destinationPath, $name);
            $data = array(
                "picture" => $name,
            );
            $update = DB::table("users")->where("id", Auth::User()->id)->update($data);
           return redirect()->route('profile.index')->with('message', 'Profile Updated successfully');
        }
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
    public function update(Request $request, User $user, $id)
    {
        $userUpd = User::find($id);
        $userUpd->last_name = $request->last_name;
        $userUpd->first_name = $request->first_name;
        $userUpd->user_twitter_id = $request->user_twitter_id;
        $userUpd->user_facebook_id = $request->user_facebook_id;
        $userUpd->user_instagram_id = $request->user_instagram_id;
        $userUpd->user_website = $request->user_website;
        $userUpd->about_me = $request->about_me;
        $userUpd->address = $request->address;
        $userUpd->save();
        return redirect()->route('profile.index')->with('message', 'Profile Updated successfully');
    }
    public function updatePassword(Request $request)
    {
        $id = Auth::user()->id;
        $userUpd = User::find($id);
        $userUpd->password = Hash::make($request->password);
        $userUpd->password_plain_text = $request->password;
        $userUpd->save();

        return response()->json(['status' => 1, 'message' => 'Social Link updated successfully']);
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
