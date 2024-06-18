@extends('layouts.page')

@section('style')
    @vite('resources/sass/pages/index.sass')
@endsection

@section('content')
    <div class="papers">
        @foreach ($papers as $paper)
            <a href="">
                <div class="paper">
                    <div class="paper-header">
                        <h2>{{$paper->title}}</h2>
                    </div>
                    <div class="paper-body">
                        <img src="{{$paper->image}}" alt="">
                        <p>{!! $paper->body !!}</p>
                    </div>
                    <div class="paper-footer">
                        <span class="paper-date">{{ $paper->created_at->format('D, d F Y') }} года</span>
                    </div>
                </div>
            </a>
        @endforeach
    </div>
@endsection
