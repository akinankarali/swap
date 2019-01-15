@extends('layouts.app')

@section('content')

    <h1>Rooms</h1>
    @if(count($rooms)   >   0)
        @foreach($rooms as $room)
            <div class="notification">
                <h3>Room Name:{{$room -> room_name}}</h3>
                <p>Room Capacity:{{$room -> capacity}}</p>
            </div>
        @endforeach
    @else
        <p>No Rooms Found</p>
    @endif
@endsection
