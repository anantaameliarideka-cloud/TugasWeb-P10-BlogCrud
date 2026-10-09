@extends('layouts.app')

@section('title', 'Daftar Post')

@section('content')
    <x-card title="Daftar Post">
        <table class="table table-hover align-middle">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Judul</th>
                    <th>Dibuat</th>
                    <th class="text-end">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($posts as $post)
                    <tr>
                        <td>{{ $posts->firstItem() + $loop->index }}</td>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->created_at->format('d M Y') }}</td>
                        <td class="text-end">
                            <a href="{{ route('posts.show', $post) }}" class="btn btn-sm btn-info">Lihat</a>
                            <a href="{{ route('posts.edit', $post) }}" class="btn btn-sm btn-warning">Edit</a>

                            <form action="{{ route('posts.destroy', $post) }}" method="POST" class="d-inline"
                                  onsubmit="return confirm('Yakin hapus post ini?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="text-center text-muted">Belum ada post.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        {{ $posts->links() }}
    </x-card>
@endsection