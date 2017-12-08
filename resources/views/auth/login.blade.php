@extends('layouts.master')

@section('title','masuk')

@section('headerContent')
    
    <h4>Halaman Masuk</h4>
    <ul class="tabs indigo white-text tabs-fixed-width">
        <li class="tab"><a href="#test1" class="white-text">Masuk</a></li>
        <li class="tab"><a href="#test1" class="white-text">Daftar</a></li>
    </ul>

@endsection

@section('content')
    <div class="container">
        <div class="container">
            <div class="form">
                <h5 class="form-title">Silakan masuk untuk melanjutkan</h5>
                <div class="row">
                    <form class="col s12">
                        <div class="row">
                            <div class="input-field col s12">
                                <input placeholder="user@email.com" id="email" type="email" class="validate" required>
                                <label for="email">Email</label>
                            </div>
                            <div class="input-field col s12">
                                <input placeholder="********" id="password" type="password" class="validate" required>
                                <label for="password">Password</label>
                            </div>
                            <div class="input-field col s12 center">
                                <input type="submit" class="waves-effect waves-light btn indigo" value="Masuk">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection