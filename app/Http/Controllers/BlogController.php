<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        return view('admin.blog.index');
    }
    public function manage()
    {
        return view('admin.blog.manage', ['blogs' => Blog::orderBy('id', 'desc')->get()]);
    }
    public function detail($id)
    {
        return view('admin.blog.detail', ['blog' => Blog::find($id)]);
    }
    public function updateStatus($id)
    {
        return redirect('/manage-blog')->with('message', Blog::updateBlogStatus($id));
    }
    public function create(Request $request)
    {
        Blog::newBlog($request);
        return redirect('/add-blog')->with('message', 'Blog create successfully.');
    }
    public function edit($id)
    {
        return view('admin.blog.edit', ['blog' => Blog::find($id)]);
    }
    public function update(Request $request, $id)
    {
        Blog::updateBlog($request, $id);
        return redirect('/manage-blog')->with('message', 'Blog info update successfully.');
    }
    public function delete($id)
    {
        Blog::deleteBlog($id);
        return redirect('/manage-blog')->with('message', 'Blog delete successfully');
    }
}
