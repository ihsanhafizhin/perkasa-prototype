@extends('layouts.layout-dashboard')

@section('content')

<div class="container-fluid container-content">
    <div class="container container-data-pendukung">
        <div class="row d-flex flex-column align-items-center justify-content-center">
            <h3 class="text-center">MENU HALAMAN UPLOAD</h3>
            <p class="text-center">pastikan semua data lengkap dan di scan pdf</p>
        </div>

        <form action="" class="form-data-pendukung">
            <div class="row d-flex justify-content-center row-form-data-pendukung">
                <div class="row">
                    <div class="col-6 d-flex flex-column align-items-start container-label">
                        <p>RAB(ttd cap basah)</p>
                        <p>TOR/KAK</p>
                        <p>Data Dukung</p>
                    </div>
                    <div class="col-6 input-container">
                        <div class="input-group d-flex align-items-center">
                            <input type="file" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                            <p class="keterangan-input">(File EXCEL, PDF atau RAR)</p>
                        </div>
                        <div class="input-group d-flex align-items-center">
                            <input type="file" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                            <p class="keterangan-input">(File PDF atau RAR)</p>
                        </div>
                        <div class="input-group d-flex align-items-center">
                            <input type="file" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                            <p class="keterangan-input">File PDF atau RAR</p>
                        </div>
                    </div>
                </div>
            </div>    
            <div class="row d-flex justify-content-end">
                <button type="submit" class="btn btn-primary btn-submit-datap">SUBMIT</button type="submit">
            </div>
        </form>
        
    </div>
</div>

@endsection