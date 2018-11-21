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
            @foreach($voyageur as $v)
                <li>
                    <a href="#">
                        <img src="assets/images/pictures/sahale-wa.jpg" alt="Green Beach"/>
                    </a>

                    <h2><a href="#">{!!$v['firstname']!!} {!!$v['lastname']!!}</a></h2>

                    <p>{{$v['hobbies_list.name']}}</p>
                    <p>{!!$v['role_list.Utilisateur']!!}</p>

                    <span>by <a href="#">Author Name</a> &middot; 22nd Aug 2015</span>

                    <div>17</div>
                </li>
            @endforeach
        </ul>
    </div>
@endsection