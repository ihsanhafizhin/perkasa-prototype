@extends('layouts.layout-dashboard')

@section('content')


@php

$array = json_decode( $response, true );

$arrays = $array['kegiatan'];
echo "
<table>
";
foreach($arrays as $item) {

    $id_rab = $item['id'];

    echo "
            <tr>
                <td>
                                                <div class='row uraian-level-1'>
                                                    <p>
                                                        ";

                                                        // echo $id_rab;

                                                    echo "   
                                                    </p>
                                                </div>
                                                
                                                
                </td>	
            </tr>
";

}


    echo"
    </table>	
    ";




   
    
	

    
@endphp

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

              <!-- Button trigger modal Penelaah -->
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#notePenelaah">
                Note Penelaah
            </button>

            <!-- Button trigger modal Reviewer -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#noteReviewer">
                Note Reviewer
            </button>
            
            <!-- Modal Reviewer-->
            <div class="modal fade" id="noteReviewer" tabindex="-1" aria-labelledby="noteReviewer" aria-hidden="true">
                <div class="modal-dialog">
                <form action="{{ route('addrabnotepenyetuju') }}" method="POST">
                @csrf
                <input type="hidden" name="token" value="{{$token}}"/>
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="noteReviewer">Tambahkan Note Reviewer</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                        <div class="form-groups">
                            <input type="text" class="form-control" hidden placeholder="Primary Key">
                        </div>
                        <div class="form-groups">
                            <input type="text" class="form-control" hidden placeholder="Foreign Key">
                        </div>
                        <div class="form-groups">
                            <label for="">Note Reviewer</label>
                            <input name="txt_Note_Penyetuju" type="textarea" class="form-control">
                        </div>
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Tambahkan</button>
                        </div>
                    </div>
                </form>
                </div>
            </div>

            <!-- Modal Penelaah-->
            <div class="modal fade" id="notePenelaah" tabindex="-1" aria-labelledby="noteReviewer" aria-hidden="true">
                <div class="modal-dialog">                    
                <form action="{{ route('addrabnotepenelaah') }}" method="POST">
                @csrf
                <input type="hidden" name="token" value="{{$token}}"/>

                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="notePenelaah">Tambahkan Note Penelaah</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                        <div class="form-groups">
                            <input type="text" class="form-control" hidden placeholder="Primary Key">
                        </div>
                        <div class="form-groups">
                            <input type="text" class="form-control" hidden placeholder="Foreign Key">
                        </div>
                        <div class="form-groups">
                            <label for="">Note Penelaah</label>
                            <input name="txt_Note_Penelaah" type="textarea" class="form-control">
                        </div>
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Tambahkan</button>                        
                        </div>
                    </div>
                </form>
                </div>
            </div>

            <div class="modal fade" id="btn_i_delete" tabindex="-1" aria-labelledby="btn_i_delete" aria-hidden="true">
                <div class="modal-dialog">
                <form action="{{ route('rab_delete') }}" method="POST">
                @csrf
                <input type="hidden" name="token" value="{{$token}}"/>
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="btn_i_delete">Informasi</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                        <div class="form-groups">
                            <input type="text" class="form-control" hidden placeholder="Primary Key">
                        </div>
                        <div class="form-groups">
                            <input type="text" class="form-control" hidden placeholder="Foreign Key">
                        </div>
                        <div class="form-groups">
                           <h5 class="modal-title" id="btn_i_delete">Apakah anda mau menghapus data ini ?</h5>
                        </div>
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
                      

                        <button id="btn_i_delete_ya" class="btn btn-primary" type="submit">Ya</button>
                        </div>
                    </div>
                </form>
                </div>
            </div>


        </b>
    </div>
    {{-- KONTEN TABLENYA --}}
    <div class="row row-content">
        <div class="container tbl-container" style="max-width:fit-content;">
            <div class="row-tbl-fixed table-responsive" style="overflow-x:scroll; overflow-y:scroll; max-height:100%">
                <table id="dtHorizontalVerticalExample" class="table table-rincian horizontal-scrollable">
                    <thead>
                      <tr>
                        <th scope="col" style="width: 10%">Kode</th>
                        <th scope="col">Uraian</th>
                        <th scope="col">Volume</th>
                        <th scope="col">Satuan</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Jumlah</th>
                        <th scope="col">Ket</th>
                        <th scope="col" style="width:15% !important;">Aksi</th>
                        <th scope="col">Catatan</th>
                      </tr>
                    </thead>
                    <tbody class="table-group-divider">
                        <tr>
                            <th scope="row">
                                <div class="row level-1">
                                    <p>
                                        076.01.CQ
                                    </p>
                                    <div>
                                        <div class="row level-2">
                                            <p style="margin-left:10px">
                                                6709
                                            </p>
                                            <div>
                                                <div class="row level-3">
                                                    <p style="margin-left:20px">
                                                        QGE
                                                    </p>
                                                    <div>
                                                        <div class="row level-4">
                                                            <p style="margin-left:30px">
                                                                001
                                                            </p>
                                                            <div class="row level-5">
                                                                <p style="margin-left:40px">
                                                                    113
                                                                </p>
                                                                <div class="row level-6">
                                                                    <p style="margin-left:50px">
                                                                        A
                                                                    </p>
                                                                    <div>
                                                                        <div class="row level-7">
                                                                            <p style="margin-left:60px">
                                                                                521211
                                                                            </p>
                                                                            <div>
                                                                                <div class="row level-8 ">
                                                                                    <p style="margin-left:80px">
                                                                                        01
                                                                                    </p>
                                                                                    <div class="row level-8 ">
                                                                                        <p style="margin-left:80px">
                                                                                            02
                                                                                        </p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row level-7">
                                                                            <p style="margin-left:60px">
                                                                                524114
                                                                            </p>
                                                                            <div>
                                                                                <div class="row level-8 ">
                                                                                    <p style="margin-left:80px">
                                                                                        01
                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row level-6">
                                                                    <p style="margin-left:50px">
                                                                        B
                                                                    </p>
                                                                <div class="row level-7">
                                                                    <p style="margin-left:60px">
                                                                        524114
                                                                    </p>
                                                                    <div class="row level-8">
                                                                        <p style="margin-left:80px">
                                                                            01
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </th>
        
                            <td>
                                <div class="row uraian-level-1">
                                    <p>
                                        Penyelenggaraan Pemilu dalam Proses Konsolidasi Demokrasi
                                    </p>
                                </div>
                                <div class="row uraian-level-2">
                                    <p>
                                        Perencanaan Program dan Anggaran, serta Penyusunan Peraturan Pelaksanaan Penyelenggaraan Pemilu
                                    </p>
                                </div>
                                <div class="row uraian-level-3">
                                    <p>
                                        Tata Kelola Kelembagaan Publik Bidang Politik dan Hukum
                                    </p>
                                </div>
                                <div class="row uraian-level-4">
                                    <p>
                                        Perencanaan dan Penganggaran Pemilu
                                    </p>
                                </div>
                                <div class="row uraian-level-5">
                                    <p>
                                        Dukungan Operasional Pelaksanaan Lainnya
                                    </p>
                                </div>
                                <div class="row uraian-level-6">
                                    <p>
                                        PENGELOLAAN PROGRAM DAN ANGGARAN PEMILU DAN PEMILIHAN SERENTAK
                                    </p>
                                </div>
                                <div class="row uraian-level-7">
                                    <p>
                                        Belanja Bahan
                                    </p>
                                </div>
                                <div class="row uraian-level-8">
                                    <p>
                                        ATK Kegiatan
                                    </p>
                                </div>
                                <div class="row uraian-level-8">
                                    <p>
                                        Penggandaan dan Pencetakan
                                    </p>
                                </div>
                                <div class="row uraian-level-7">
                                    <p>
                                        Belanja Perjalanan Dinas Paket Meet Dalam Kota
                                    </p>
                                </div>
                                <div class="row uraian-level-8">
                                    <p>
                                         Paket Meeting
                                    </p>
                                </div>
                                <div class="row uraian-level-6">
                                    <p>
                                         SOSIALISASI JUNIS ANGGARAN DAN PENGELOLAAN KEUANGAN
                                    </p>
                                </div>
                                <div class="row uraian-level-7">
                                    <p>
                                         Belanja Perjalanan Dinas Paket Meeting Dalam Kota
                                    </p>
                                </div>
                                <div class="row uraian-level-8">
                                    <p>
                                         Paket Meeting
                                    </p>
                                </div>
                            </td>
                            <td>
                                <div class="row volume-level-1">
                                    <p>-</p>
                                </div>
                                <div class="row volume-level-2">
                                    <p>-</p>
                                </div>
                                <div class="row volume-level-3">
                                    <p>-</p>
                                </div>
                                <div class="row volume-level-4">
                                    <p>-</p>
                                </div>
                                <div class="row volume-level-5">
                                    <p>-</p>
                                </div>
                                <div class="row volume-level-6">
                                    <p>-</p>
                                </div>
                                <div class="row volume-level-7">
                                    <p>-</p>
                                </div>
                                <div class="row volume-level-8">
                                    <p>10</p>
                                </div>
                                <div class="row volume-level-8">
                                    <p>100</p>
                                </div>
                                <div class="row volume-level-7">
                                    <p>-</p>
                                </div>
                                <div class="row volume-level-8">
                                    <p>60</p>
                                </div>
                                <div class="row volume-level-6">
                                    <p>-</p>
                                </div>
                                <div class="row volume-level-7">
                                    <p>-</p>
                                </div>
                                <div class="row volume-level-8">
                                    <p>20</p>
                                </div>
                            </td>
                            <td>
                                <div class="row satuan-level-1">
                                    <p>-</p>
                                </div>
                                <div class="row satuan-level-2">
                                    <p>-</p>
                                </div>
                                <div class="row satuan-level-3">
                                    <p>-</p>
                                </div>
                                <div class="row satuan-level-4">
                                    <p>-</p>
                                </div>
                                <div class="row satuan-level-5">
                                    <p>-</p>
                                </div>
                                <div class="row satuan-level-6">
                                    <p>-</p>
                                </div>
                                <div class="row satuan-level-7">
                                    <p>-</p>
                                </div>
                                <div class="row satuan-level-8">
                                    <p>OB</p>
                                </div>
                                <div class="row satuan-level-8">
                                    <p>BUAH</p>
                                </div>
                                <div class="row satuan-level-7">
                                    <p>-</p>
                                </div>
                                <div class="row satuan-level-8">
                                    <p>OK</p>
                                </div>
                                <div class="row satuan-level-6">
                                    <p>-</p>
                                </div>
                                <div class="row satuan-level-7">
                                    <p>-</p>
                                </div>
                                <div class="row satuan-level-8">
                                    <p>OK</p>
                                </div>
                            </td>
                            <td>
                                <div class="row satuan-level-1">
                                    <p>-</p>
                                </div>
                                <div class="row satuan-level-2">
                                    <p>-</p>
                                </div>
                                <div class="row satuan-level-3">
                                    <p>-</p>
                                </div>
                                <div class="row satuan-level-4">
                                    <p>-</p>
                                </div>
                                <div class="row satuan-level-5">
                                    <p>-</p>
                                </div>
                                <div class="row satuan-level-6">
                                    <p>-</p>
                                </div>
                                <div class="row satuan-level-7">
                                    <p>-</p>
                                </div>
                                <div class="row satuan-level-8">
                                    <p>100.000</p>
                                </div>
                                <div class="row satuan-level-8">
                                    <p>5.000</p>
                                </div>
                                <div class="row satuan-level-7">
                                    <p>-</p>
                                </div>
                                <div class="row satuan-level-8">
                                    <p>500.000</p>
                                </div>
                                <div class="row satuan-level-6">
                                    <p>-</p>
                                </div>
                                <div class="row satuan-level-7">
                                    <p>-</p>
                                </div>
                                <div class="row satuan-level-8">
                                    <p>500.000</p>
                                </div>
                            </td>
                            <td>
                                <div class="row jumlah-level-1">
                                    <p class="">
                                        41.500.000
                                    </p>
                                </div>
                                <div class="row jumlah-level-2">
                                    <p class="">
                                        41.500.000
                                    </p>
                                </div>
                                <div class="row jumlah-level-3">
                                    <p class="">
                                        41.500.000
                                    </p>
                                </div>
                                <div class="row jumlah-level-4">
                                    <p class="">
                                        41.500.000
                                    </p>
                                </div>
                                <div class="row jumlah-level-5">
                                    <p class="">
                                        41.500.000
                                    </p>
                                </div>
                                <div class="row jumlah-level-6">
                                    <p class="">
                                        31.500.000
                                    </p>
                                </div>
                                <div class="row jumlah-level-7">
                                    <p class="">
                                        1.500.000
                                    </p>
                                </div>
                                <div class="row jumlah-level-8">
                                    <p class="">
                                        1.000.000
                                    </p>
                                </div>
                                <div class="row jumlah-level-8">
                                    <p class="">
                                        500.000
                                    </p>
                                </div>
                                <div class="row jumlah-level-7">
                                    <p class="">
                                        30.000.000
                                    </p>
                                </div>
                                <div class="row jumlah-level-8">
                                    <p class="">
                                        30.000.000
                                    </p>
                                </div>
                                <div class="row jumlah-level-6">
                                    <p class="">
                                        10.000.000
                                    </p>
                                </div>
                                <div class="row jumlah-level-7">
                                    <p class="">
                                        10.000.000
                                    </p>
                                </div>
                                <div class="row jumlah-level-8">
                                    <p class="">
                                        10.000.000
                                    </p>
                                </div>
                            </td>
                            <td>
                                <div class="row ket-level-1">
                                    <p>-</p>
                                </div>
                                <div class="row ket-level-2">
                                    <p>-</p>
                                </div>
                                <div class="row ket-level-3">
                                    <p>-</p>
                                </div>
                                <div class="row ket-level-4">
                                    <p>-</p>
                                </div>
                                <div class="row ket-level-5">
                                    <p>-</p>
                                </div>
                                <div class="row ket-level-6">
                                    <p>-</p>
                                </div>
                                <div class="row ket-level-7">
                                    <p>-</p>
                                </div>
                                <div class="row ket-level-8">
                                    <p>-</p>
                                </div>
                                <div class="row ket-level-8">
                                    <p>-</p>
                                </div>
                                <div class="row ket-level-7">
                                    <p>-</p>
                                </div>
                                <div class="row ket-level-8">
                                    <p>-</p>
                                </div>
                                <div class="row ket-level-6">
                                    <p>-</p>
                                </div>
                                <div class="row ket-level-7">
                                    <p>-</p>
                                </div>
                                <div class="row ket-level-8">
                                    <p>-</p>
                                </div>
                            </td>
                            <td class="kolom-aksi-rab">
                                <div class="row btn-level-1">                                   
                                    <button class="btn btn-sm btn-danger" type="button"  data-bs-toggle="modal" data-bs-target="#btn_i_delete">
                                    HAPUS
                                    </button>
                                </div>
                                <div class="row btn-level-2">
                                    <button class="btn btn-sm btn-danger">HAPUS</button>
                                </div>
                                <div class="row btn-level-3">
                                    <button class="btn btn-sm btn-danger">HAPUS</button>
                                </div>
                                <div class="row btn-level-4">
                                    <button class="btn btn-sm btn-danger">HAPUS</button>
                                </div>
                                <div class="row btn-level-5">
                                    <button class="btn btn-sm btn-danger">HAPUS</button>
                                </div>
                                <div class="row btn-level-6">
                                    <button class="btn btn-sm btn-danger">HAPUS</button>
                                </div>
                                <div class="row btn-level-7">
                                    <button class="btn btn-sm btn-danger">HAPUS</button>
                                </div>
                                <div class="row d-flex btn-level-8">
                                    <button class="btn btn-sm btn-warning">EDIt</button>
                                    <button class="btn btn-sm btn-primary">COPY</button>
                                    <button class="btn btn-sm btn-danger">HAPUS</button>
                                </div>
                                <div class="row btn-level-8">
                                    <button class="btn btn-sm btn-warning">EDIt</button>
                                    <button class="btn btn-sm btn-primary">COPY</button>
                                    <button class="btn btn-sm btn-danger">HAPUS</button>
                                </div>
                                <div class="row btn-level-7">
                                    <button class="btn btn-sm btn-danger">HAPUS</button>
                                </div>
                                <div class="row btn-level-8">
                                    <button class="btn btn-sm btn-warning">EDIt</button>
                                    <button class="btn btn-sm btn-primary">COPY</button>
                                    <button class="btn btn-sm btn-danger">HAPUS</button>
                                </div>
                                <div class="row btn-level-6">
                                    <button class="btn btn-sm btn-danger">HAPUS</button>
                                </div>
                                <div class="row btn-level-7">
                                    <button class="btn btn-sm btn-danger">HAPUS</button>
                                </div>
                                <div class="row btn-level-8">
                                    <button class="btn btn-sm btn-warning">EDIt</button>
                                    <button class="btn btn-sm btn-primary">COPY</button>
                                    <button class="btn btn-sm btn-danger">HAPUS</button>
                                </div>
                            </td>
                            <td>
                                <div class="row satuan-level-1">
                                    <p>-</p>
                                </div>
                                <div class="row satuan-level-2">
                                    <p>-</p>
                                </div>
                                <div class="row satuan-level-3">
                                    <p>-</p>
                                </div>
                                <div class="row satuan-level-4">
                                    <p>-</p>
                                </div>
                                <div class="row satuan-level-5">
                                    <p>-</p>
                                </div>
                                <div class="row satuan-level-6">
                                    <p>-</p>
                                </div>
                                <div class="row satuan-level-7">
                                    <p>-</p>
                                </div>
                                <div class="row satuan-level-8">
                                    <p>-</p>
                                </div>
                                <div class="row satuan-level-8">
                                    <p>-</p>
                                </div>
                                <div class="row satuan-level-7">
                                    <p>-</p>
                                </div>
                                <div class="row satuan-level-8">
                                    <p>-</p>
                                </div>
                                <div class="row satuan-level-6">
                                    <p>-</p>
                                </div>
                                <div class="row satuan-level-7">
                                    <p>-</p>
                                </div>
                                <div class="row satuan-level-8">
                                    <p>-</p>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>   
    </div>
    
