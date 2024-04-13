<?php

namespace App\Http\Controllers;

use App\Models\Blogcrud;
use Illuminate\Http\Request;

class BlogCrudController extends Controller
{
    public function listView()
    {
        $blogs = Blogcrud::all();
        return view('list' , compact('blogs'));
    }

    public function addView()
    {
        return view('add');
    }

    public function updateView($id)
    {   
        $blogs = Blogcrud::find($id);
        return view('update' , compact('blogs'));
    }

    

    public function Blogadd(Request $request)
    {   
        Blogcrud::create([
            'blog_name' => $request->blog_name,
            'blog_explanation' => $request->blog_explanation,
            'blog_type' => $request->blog_type
        ]);
        return redirect('/');
    }

    public function Blogupdate(Request $request , $id)
    {
        $blog = Blogcrud::find($id);
        $blog->update($request->all());

        return redirect('/');
    }

    public function Blogdelete(Request $request , $id)
    {
        $blog = Blogcrud::find($id);
        $blog->delete($request->all());

        return redirect('/');
    }
}
