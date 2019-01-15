@extends('layouts.app')

@section('content')

    <section class="hero is-large is-bold has-bg-img">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="columns">
                    <div class="column">
                        <div class="notification is-link">
                            <h3 class="title is-size-5">Seç ve Dağıt</h3>
                            <div class="control">
                                <label class="radio">
                                    <input type="radio" name="answer">
                                    Oda-1
                                </label>
                                <label class="radio">
                                    <input type="radio" name="answer">
                                    Oda-2
                                </label>
                                <label class="radio">
                                    <input type="radio" name="answer">
                                    Oda-3
                                </label>
                            </div>
                            <br>
                            <a class="button is-warning is-fullwidth" href="http://localhost/lsapp/public/workers"><strong>Dağıt</strong></a>

                        </div>
                    </div>
                    <div class="column">
                        <div class="notification is-primary">
                            <h3 class="title is-size-5">Çalışanlar ve Masaları</h3>

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
                    </div>
                    <div class="column">
                        <div class="notification is-link">
                            <a class="button is-warning"><strong>Ortak Alan</strong></a>
                            <br>
                            <br>
                            <a class="button is-warning"><strong>İşlemleri Sıfırla</strong></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

@endsection
