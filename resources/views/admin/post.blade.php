@extends('layouts.master')

@section('title','admin panel')

@section('headerContent')
    
    <h4>Katanya admin panel sih :v</h4>
    <ul class="tabs indigo white-text tabs-fixed-width">
        <li class="tab"><a href="#test1" class="white-text">Dashboard</a></li>
        <li class="tab"><a href="#test1" class="white-text">Post Tydac Berfaedah</a></li>
        <li class="tab"><a href="#test1" class="white-text">Warga Micin</a></li>
        <li class="tab"><a href="#test1" class="white-text">Lainnya</a></li>
    </ul>

@endsection

@section('content')
    <div class="container">
        <div class="container">
           <div class="admin-panel">
                <p>List Karya Meme dari warga micin :</p>
                <table class="responsive-table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Judul</th>
                            <th>Warga Micin</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>1</th>
                            <th>Sebuah Quotes</th>
                            <th>Ichsanul Akbar</th>
                            <th><a class="btn-floating btn waves-effect waves-light red"><i class="material-icons">delete</i></a></th>
                        </tr>
                        <tr>
                            <th>2</th>
                            <th>Pantau dahulu, sleding kemudian</th>
                            <th>Nijar</th>
                            <th><a class="btn-floating btn waves-effect waves-light red"><i class="material-icons">delete</i></a></th>
                        </tr>
                    </tbody>
                </table>
           </div>
        </div>
    </div>
@endsection