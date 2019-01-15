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
                                    <td>Zafer Gök</td>
                                    <td>1</td>
                                    <td>15</td>
                                </tr>
                                <tr>
                                    <td>Saim Akın Ankaralı</td>
                                    <th>2</th>
                                    <td>38</td>
                                </tr>
                                <tr>
                                    <td>Tamer Ankaralı</td>
                                    <th>3</th>
                                    <td>1</td>
                                </tr>
                                </tbody>
                            </table>

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
