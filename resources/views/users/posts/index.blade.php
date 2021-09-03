@extends('layout.app')
@section('content')
    <div class=" flex justify-center">
        <div class=" w-4/12 bg-white ">
            <div class="p-6">
                <h1 class="text-2xl font-medium mb-1">{{ $user->name }}</h1>
                <p>Posted {{ $posts->count() }} {{ Str::plural('post',$posts->count()) }} and recived {{ $user->receivedLikes->count() }} likes</p>
            </div>
            <div class="bg-white p-6 rounded-lg">
                    @if($posts->count())
                        @foreach($posts as $post)
                            <x-post :post="$post"/>
                        @endforeach
                        {{ $posts->Links() }}
                    @else
                        <p>{{ $user->name }}dose not have any post</p>
                    @endif
            </div>
        </div>
    </div>
@endsection
