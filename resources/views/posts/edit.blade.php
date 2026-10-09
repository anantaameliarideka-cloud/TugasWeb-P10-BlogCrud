@extends('layouts.app')

@section('title', 'Edit Post')

@section('content')
    <x-card title="Edit Post">
        <form action="{{ route('posts.update', $post) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            @include('posts._form')
            <button type="submit" class="btn btn-primary">Perbarui</button>
            <a href="{{ route('posts.index') }}" class="btn btn-secondary">Batal</a>
        </form>
    </x-card>
@endsection