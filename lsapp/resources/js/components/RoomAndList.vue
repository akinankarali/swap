<template>
    <div>
        @if(count($posts)   >   0)
        @foreach($posts as $post)
        <table class="table">
            <thead>
            <tr>
                <th>İsim Soyisim</th>
                <th>Oda Numarası</th>
                <th>Masa Numarası</th>

            </tr>
            </thead>

            <tbody>

            <tr>
                <td>{{$post -> worker_name}}</td>
                <td>{{$post -> room_id}}</td>
                <td>{{$post -> table_id}}</td>
            </tr>
        </table>
        @endforeach
        @else
        <p>No Workers Found</p>
        @endif
    </div>
</template>
