@extends('layouts.app')
@section('content')
    {{-- latest --}}
    @if ($articles->where('main_category', 'latest')->isNotEmpty())
        @php
            $latests = $articles->where('main_category', 'latest')->take(5);
        @endphp
        <div class="md:grid md:grid-cols-3 md:gap-3 md:p-2">
            <h1 class="bg-green-300 text-gray-800 col-span-3 rounded font-serif text-2xl pl-5 pb-1"> 
                <a href="/news/latest"> Latest </a> 
            </h1>
            @foreach ($latests as $latest)
                <div class="md:first-of-type:col-span-2 first-of-type:text-2xl text-xl md:shadow-md p-2 md:rounded
                    grid grid-cols-3 gap-2 md:block first-of-type:block">
                    <a href="{{'/news/latest/'.str_replace(' ', '-', $latest->title)}}">
                        <img src="{{ asset($latest->main_image_link) }}" alt=""
                        class="rounded-md" />
                    </a>
                    <div class="col-span-2">
                        <h1 class="mb-1"> 
                            <a href="{{'/news/latest/'.str_replace(' ', '-', $latest->title)}}"> {{$latest->title}} </a> 
                        </h1>
                        <a href="{{'/news/'.str_replace('_','-',$latest->main_category)}}" class="text-gray-900 text-base"> 
                            {{ucfirst($latest->main_category)}} 
                        </a>
                        <span class="text-gray-600 border-l border-l-gray-300 p-1 ml-1 text-base">
                            {{TimeTracker::timeElapsed($latest->created_at)}}
                        </span>
                    </div>
                </div>     
                @endforeach
            </div>
        @endif
    {{-- politics --}}
    @if ($articles->where('main_category', 'politics')->isNotEmpty())
        @php
            $politics = $articles->where('main_category', 'politics')->take(5);
        @endphp
        <div class="md:grid md:grid-cols-3 md:gap-3 md:p-2">
            <h1  class="bg-green-300 text-gray-800 rounded font-serif text-2xl pl-5 p-1 md:col-span-3"> 
                <a href="/news/politics"> Politics </a> 
            </h1>
            @foreach ($politics as $politic)
                <div class="md:first-of-type:col-span-2 first-of-type:text-2xl text-xl md:shadow-md p-2 md:rounded
                    grid grid-cols-3 gap-2 md:block first-of-type:block">
                <a href="{{'/news/politics/'.strtolower(str_replace(' ', '-', $politic->title))}}">
                    <img src="{{ asset($politic->main_image_link) }}" alt=""
                        class="rounded-md" />
                </a>
                <div class="mt-1 place-self-start col-span-2">
                    <h1 class="text-xl mb-1"> 
                        <a href="{{'/news/politics/'.strtolower(str_replace(' ', '-', $politic->title))}}"> {{$politic->title}} </a> 
                    </h1>
                    <a href="/news/politics" class="text-gray-900"> {{ucfirst($politic->main_category)}} </a>
                    <span class="text-gray-600 border-l border-l-gray-300 p-1 ml-1 text-base">
                        {{TimeTracker::timeElapsed($politic->created_at)}}
                    </span>
                </div>
             </div>     
            @endforeach
        </div>
    @endif
    {{-- sports --}}
    @if ($articles->where('main_category', 'sports')->isNotEmpty())
        <div class="md:grid md:grid-cols-3 md:gap-3 md:p-2">
            @php
                $sports = $articles->where('main_category', 'sports')->take(5);
            @endphp
            <h1 class="bg-green-300 text-gray-800 rounded font-serif text-2xl pl-5 p-1 col-span-3"> 
                <a href="/news/sports"> Sports </a> 
            </h1>
            @foreach ($sports as $sport)
                <div class="md:first-of-type:col-span-2 first-of-type:text-2xl text-xl md:shadow-md p-2 md:rounded
                    grid grid-cols-3 gap-2 md:block first-of-type:block">
                    <a href="{{'/news/sports/'.strtolower(str_replace(' ', '-', $sport->title))}}">
                        <img src="{{ asset($sport->main_image_link) }}" alt=""
                         class="rounded" />
                    </a>
                    <div class="mt-1 col-span-2">
                        <h1 class="text-xl mb-1"> 
                            <a href="{{'/news/sports/'.strtolower(str_replace(' ', '-', $sport->title))}}">
                                {{$sport->title}} </a> 
                        </h1>
                        <a href="/news/sports" class="text-gray-900 first-letter:uppercase"> 
                            {{ucfirst($sport->main_category)}} 
                        </a>
                        <span class="text-gray-600 border-l border-l-gray-300 p-1 ml-1 text-base">
                            {{TimeTracker::timeElapsed($sport->created_at)}}
                        </span>
                    </div>
                </div>      
            @endforeach
        </div>
    @endif
    {{-- Celebrity News --}}
    @if ($articles->where('main_category', 'celebrity_news')->isNotEmpty())
        <div class="md:grid md:grid-cols-3 md:gap-3 md:p-2">
            @php
                $celebrity_news = $articles->where('main_category', 'celebrity_news')->take(5);
            @endphp
            <h1 class="bg-green-300 text-gray-800 rounded font-serif text-2xl pl-5 p-1 col-span-3"> 
                <a href="/news/celebrity-news"> Celebrity </a> 
            </h1>
            @foreach ($celebrity_news as $celebrity_new)
                <div class="md:first-of-type:col-span-2 first-of-type:text-2xl text-xl md:shadow-md p-2 md:rounded
                    grid grid-cols-3 gap-2 md:block first-of-type:block">
                    <a href="{{'/news/celebrity-news/'.strtolower(str_replace(' ', '-', $celebrity_new->title))}}">
                        <img src="{{ asset($celebrity_new->main_image_link) }}" alt="{{$celebrity_new->main_image_link}}"
                            class="rounded max-h-[300px]" />
                    </a>
                    <div class="mt-1 col-span-2">
                        <h1 class="text-xl mb-1"> 
                            <a href="{{'/news/celebrity-news/'.strtolower(str_replace(' ', '-', $celebrity_new->title))}}">
                                {{$celebrity_new->title}} </a> 
                        </h1>
                        <a href="/news/celebrity-news" class="text-gray-900 text-base"> 
                            {{ucfirst(str_replace('_news','',$celebrity_new->main_category))}} 
                        </a>
                        <span class="text-gray-600 border-l border-l-gray-300 p-1 ml-1 text-base">
                            {{TimeTracker::timeElapsed($celebrity_new->created_at)}}
                        </span>
                    </div>
                </div>     
            @endforeach
        </div>
    @endif
    {{-- Entertainment --}}
    @if ($articles->where('main_category', 'entertainment')->isNotEmpty())
        <div class="md:grid md:grid-cols-3 md:gap-3 md:p-2">
            @php
                $entertainments = $articles->where('main_category', 'entertainment')->take(5);
            @endphp
            <h1 class="bg-green-300 text-gray-800 rounded font-serif text-2xl pl-5 p-1 col-span-3"> 
                <a href=""> Entertainment </a> 
            </h1>
            @foreach ($entertainments as $entertainment)
                <div class="md:first-of-type:col-span-2 first-of-type:text-2xl text-xl md:shadow-md p-2 md:rounded
                    grid grid-cols-3 gap-2 md:block first-of-type:block">
                    <a href="{{'/news/entertainment/'.strtolower(str_replace(' ', '-', $entertainment->title))}}">
                        <img src="{{ asset($entertainment->main_image_link) }}" alt=""
                            class="rounded-md" />
                    </a>
                    <div class="mt-1 col-span-2">
                        <h1 class="mb-1"> 
                            <a href="{{'/news/entertainment/'.strtolower(str_replace(' ', '-', $entertainment->title))}}">
                                {{$entertainment->title}} 
                            </a> 
                        </h1>
                        <a class="text-base" href="/news/entertainment">
                            {{ucfirst($entertainment->main_category)}} 
                        </a>
                        <span class="text-gray-600 border-l border-l-gray-300 p-1 ml-1 text-base">
                            {{TimeTracker::timeElapsed($entertainment->created_at)}}
                        </span>
                    </div>
                </div>     
            @endforeach
        </div>
    @endif
    {{-- Opinion --}}
    @if ($articles->where('main_category', 'opinion')->isNotEmpty())
        <div class="mt-1">
            @php
                $opinions = $articles->where('main_category', 'opinion')->take(5);
            @endphp
            <h1 class="bg-green-300 text-gray-800 rounded font-serif text-2xl pl-5 p-1 "> 
                <a href="/news/opinion"> Opinion </a> 
            </h1>
            @foreach ($opinions as $opinion)
                <div class="border-b border-b-gray-200 p-2 last-of-type:border-b-0">
                    <div class="mt-1">
                        <h1 class="text-xl mb-1"> 
                            <a href="{{'/news/opinion/'.strtolower(str_replace(' ', '-', $opinion->title))}}">
                                {{$opinion->title}} 
                            </a> 
                        </h1>
                        <a href="/news/opinion" class="text-gray-900">
                            {{ucfirst($opinion->main_category)}} 
                        </a>
                        <span class="text-gray-600 border-l border-l-gray-300 p-1 ml-1 text-base">
                            {{TimeTracker::timeElapsed($opinion->created_at)}}
                        </span>
                    </div>
                </div>     
            @endforeach
        </div>
    @endif
@endsection