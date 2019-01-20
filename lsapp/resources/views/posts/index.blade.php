@extends('layouts.app')

@section('content')
    <script src="https://cdn.jsdelivr.net/npm/vue"></script>
    <section class="hero is-large is-bold has-bg-img">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="columns">
                    <div class="column">
                        <div class="notification is-link">
                            <h3 class="title is-size-5">Seç ve Dağıt</h3>
                            <div class="control" id="app">
                                <label class="radio">
                                    <input type="radio" name="answer" v-model="x" value="1">
                                    Oda-1
                                </label>
                                <label class="radio">
                                    <input type="radio" name="answer" v-model="x" value="2">
                                    Oda-2
                                </label>
                                <label class="radio">
                                    <input type="radio" name="answer" v-model="x" value="3">
                                    Oda-3
                                </label>
                            </div>
                            <br>
                            <a class="button is-warning is-fullwidth"
                               href="http://localhost/lsapp/public/workers" v-if='x'><strong>Dağıt</strong></a>

                        </div>
                    </div>
                    <div class="column">
                        <div class="notification is-primary">
                            <h3 class="title is-size-5">Çalışanlar ve Masaları</h3>

                            <!-- VUE CODE SHOULD TAKE VALUE OF X AND DB PROCESS SHOULD RETURN WITH X'S VALUE.
                                 THEN ROOMANDLIST COMPONENT SHOULD SHOW PROCESSED TABLE. BUT IT IS NOT WORKING.
                            -->
                            <div id="app">
                                <div class="show" v-show="'x' === '1'">
                                    <!-- WORKERCONTROLLER -> INDEX FUNCTION -->
                                    <RoomAndList></RoomAndList>
                                </div>
                                <div class="show" v-show="'x' === '2'">
                                    <!-- WORKERCONTROLLER -> ROOM2INDEX FUNCTION -->
                                    <RoomAndList></RoomAndList>
                                </div>
                                <div class="show" v-show="'x' === '3'">
                                    <!-- WORKERCONTROLLER -> ROOM3INDEX FUNCTION -->
                                    <RoomAndList></RoomAndList>
                                </div>
                                <div class="show" v-show="'x' === '4'">
                                    <!-- WORKERCONTROLLER -> FREESCPACEINDEX FUNCTION -->
                                    <RoomAndList></RoomAndList>
                                </div>
                            </div>

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
