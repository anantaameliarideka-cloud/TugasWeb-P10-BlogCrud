<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->paginate(5);

        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title'   => 'required|string|min:3|max:255',
            'content' => 'required|string|min:10',
        ]);

        Post::create($data);

        return redirect()->route('posts.index')
            ->with('success', 'Post berhasil ditambahkan.');
    }

    // Route Model Binding: Laravel otomatis mencari Post berdasarkan {post} di URL
    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, Post $post)
    {
        $data = $request->validate([
            'title'   => 'required|string|min:3|max:255',
            'content' => 'required|string|min:10',
        ]);

        $post->update($data);

        return redirect()->route('posts.index')
            ->with('success', 'Post berhasil diperbarui.');
    }

    public function destroy(Post $post)
    {
        try {
            $post->delete();

            return redirect()->route('posts.index')
                ->with('success', 'Post berhasil dihapus.');
        } catch (\Throwable $e) {
            return redirect()->route('posts.index')
                ->with('error', 'Gagal menghapus post.');
        }
    }
}