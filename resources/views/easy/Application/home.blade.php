@extends('easy.layouts.default')

@section('content')
    <div id="title" style="text-align: center;">
        <h1>扑克头条</h1>
        <div style="padding: 5px; font-size: 16px;">{{ Inspiring::quote() }}</div>
    </div>
    <hr>
    <div id="content">
        <ul>
            @foreach ($articles as $article)
                <li style="margin: 50px 0;">
                    <div class="title">
                        <a href="{{ URL('articles/'.$article->id) }}">
                            <h4>{{ $article->title }}<h4>
                        </a>
                        <a href="{{ URL('category/'.$article->category->id) }}">
                            <h4>{{$article->category->title}}</h4>
                        </a>
                    </div>
                    <div class="body">
                        <p>{!! $article->content !!}</p>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
@endsection