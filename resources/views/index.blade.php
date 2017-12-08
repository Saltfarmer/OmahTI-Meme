@extends('layouts.master')

@section('title','home')

@section('headerContent')
    
    <h4>Postingan Meme</h4>
    <ul class="tabs indigo white-text tabs-fixed-width">
        <li class="tab"><a href="#test1" class="white-text">Semua</a></li>
        <li class="tab"><a href="#test1" class="white-text">Screenshot Chat</a></li>
        <li class="tab"><a href="#test1" class="white-text">Foto Anak OTI</a></li>
        <li class="tab"><a href="#test1" class="white-text">Lainnya</a></li>
    </ul>

@endsection

@section('content')
    <div class="container">
        <div class="container">
            <div class="fixed-action-btn">
                <a id="menu" class="waves-effect waves-light btn btn-floating btn-large red" ><i class="material-icons">add</i></a>
            </div>
            <div class="post">
                <h5 class="post-title"><a href="#" class="black-text">Sebuah Quotes</a></h5>
                <div class="post-pict">
                    <img class="responsive-img" src="{{url('meme/1.jpg')}}">
                </div>
                <div class="post-menu">
                    <div class="row">
                        <div class="col l4 s12">
                            <a class="btn-floating btn-small waves-effect waves-light blue "><i class="material-icons left">directions_bike</i></a>
                            <a class="btn-floating btn-small waves-effect waves-light green "><i class="material-icons left">insert_comment</i></a>
                            <b class="right hide-on-large-only">Cacadosman</b>
                        </div>
                        <div class="col l8 s12">
                            <p class="grey-text right hide-on-med-and-down"><b>Cacadosman</b> - 96 Tersepeda, 1001 Komentar.</p>
                            <p class="grey-text left hide-on-large-only">96 Tersepeda, 1001 Komentar.</p>
                        </div>
                    </div>
                </div>
                <hr>
            </div>
            <div class="post">
                <h5 class="post-title"><a href="#" class="black-text">Pantau dahulu, sleding kemudian</a></h5>
                <div class="post-pict">
                    <img class="responsive-img" src="{{url('meme/2.jpg')}}">
                </div>
                <div class="post-menu">
                    <div class="row">
                        <div class="col l4 s12">
                            <a class="btn-floating btn-small waves-effect waves-light blue "><i class="material-icons left">directions_bike</i></a>
                            <a class="btn-floating btn-small waves-effect waves-light green "><i class="material-icons left">insert_comment</i></a>
                            <b class="right hide-on-large-only">Cacadosman</b>
                        </div>
                        <div class="col l8 s12">
                            <p class="grey-text right hide-on-med-and-down"><b>Cacadosman</b> - 96 Tersepeda, 1001 Komentar.</p>
                            <p class="grey-text left hide-on-large-only">96 Tersepeda, 1001 Komentar.</p>
                        </div>
                    </div>
                </div>
                <hr>
            </div>
        </div>
    </div>
@endsection