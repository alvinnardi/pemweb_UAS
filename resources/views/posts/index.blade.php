@extends('layouts.main')

@section('container')

@if(session()->has('success'))
<div class="alert alert-success alert-dismissible fade show col-lg-6" style="margin:10px auto;" role="alert">  
    {{ session('success') }} 
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>  
@endif
    <h1 class="mb-3 text-center">{{ $title }}</h1>
    <div class="row justify-content-center mb-3">
        <div class="col-md-6">
            <form action="/posts">
                @if (request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}">
                @endif
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Cari.." name="search" value="{{ request('search') }}">
                    <button class="btn btn-warning" type="submit">Cari</button>
                </div>
            </form>
        </div>
    </div>
    @if ($posts->count())
        <div class="container">
            <div class="row"> 
                @foreach ($posts as $post)
                    <div class="col-md-4 mb-3">
                        <div class="card" id="{{ $post->slug }}">
                            <div class="position-absolute px-3 py-2 " style="background-color:rgba(0, 0, 0, 0.5)"><a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none text-white">{{ $post->category->name }}</a>
                            </div>
                            @if($post->image)                         
                                <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}" class="img-fluid">
                            @else
                            <img src="https://source.unsplash.com/500x500?{{ $post->category->name }}" class="card-img-top" alt="{{ $post->category->name }}">
                            @endif
                            <div class="card-body d-inline">
                                <h4 class="">{{ $post->id }}</h4>
                                @if(auth()->user())   
                                    @foreach ($favorits as $favorit)
                                    @if($favorit->post_id == $post->id)
                                        <form action="/favorit/{{ $favorit->id }}" method="post" class="d-flex justify-content-end">
                                            @method('delete')
                                            @csrf
                                            <input type="hidden" name="index" value={{ true }}>
                                            <input type="hidden" name="slug" value={{ $post->slug }}>
                                            <input type="hidden" name="post_id" value={{ $post->id }}>
                                            <button type="submit" class="btn">
                                                <i class="bi bi-heart-fill"></i>
                                            </button>
                                        </form>
                                    @endif
                                    @endforeach
                                @else
                                <form action="/favorit" method="post" class="d-flex justify-content-end">
                                    @csrf
                                    <input type="hidden" value="{{ $post->id }}" name="post_id">
                                    <button type="submit" class="btn" >
                                        <i class="bi bi-heart" ></i>
                                    </button>
                                </form>
                                @endif
                                <h5 class="card-title">{{ $post->title }}</h5>
                                <p class="class-text">{{ $post->excerpt }}</p>
                                <a href="/posts/{{ $post->slug }}" class="text-decoration-none btn btn-warning">Read More</a>
                            </div>
                        </div>
                    </div>  
                @endforeach
            </div>
        </div>
    @else
        <p class="text-center fs-4">No Post Found.</p>
    @endif
        <div class="d-flex justify-content-end">
            {{ $posts->links() }}
        </div>
@endsection