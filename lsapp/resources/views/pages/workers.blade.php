@extends('layouts.app')

@section('content')
    <h1><strong>{{$title}}</strong></h1>
    @if(count($workers) >0)
        <table class="table">
            <thead>
            <tr>
                <th>Name</th>
                <th>Surname</th>
                <th>Position</th>
                <th>Room</th>
            </tr>
            </thead>
            <tbody>
            <tr>
        @foreach($workers as $worker)
                    <td>{{$worker}}</td>
        @endforeach
            </tr>
        </table>

    @endif

@endsection
