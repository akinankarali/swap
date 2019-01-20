@extends('layouts.app')

@section('content')
    <h1><strong>Rooms</strong></h1>
    <br>
    @if(count($rooms)   >   0)
        @foreach($rooms as $room)
            <div class="notification">
                <h3>Room Name: {{$room -> room_name}}</h3>
                <p>Room Capacity: {{$room -> capacity}}</p>
                <p>Room Id: {{$room -> id}}</p>
            </div>
        @endforeach
    @else
        <p>No Rooms Found</p>
    @endif

@endsection
