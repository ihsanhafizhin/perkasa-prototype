@extends('layouts.layout-landing')

@section('content')
<div class="row d-flex row-content align-items-center">
    <div class = "col-6">
   
        <center>
            <h3>SELAMAT DATANG DI</h3>
            <h1 style="color:red; font-size: 48px">APLIKASI PERKASA</h1>
            Aplikasi PERKASA merupakan alat untuk membantu <br>
            Satuan Kerja dalam menyusun RAB secara terintegrasi dan akuntabel <br>
            untuk kemudain dilakukan reviu oleh KPU RI dimana keseluruhan <br>
            proses terjadi secara <i>paperless</i><br>
        
            <div style = "color:red">
            <a href="{{ url('/login') }}" class = "btn button-login">LOGIN</a>
            </div>
            </center>
    </div>
        
    <div class = "col-6 d-flex justify-content-end">
            <img src="../assets/img/home1.png" alt="" width="80%" height="auto" style="margin-right: -20%; z-index:2;">   
    </div>
</div>
@endsection