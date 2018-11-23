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
                <th>User Id</th>
                <th>Travel Id</th>
                <th>Status</th>
                <th>Amount</th>
                <th>Debited Amount</th>
                <th>Credited Amount</th>
                <th>Donator Firstname</th>
                <th>Donator Lastname</th>
                <th>Travel Title</th>
            </thead>
            <tbody>
            @foreach($donation as $d)
            <tr>
                <td>{!!$d['user_id']!!}</td>
                <td>{!!$d['travel_id']!!}</td>
                <td>{!!$d['status']!!}</td>
                <td>{!!$d['amount_e']!!}</td>
                <td>{!!$d['debited_amount']!!}</td>
                <td>{!!$d['credited_amount']!!}</td>
                <td>{{$d['donator_firstname']}}</td>
                <td>{{$d['donator_lastname']}}</td>
                <td>{{$d['travel_title']}}</td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection