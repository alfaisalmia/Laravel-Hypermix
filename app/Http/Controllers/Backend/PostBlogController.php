<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use League\Flysystem\File;

class PostBlogController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }
    public function index()
    {
        $posts = Post::with('categories')->get();
        // dd($posts);
        return view('postBlog.index', compact('posts'));
    }
    public function create()
    {
        $categories = Category::all();
        return view('postBlog.create', compact('categories'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'post_title' => 'required',
            'category_id' => 'required',
            'post_image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'postDescription' => 'required',
        ]);
        //for image 
        $uploadPath = public_path('uploads/posts');
        $fileName = $request->file('post_image')->getClientOriginalExtension();
        $newFileName = time() . '.' . $fileName;
        $post_image = $newFileName;
        $request->post_image->move($uploadPath, $newFileName);
        // text file 
        $textfilename = time() . '.' . 'txt';
        Storage::put('posts/' . $textfilename,  $request->postDescription);

        $post = new Post();
        $post->post_title = $request->post_title;
        $post->post_short_desc = $request->post_short_desc;
        $post->category_id = $request->category_id;
        $post->post_image = $post_image;
        $post->postDescription = $textfilename;
        $post->post_author = Auth::user()->username;
        $post->post_author_name = Auth::user()->first_name . ' ' . Auth::user()->last_name;
        $post->post_author_twitter = Auth::user()->user_twitter_id;
        $post->post_author_facebook = Auth::user()->user_facebook_id;
        $post->post_author_instagram = Auth::user()->user_instagram_id;
        $post->post_author_details = Auth::user()->about_me;
        $post->save();
        return redirect()->route('postblog.index')->with('create', 'Post has been created successfully.');

        //  write_file("./files/descr-{$id}.txt", $this->input->post("descr"));
    }
    public function show($id)
    {
        
        
    }
    public function edit($id)
    {
        $post = Post::find($id);
        $categories = Category::all();
        $val = $post->postDescription;
        //$txt = fgets(fopen(Storage::path('\posts\1627718007.txt'),'r'));
        $txt = fgets(fopen(Storage::path("\posts\\" . $val . '"'), 'r'));
        return view('postblog.edit', compact('post', 'categories', 'txt'));
    }
    public function update(Request $request, Post $post, $id)
    {

        $request->validate([
            'post_title' => 'required',
            'category_id' => 'required',
            'postDescription' => 'required',
        ]);

        $post = Post::find($id);

        //FOR PICTURE UPDATE
        global $old_image;
        $old_image = public_path('/upoads/posts/' . $post->post_image);
        if ($request->hasFile('post_image')) {
            if (file_exists(public_path('uploads/posts/' . $post->post_image))) {
                unlink(public_path('uploads/posts/' . $post->post_image));
            }
            $image = $request->file('post_image');
            $image_name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/uploads/posts');
            $image->move($destinationPath, $image_name);
            $post->post_image =  $image_name;
        } else {
            $post->post_image =  $post->post_image;
        }

        // For Text file Update
        $oddTetFileName = $post->postDescription;
        Storage::put('posts/' . $oddTetFileName,  $request->postDescription);
        $post->update([
            $post->post_title = $request->post_title,
            $post->post_short_desc = $request->post_short_desc,
            $post->category_id = $request->category_id,
            $post->postDescription = $oddTetFileName,
            $post->post_author = Auth::user()->username,
            $post->post_author_name = Auth::user()->first_name . ' ' . Auth::user()->last_name,
            $post->post_author_twitter = Auth::user()->user_twitter_id,
            $post->post_author_facebook = Auth::user()->user_facebook_id,
            $post->post_author_instagram = Auth::user()->user_instagram_id,
            $post->post_author_details = Auth::user()->about_me,
        ]);

        // return redirect()->route('profile.index')->with('message', 'Profile Updated successfully');
        return redirect()->route('postblog.index')->with('update', 'Post has been created successfully.');
    }
    public function destroy(Post  $post, $id)
    {
        $post = Post::find($id);
        unlink(public_path('uploads/posts/' . $post->post_image));
        Storage::delete('posts/' . $post->postDescription);
        $post->delete();
        return redirect()->route('postblog.index')->with('delete','Post deleted successfully');
    }
}
