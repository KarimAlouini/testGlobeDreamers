@extends('layouts.app')


@section('content')
    <link href="{{ asset('css/article-list-large.css') }}" rel="stylesheet">

    <div class="row">
        <div class="col">
            @if( session() -> has('success'))
                <div class="alert alert-success">
                    {{session()->get('success')}}
                </div>
            @endif
        </div>
    </div>

    <div class="container">
        <ul class="article-list-large">
            @foreach($voyage as $v)
                <li>

                    <h2><a href="#">{!!$v['title']!!}</a></h2>

                    <p>{{$v['description']}}</p>
                    <p>{!!$v['content_why']!!}</p>

                </li>
            @endforeach
        </ul>
    </div>
@endsection