</div>


{{-- Start of Bagian Modal --}}
<div style="padding-top:10%;" class="modal fade" id="program" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">



    <div class="modal-dialog" role="document" style="margin-right:40%">
        <div class="modal-content" style="background-color:mediumseagreen; color:white;width:150%; height:80%;">
        <form action="{{ route('addProgram') }}" method="POST">
        @csrf
        <input type="hidden" name="token" value="{{$token}}"/>

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

        </form>
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

        <form action="{{ route('addrab') }}" method="POST">
                @csrf
                <input type="hidden" name="token" value="{{$token}}"/>

        <center>

        <div class="modal-header" style="padding-left:250px">
            <h5 class="modal-title" id="exampleModalLabel"><center>REKAM AKUN RKA K/L</center></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>

        <div class="modal-header">
            <div class="kanan">
                Kode Satker &nbsp: <select name="" id="" style="width: 70%;" ><option value=""></option></select><br><br>
                
                Program &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: <select name="" id="" style="width: 70%;" ><option value=""></option></select><br><br>
                
                Kegiatan &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: <select name="" id="" style="width: 70%;"><option value=""></option></select><br><br>
            </div>
            <div class="kiri">
                
                KRO &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: <select name="" id="" style="width: 70%;"><option value=""></option></select><br><br>
                RO &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: <select name="" id="" style="width: 70%;"><option value=""></option></select><br><br>
                Komponen &nbsp&nbsp&nbsp: <select name="" id="" style="width: 70%;"><option value="" ></option></select>
            </div>
        </div>

        <div class="modal-header">
            <div class="kirikuyy" style="margin-top:10px">
            Sub Komponen : <select name="" id=""><option value="" ></option></select>
            </div>
            <div class="kanankuyy">
            <br><br>
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
    </form>	

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
test
@push('js-table')
    <script>
        $(document).ready(function () {
        $('#dtHorizontalVerticalExample').DataTable({
            "scrollX": true,
            "scrollY": 200,
        });
        $('.dataTables_length').addClass('bs-select');
        });

        // $( "#btn_i_delete_ya" ).click(function() {
        //     alert( "Handler for .click() called." ); //do your code here

            

        //     var vr_id_rab = 14;
            


        //         $.ajax({
        //             headers: {
        //                 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        //             },
        //             url : "{{ url('rab_delete') }}",
                    
        //             type : 'POST',
        //             dataType : 'json',
        //             success : function(result){

        //                 console.log("===== " + result + " =====");

        //             }
        //         });

        // });
        
    </script>
@endpush
{{-- End of Bagian Modal  --}}
@endsection