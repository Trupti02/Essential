<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{

    public function create(){
        return view('admin.blog.create');
    }

    public function store(Request $request){

        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'status' => 'required',
            // 'category_id' => 'required',
            'profile_image' => 'nullable|mimes:jpeg,bmp,png,jpg',


        ]);
        $form = new Blog();
        $form->title=$request->title;
        $form->description=$request->description;
        $form->status=$request->status;
        // $form->category_id=$request->category_id;
        if($request->hasFile('profile_image'));
        {
            $file = $request->file('profile_image');
            $extension=$file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/',$filename);
            $form->profile_image = $filename;
        }


        $form->save();
        return redirect()->route('blog.index')->with('message', 'Added Succesfully!');


    }

    public function index(){
        $form = Blog::all();
        return view('admin.blog.index',compact('form'));
    }
}
