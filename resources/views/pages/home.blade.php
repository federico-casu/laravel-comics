@extends('layouts.app')

@section('title')
    DC | Home
@endsection

@section('main')
    <main>
        <figure id="jumbotron">
            <img src="{{ Vite::asset('resources/img/jumbotron.png')}}" alt="">
        </figure>

        <section class="content">
            <div id="comics" class="container">
    
                <span class="current-series">current series</span>
                
                {{-- {{ dd($comics) }} --}}

                @foreach ($comics as $comic)
                    <div class="comic">
                        <figure>
                            <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                        </figure>
                        <span>{{ $comic['series'] }}</span>
                    </div>
                @endforeach
        
                <span class="load-more">load more</span>
            </div>
        </section>


    </main>
@endsection
