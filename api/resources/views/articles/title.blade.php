@extends('layouts.app')
@section('content')
    <div class="p-2">
        <h1 class="bg-green-300 text-gray-800 rounded font-serif text-2xl pl-5 p-1"> 
            <a href="/"> News </a>
            <i class="fa-solid text-sm fa-chevron-right"></i> 
            <a href={{'/news/'.str_replace('_', '-',$article->main_category)}}> 
                {{ucfirst(str_replace('_news', '', $article->main_category))}}
            </a> 
            <i class="fa-solid text-sm fa-chevron-right"></i> 
        </h1>
        <div class="mt-2">
            <h1 class="text-2xl"> {{$article->title}} </h1>
            <div class="text-gray-600 my-2 text-base">
                <a href="" class="border-r mr-1 border-gray-500">By {{$article->author}} </a>
                {{$article->created_at->format('D, M d, Y')}} 
            </div>
            <div class="mb-0.5">
                <a class="p-1 mr-0.5" href="">
                    <i class="fa-solid text-xl fa-link"></i> 
                </a>
                <a class="p-1 mr-0.5" href="">
                    <i class="fa-brands text-xl fa-facebook-f"></i> 
                </a>
                <a class="p-1 mr-0.5" href="">
                    <i class="fa-brands text-xl fa-twitter"></i> 
                </a>
                <a class="p-1 mr-0.5" href="">
                    <i class="fa-brands text-xl fa-whatsapp"></i> 
                </a>
                {{-- <a class="p-1 mr-0.5" href="">
                    <i class="fa-solid text-xl fa-bookmark"></i> 
                </a> --}}
            </div>

            <img src="{{ asset($article->main_image_link) }}" alt=""
                class="rounded-md" />
            <div class="text-lg text-justify mt-2">
                {{$article->body}}
            </div>
        </div>
    </div>
@endsection
