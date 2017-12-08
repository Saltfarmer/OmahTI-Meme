@extends('layouts.master')

@section('title','masuk')

@section('headerContent')
    
    <h4>Tambah Meme</h4>

@endsection

@section('content')
    <div class="container">
        <div class="container">
            <div class="form">
                <h5 class="form-title">Masukkan judul dan foto</h5>
                <div class="row">
                    <form class="col s12">
                        <div class="row">
                            <div class="input-field col s12">
                                <input placeholder="Masih Saya Pantau" id="title" type="text" class="validate" required>
                                <label for="title">Judul</label>
                            </div>
                            <div class="file-field input-field col s12">
                                <a class="btn waves-effect waves-light red"><i class="material-icons left">add</i><input type="file" id="inputPic"> Add Picture</a>
                            </div>
                            <div class="col s12">
                                <br>
                                <img src="{{url('images/preview.jpg')}}" width="100%" id="previewPic">
                            </div>
                            <div class="input-field col s12 center">
                                <input type="submit" class="waves-effect waves-light btn indigo" value="Submit">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                
                reader.onload = function (e) {
                    $('#previewPic').attr('src', e.target.result);
                }
                
                reader.readAsDataURL(input.files[0]);
            }
        };
        
        $("#inputPic").change(function(){
            readURL(this);
        });
    </script>
@endsection