@extends('layouts.app')

@section('content')
    <h1><strong>{{$title}}</strong></h1>
    @if(count($rooms) >0)
        <table class="table">
            <thead>
            <tr>
                <th>RoomID</th>
                <th>Room Name</th>
                <th>Capacity</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                @foreach($rooms as $room)
                    <td>{{$room}}</td>
                @endforeach
            </tr>
        </table>

    @endif
@endsection
