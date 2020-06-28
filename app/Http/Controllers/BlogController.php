<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index() {

        $blogs = blog::latest()->get();

        return view('blog.index', [
            'blog' => $blogs,
        ]);
    }

    public function show($id) {

        $blogs = blog::findOrFail($id);

        return view('blog.show', ['blog' => $blogs]);
    }

    public function create() {
        return view('blog.create');
    }

    public function store() {

        $blogs = new blog();

        $blogs->name = request('name');
        $blogs->type = request('type');
        $blogs->base = request('base');
        $blogs->toppings = request('toppings');

        $blogs->save();

        return redirect('/');

    }

    public function destroy($id) {

        $blogs = blog::findOrFail($id);
        $blogs->delete();

        return redirect('/blog');

    }
}
