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
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Pseudo</th>
            <th>Status</th>
            <th>Email</th>
            <th>Birthdate_eu</th>
            <th>Phone</th>
            <th>Company_name</th>
            </thead>
            <tbody>
            @foreach($voyageur as $v)
                <tr>
                    <td>{!!$v['firstname']!!}</td>
                    <td>{!!$v['lastname']!!}</td>
                    <td>{!!$v['pseudo']!!}</td>
                    <td>{!!$v['status']!!}</td>
                    <td>{!!$v['email']!!}</td>
                    <td>{!!$v['birthdate_eu']!!}</td>
                    <td>{!!$v['phone']!!}</td>
                    <td>{!!$v['company_name']!!}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection