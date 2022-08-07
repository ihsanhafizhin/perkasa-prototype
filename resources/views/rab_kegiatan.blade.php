@extends('layouts.layout-dashboard')

@section('content')
<div class="container-fluid container-content">
    <div class="row row-modal-button">
        <b>
            <a href="/" class="btn btn-success btn-add-rab" data-toggle="modal" data-target="#program" style="font-size:14px;"> + REKAM PROGRAM</a>
            <a href="/" class="btn btn btn-add-rab" data-toggle="modal" data-target="#kegiatan" style="background-color:greenyellow; color:white; font-size:14px;"> + REKAM KEGIATAN</a>
            <a href="/" class="btn btn-info btn-add-rab" data-toggle="modal" data-target="#kro" style="font-size:14px;"> + REKAM KRO</a>
            <a href="/" class="btn btn-primary btn-add-rab" data-toggle="modal" data-target="#ro" style="font-size:14px;"> + REKAM RO</a>
            <a href="/" class="btn btn-warning btn-add-rab" data-toggle="modal" data-target="#komponen" style="color:white font-size:14px;"> + REKAM KOMPONEN</a>
            <a href="/" class="btn btn-add-rab" data-toggle="modal" data-target="#subkomponen" style="background-color:orangered; color:white; font-size:14px;"> + REKAM SUB KOMPONEN</a>
            <a href="/" class="btn btn-add-rab" data-toggle="modal" data-target="#akun" style="background-color:red; color:white; font-size:14px;"> + REKAM AKUN</a>
            <a href="/" class="btn btn-add-rab" data-toggle="modal" data-target="#detail" style="background-color:maroon; color:white; font-size:14px;"> + REKAM DETAIL</a>
            <a href="/" class="btn btn-add-rab" data-toggle="modal" data-target="#dataUnitKerja" style="background-color:maroon; color:white; font-size:14px;"> + REKAM DETAIL</a>
        </b>
    </div>
    {{-- KONTEN --}}
    {{-- <div class="row row-content">
        <table class="table table-rincian">
            <thead>
              <tr>
                <th scope="col">Kode</th>
                <th scope="col">Uraian</th>
                <th scope="col">Volume</th>
                <th scope="col">Satuan</th>
                <th scope="col">Harga</th>
                <th scope="col">Jumlah</th>
                <th scope="col">Ket</th>
                <th scope="col">Aksi</th>
                <th scope="col">Catatan</th>
              </tr>
            </thead>
            <tbody class="table-group-divider">
              <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td colspan="2">Larry the Bird</td>
                <td>@twitter</td>
              </tr>
            </tbody>
          </table>
    </div> --}}
    
</div>


{{-- Start of Bagian Modal --}}
<div style="padding-top:10%;" class="modal fade" id="program" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document" style="margin-right:40%">
        <div class="modal-content" style="background-color:mediumseagreen; color:white;width:150%; height:80%;">
        <center>
        <div class="modal-header" style="padding-left:250px">
            <h5 class="modal-title" id="exampleModalLabel"><center>REKAM PROGRAM RKA K/L</center></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>

        <div class="modal-body">
            Kode Satker &nbsp: <input type="text" name="" id=""><br><br>
            Satker &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: <input type="text" name="" id=""><br><br>
            Program &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: <select name="" id=""><option value=""></option></select>
        </div>

        <div class="modal-footer" style="margin-top:22%">
            <input type="reset" name="" id="" value="Cancel" style="color:red">
            <input type="submit" name="" id="" value="Tambah" style="color:blue">
        </div>
        </center>
        </div>
    </div>
    </div>   

    <div style="padding-top:10%;" class="modal fade" id="kegiatan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document" style="margin-right:40%">
        <div class="modal-content" style="background-color:green; color:white;width:150%; height:80%;">
        <center>
        <div class="modal-header" style="padding-left:250px">
            <h5 class="modal-title" id="exampleModalLabel"><center>REKAM KEGIATAN RKA K/L</center></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>

        <div class="modal-body">
            <center>
            Kode Satker &nbsp: <input type="text" name="" id=""><br><br>
            Satker &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: <input type="text" name="" id=""><br><br>
            Program &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: <select name="" id=""><option value=""></option></select><br><br>
            Kegiatan &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: <select name="" id=""><option value=""></option></select>
            </center>
        </div>

        <div class="modal-footer" style="margin-top:15%">
            <input type="reset" name="" id="" value="Cancel" style="color:red">
            <input type="submit" name="" id="" value="Tambah" style="color:blue">
        </div>
        </center>
        </div>
    </div>
    </div>   

    <div style="padding-top:10%;" class="modal fade" id="kro" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document" style="margin-right:40%">
        <div class="modal-content" style="background-color:cadetblue; color:white;width:150%; height:80%;">
        <center>
        <div class="modal-header" style="padding-left:250px">
            <h5 class="modal-title" id="exampleModalLabel"><center>REKAM KRO RKA K/L</center></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>

        <div class="modal-body">
            Kode Satker &nbsp: <input type="text" name="" id=""><br><br>
            Satker &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: <input type="text" name="" id=""><br><br>
            Program &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: <select name="" id=""><option value=""></option></select><br><br>
            Kegiatan &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: <select name="" id=""><option value=""></option></select><br><br>
            KRO &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: <select name="" id=""><option value=""></option></select>
        </div>

        <div class="modal-footer" style="margin-top:5%">
            <input type="reset" name="" id="" value="Cancel" style="color:red">
            <input type="submit" name="" id="" value="Tambah" style="color:blue">
        </div>
        </center>
        </div>
    </div>
    </div>
    
    <div style="padding-top:10%;" class="modal fade" id="ro" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document" style="margin-right:40%">
        <div class="modal-content" style="background-color:blue; color:white;width:150%; height:80%;">
        <center>
        <div class="modal-header" style="padding-left:250px">
            <h5 class="modal-title" id="exampleModalLabel"><center>REKAM RO RKA K/L</center></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>

        <div class="modal-body">
            Kode Satker &nbsp: <input type="text" name="" id=""><br><br>
            Satker &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: <input type="text" name="" id=""><br><br>
            Program &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: <select name="" id=""><option value=""></option></select><br><br>
            Kegiatan &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: <select name="" id=""><option value=""></option></select><br><br>
            KRO &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: <select name="" id=""><option value=""></option></select><br><br>
            RO &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: <select name="" id=""><option value=""></option></select>
        </div>

        <div class="modal-footer">
            <input type="reset" name="" id="" value="Cancel" style="color:red">
            <input type="submit" name="" id="" value="Tambah" style="color:blue">
        </div>
        </center>
        </div>
    </div>
    </div>

    
    <div style="padding-top:10%;" class="modal fade" id="komponen" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document" style="margin-right:40%">
        <div class="modal-content" style="background-color:darkorange; color:white;width:150%; height:90%;">
        <center>
        <div class="modal-header" style="padding-left:250px">
            <h5 class="modal-title" id="exampleModalLabel"><center>REKAM KOMPONEN RKA K/L</center></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>

        <div class="modal-body">
            Kode Satker &nbsp: <input type="text" name="" id=""><br><br>
            Satker &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: <input type="text" name="" id=""><br><br>
            Program &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: <select name="" id=""><option value=""></option></select><br><br>
            Kegiatan &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: <select name="" id=""><option value=""></option></select><br><br>
            KRO &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: <select name="" id=""><option value=""></option></select><br><br>
            RO &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: <select name="" id=""><option value=""></option></select><br><br>
            Komponen &nbsp&nbsp&nbsp: <select name="" id=""><option value=""></option></select>
        </div>

        <div class="modal-footer" style="margin:auto">
            <input type="reset" name="" id="" value="Cancel" style="color:red">
            <input type="submit" name="" id="" value="Tambah" style="color:blue">
        </div>
        </center>
        </div>
    </div>
    </div>

    <div style="padding-top:10%;" class="modal fade" id="subkomponen" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document" style="margin-right:40%">
        <div class="modal-content" style="background-color:orangered; color:white;width:150%; height:115%;">
        <center>
        <div class="modal-header" style="padding-left:250px">
            <h5 class="modal-title" id="exampleModalLabel"><center>REKAM SUB KOMPONEN RKA K/L</center></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>

        <div class="modal-body">
            Kode Satker  &nbsp&nbsp&nbsp&nbsp: <input type="text" name="" id=""><br><br>
            Satker &nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: <input type="text" name="" id=""><br><br>
            Program &nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: <select name="" id=""><option value=""></option></select><br><br>
            Kegiatan &nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: <select name="" id=""><option value=""></option></select><br><br>
            KRO &nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: <select name="" id=""><option value=""></option></select><br><br>
            RO &nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: <select name="" id=""><option value=""></option></select><br><br>
            Komponen &nbsp&nbsp&nbsp &nbsp&nbsp&nbsp: <select name="" id=""><option value=""></option></select><br><br>
            Sub Komponen : <input type="text" name="" id=""><br><br>
            &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspJudul Sub Komp : <input type="text" name="" id="" 
            style="border-radius: 20px;width: 50%;height: 50px;padding: 10px;"><br><br>
        </div>

        <div class="modal-footer" style="margin:auto">
            <input type="reset" name="" id="" value="Cancel" style="color:red">
            <input type="submit" name="" id="" value="Tambah" style="color:blue">
        </div>
        </center>
        </div>
    </div>
    </div>

    <div style="padding-top:10%;" class="modal fade" id="akun" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document" style="margin-right:40%">
        <div class="modal-content" style="background-color:red; color:white;width:150%; height:110%;">
        <center>
        <div class="modal-header" style="padding-left:250px">
            <h5 class="modal-title" id="exampleModalLabel"><center>REKAM AKUN RKA K/L</center></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>

        <div class="modal-header">
            <div class="kanan">
                Kode Satker &nbsp: <input style="width: 70%;" type="text" name="" id=""><br><br>
                Satker &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: <input style="width: 70%;" type="text" name="" id=""><br><br>
                Program &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: <select name="" id="" style="width: 70%;" ><option value=""></option></select><br><br>
            </div>
            <div class="kiri">
                Kegiatan &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: <select name="" id="" style="width: 70%;"><option value=""></option></select><br><br>
                KRO &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: <select name="" id="" style="width: 70%;"><option value=""></option></select><br><br>
                RO &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: <select name="" id="" style="width: 70%;"><option value=""></option></select><br><br>
                Komponen &nbsp&nbsp&nbsp: <select name="" id="" style="width: 70%;"><option value="" ></option></select>
            </div>
        </div>

        <div class="modal-header">
            <div class="kirikuyy" style="margin-top:10px">
            Sub Komponen : <input type="text" name="" id="">
            </div>
            <div class="kanankuyy">
            Judul Sub Komp : <input type="text" name="" id="" 
            style="border-radius: 20px;width: 50%;height: 50px;padding: 10px;"><br><br>
            </div>
        </div>

        <div class="modal-body" align="center">
        Kode Akun : <select name="" id=""><option value="" ></option></select>
        </div>
        

        <div class="modal-body" style="margin-top:10%; margin-left:60%">
            <input type="reset" name="" id="" value="Cancel" style="color:red">
            <input type="submit" name="" id="" value="Tambah" style="color:blue">
        </div>

        </center>
        </div>
    </div>
    </div> 
    
    <div style="padding-top:10%;" class="modal fade" id="detail" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document" style="margin-right:40%">
        <div class="modal-content" style="background-color:maroon; color:white;width:150%; height:115%;">
        <center>
        <div class="modal-header" style="padding-left:250px">
            <h5 class="modal-title" id="exampleModalLabel"><center>REKAM DETAIL RKA K/L</center></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>

        <div class="modal-header">
            <div class="kanan">
                Kode Satker &nbsp: <input style="width: 70%;" type="text" name="" id=""><br><br>
                Satker &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: <input style="width: 70%;" type="text" name="" id=""><br><br>
                Program &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: <select name="" id="" style="width: 70%;" ><option value=""></option></select><br><br>
            </div>
            <div class="kiri">
                Kegiatan &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: <select name="" id="" style="width: 70%;"><option value=""></option></select><br><br>
                KRO &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: <select name="" id="" style="width: 70%;"><option value=""></option></select><br><br>
                RO &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: <select name="" id="" style="width: 70%;"><option value=""></option></select><br><br>
                Komponen &nbsp&nbsp&nbsp: <select name="" id="" style="width: 70%;"><option value="" ></option></select>
            </div>
        </div>

        <div class="modal-header">
            <div class="kirikuyy" style="margin-top:10px">
            Sub Komponen : <input type="text" name="" id="">
            </div>
            <div class="kanankuyy">
            Judul Sub Komp : <input type="text" name="" id="" 
            style="border-radius: 20px;width: 50%;height: 50px;padding: 10px;"><br><br>
            </div>
        </div>

        <div class="modal-body" style="text-align:center">
        Kode Akun : <select name="" id=""><option value="" ></option></select>
        </div>

        <div class="modal-body">
    <center>
    <table border="0" style="color:white; text-align:center">
            <tr>
                <td>Detail Uraian</td>
                <td>Volume</td>
                <td>Satuan</td>
                <td>Harga</td>
                <td>Total</td>
            </tr>
            <tr>
                <td><input type="text" style="width: 70%;"></td>
                <td><input type="text" style="width: 70%;"></td>
                <td><input type="text" style="width: 70%;"></td>
                <td><input type="text" style="width: 70%;"></td>
                <td><input type="text" style="width: 70%;"></td>
            </tr>
    </table>
        
        </div>

        <div class="modal-body" style="margin-top:10%; margin-left:60%">
            <input type="reset" name="" id="" value="Cancel" style="color:red">
            <input type="submit" name="" id="" value="Tambah" style="color:blue">
        </div>

    </center>
        
        </center>
        </div>
    </div>
</div>
{{-- End of Bagian Modal  --}}
@endsection