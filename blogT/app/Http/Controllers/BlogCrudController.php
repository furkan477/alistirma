<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\BlogCrud;
use Illuminate\Http\Request;

class BlogCrudController extends Controller
{
    public function read()
    {
        $data = BlogCrud::all();
        return view('read',compact('data'));
    }

    public function createnew()
    {
        return view('create');
    }  
    public function Blogadd(Request $request)
    {   
        BlogCrud::create([
            'blog_name' => $request->blog_name,
            'blog_explanation' => $request->blog_explanation,
            'blog_type' => $request->blog_type
        ]);
        return redirect('/');
    }

    public function update(Request $request ,$id)
    {
        $data = BlogCrud::find($id);
        return view('update',compact('data'));
    }  
    public function updateBlog(Request $request , $id)
    {
        $data = BlogCrud::find($id);
        $data->update($request->all());
        return redirect('/');
    }

    public function delete(Request $request , $id)
    {
        $data = BlogCrud::find($id);
        $data->delete($request->all());
        return redirect('/');
    }  
}
