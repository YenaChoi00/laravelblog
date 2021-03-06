@extends('layouts.app')

@section('content')
    <div class="w-4/5 m-auto text-left">
        <div class="py-15">
            <h1 class="text-6xl">
                {{ $post->title }}  <!--$post: post controller의 show()에서 보낸 세션변수-->
            </h1>
        </div>
    </div>

    <div class="w-4/5 m-auto">
        <span class="text-gray-500">
            By <span class="font-bold italic text-gray-800">{{ $post->user->name }}</span>, Created on {{ date('jS M Y', strtotime($post->updated_at)) }}
        </span>

        <div class="w-4/5 m-auto pt-20 pb-10">
            <img src="{{ asset('images/'.$post->image_path) }}" alt="" width="600">
        </div>
    
        <p class="text-xl text-gray-700 pt-8 pb-10 leading-8 font-light">
            {{ $post->description }}
        </p>
    </div>    

@endsection