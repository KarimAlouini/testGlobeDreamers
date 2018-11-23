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

        <table class="table">
            <thead>
            <th>Title</th>
            <th>Description</th>
            <th>Content_why</th>
            </thead>
            <tbody>
            @foreach($voyage as $v)
                <tr>
                    <td>{!!$v['title']!!}</td>
                    <td>{{$v['description']}}</td>
                    <td>{!!$v['content_why']!!}</td>
                </tr>

            @endforeach
            </tbody>
        </table>
    </div>
@endsection