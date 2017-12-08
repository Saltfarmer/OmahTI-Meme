@extends('layouts.master')

@section('title','daftar')

@section('headerContent')
    
    <h4>Pendaftaran</h4>
    <ul class="tabs indigo white-text tabs-fixed-width">
        <li class="tab"><a href="#test1" class="white-text">Masuk</a></li>
        <li class="tab"><a href="#test1" class="white-text active">Daftar</a></li>
    </ul>

@endsection

@section('content')
    <div class="container">
        <div class="container">
            <div class="form">
                <h5 class="form-title">Silakan daftar untuk nge-meme</h5>
                <div class="row">
                    <form class="col s12">
                        <div class="row">
                            <div class="input-field col s12">
                                <input placeholder="cacadosman" id="name" type="text" class="validate" required>
                                <label for="name">Nama</label>
                            </div>
                            <div class="input-field col s12">
                                <input placeholder="user@email.com" id="email" type="email" class="validate" required>
                                <label for="email">Email</label>
                            </div>
                            <div class="input-field col s12">
                                <input placeholder="********" id="password" type="password" class="validate" required>
                                <label for="password">Password</label>
                            </div>
                            <div class="input-field col s12">
                                <input placeholder="Sistem Informasi" id="divisi" type="text" class="validate" required>
                                <label for="divisi">Divisi</label>
                            </div>
                            <div class="input-field col s12">
                                <input placeholder="2016" id="angkatan" type="number" class="validate" required>
                                <label for="angkatan">Angkatan</label>
                            </div>
                            <div class="input-field col s12 center">
                                <input type="submit" class="waves-effect waves-light btn indigo" value="Daftar">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection