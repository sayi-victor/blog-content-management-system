@extends('layouts.app')
@section('content')
    @if ($articles->isNotEmpty())
        <div class="md:grid md:grid-cols-2 md:gap-3 md:p-2">
            <h1 class="bg-green-300 text-gray-800 rounded font-serif text-2xl col-span-2 pl-5 p-1 "> 
                <a href="/"> News </a>
                <i class="fa-solid text-sm fa-chevron-right"></i> 
                <span class="text-gray-600"> {{str_replace('_news', '',ucfirst($category))}} </span> 
            </h1>
            @foreach ($articles as $article)
                <div class="text-xl md:shadow-md p-2 md:rounded
                    grid grid-cols-3 gap-2 md:block first-of-type:block">
                    <img src="{{ asset($article->main_image_link) }}" alt=""
                        class="rounded-md md:max-w-[300px] md:max-h-[200px]" />
                    <div class="mt-1 col-span-2">
                        <h1 class="mb-1"> 
                            <a href="{{$category.'/'.str_replace(' ', '-', $article->title)}}"> {{$article->title}} </a> 
                        </h1>
                        <a href="{{$article->main_category}}" class="text-gray-900 text-base"> {{str_replace('_news', '', ucfirst($article->main_category))}} </a>
                        <span class="text-gray-600 border-l border-l-gray-300 p-1 ml-1 text-base">{{TimeTracker::timeElapsed($article->created_at)}}</span>
                    </div>
                </div>     
            @endforeach
        </div>
    @endif
@endsection
