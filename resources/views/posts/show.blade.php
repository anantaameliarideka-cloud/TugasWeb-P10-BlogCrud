@extends('layouts.app')

@section('title', $post->title)

@section('content')
    <x-card :title="$post->title">
        <p class="text-muted">Dibuat {{ $post->created_at->format('d M Y H:i') }}</p>
        <p style="white-space: pre-line">{{ $post->content }}</p>
        <a href="{{ route('posts.index') }}" class="btn btn-secondary">Kembali</a>
    </x-card>
@endsection