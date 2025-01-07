<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(){
       $datas = [
            [
                'title'   => 'Laravel',
                'content' => 'Laravel is a web framework for PHP', 
                'author'  => 'John Doe',
                'date'    => '2025-1-5'
            ],

            [
                'title'   => 'PHP',
                'content' => 'PHP is a server-side scripting language',
                'author'  => 'Jane Smith',
                'date'    => '2025-1-6'
            ]

        ];
            return view('posts.index', compact('datas'));
    }

    public function profile () {
        return view('posts.profile');
    }

    public function create() {
        return view('posts.create');
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $title   = $request->input('title');
        $author  = $request->input('author');
        $content = $request->input('content');
        $tags    = $request->input('tags');

        DB::table('blog_posts')->insert([
            'title'       => $title,
            'author'      => $author,
            'content'     => $content,
            'tags'        => $tags,
            'created_at'  => date('Y-m-d H:i:s'),
            'updated_at'  => date('Y-m-d H:i:s'),
        ]);

        return redirect('posts.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('posts.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
