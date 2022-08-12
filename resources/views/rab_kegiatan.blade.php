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

            <div class="modal fade" id="btn_i_copy" tabindex="-1" aria-labelledby="btn_i_copy" aria-hidden="true">
                <div class="modal-dialog">
                <form action="" method="POST">
                @csrf
                <input type="hidden" name="token" value="{{$token}}"/>
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title">Informasi</h5>
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
                           <h5 class="modal-title">Apakah anda mau copy data ini ?</h5>
                        </div>
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
                      

                        <button id="btn_i_copy_ya" class="btn btn-primary" type="submit">Ya</button>
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

                    @php

                    $array = json_decode( $listrabrincian, true );

                    $arrays = $array['rab_rincian'];
           
                    foreach($arrays as $item) {

                        

                        echo "

                        <tr>
                            <td>
                            ";
                                echo $item['kode_akun'];
                                echo "
                            </td>
                            <td>
                                ";
                                echo $item['uraian'];
                                echo "
                            </td>
                            <td>
                            ";
                                echo $item['volum'];
                                echo "
                            </td>
                            <td>
                            ";
                                echo $item['satuan'];
                                echo "
                            </td>
                            <td>
                            ";
                                echo $item['sbm'];
                                echo "
                            </td>
                            <td>
                            ";
                                echo $item['subtotal'];
                                echo "
                            </td>
                            <td>
                                -
                            </td>
                           
                            <td>                                                        
                                    <button class='btn btn-sm btn-warning'>EDIT</button>
                                    

                                    <button class='btn btn-sm btn-primary' type='button'  data-bs-toggle='modal' data-bs-target='#btn_i_copy'>
                                    COPY
                                    </button>

                                     <!-- <button class='btn btn-sm btn-danger' type='button'  data-bs-toggle='modal' data-bs-target='#btn_i_delete'>
                                    HAPUS
                                    </button> -->

                                    <button class='btn btn-sm btn-danger delete_rab_rincian' type='button' data-rab_rincian_id=".$item['rab_rincian_id'].">
                                    HAPUS
                                    </button>

                                    <!-- <a class='delete_rab_rincian' data-rab_rincian_id=".$item['rab_rincian_id']."  href='javascript:void(0)'>
                                    test
                                    </a> -->
                                                                  
                            </td>
                            <td>
                                -

                            </td>
                        </tr>

                        ";

                    }

                        @endphp
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
                Program &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: <select name="" id="">
                
                
                <option value=""></option>
            
               </select>
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
                Kode Satker &nbsp: <select name="cbo_satker" id="cbo_satker" style="width: 70%;" >
                <option value="">  </option>
                @php

                    $array = json_decode( $listsatker, true );

                    $arrays = $array['satker'];

                    foreach($arrays as $item) {

                        $satker_id = $item['satker_id'];
                        $nama_satker = $item['nama_satker'];
                        echo "<option value='$satker_id'> $nama_satker </option>";
                    }
                @endphp
                
            
                </select><br><br>

                Program &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: 

                <select name="cbo_program" id="cbo_program" style="width: 70%;" >
                <option value="">  </option>
                     @php

                    $array = json_decode( $listprogram, true );

                    $arrays = $array['program'];

                    foreach($arrays as $item) {

                        $kode_program = $item['kode_program'];
                        $nama_program = $item['nama_program'];
                        echo "<option value='$kode_program'> $nama_program </option>";
                    }
                        @endphp
                
            
                </select>
                
                
                <br><br>
                
                Kegiatan &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: 

                <select name="cbo_kegiatan" id="cbo_kegiatan" style="width: 70%;" >
                <option value="">  </option>
                @php

                    $array = json_decode( $listkegiatan, true );

                    $arrays = $array['kegiatan'];

                    foreach($arrays as $item) {

                        $kode_kegiatan = $item['kode_kegiatan'];
                        $nama_kegiatan = $item['nama_kegiatan'];
                        echo "<option value='$kode_kegiatan'> $nama_kegiatan </option>";
                    }
                @endphp
                
            
                </select>	
            
            
            <br><br>
            </div>
            <div class="kiri">
                
                KRO &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: 
                                            
                <select name="cbo_kro" id="cbo_kro" style="width: 70%;" >
                <option value="">  </option>
                @php

                    $array = json_decode( $listkro, true );

                    $arrays = $array['kro'];

                    foreach($arrays as $item) {

                        $kode_kro = $item['kode_kro'];
                        $nama_kro = $item['nama_kro'];
                        echo "<option value='$kode_kro'> $nama_kro </option>";
                    }
                @endphp
                
            
                </select>
                

                <br><br>
                RO &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: 
               

                <select name="cbo_ro" id="cbo_ro" style="width: 70%;" >
                <option value="">  </option>
                @php

                    $array = json_decode( $listro, true );

                    $arrays = $array['ro'];

                    foreach($arrays as $item) {

                        $kode_ro = $item['kode_ro'];
                        $nama_ro = $item['nama_ro'];
                        echo "<option value='$kode_ro'> $nama_ro </option>";
                    }
                @endphp
                
            
                </select>

            </div>
        </div>

        <div class="modal-header">
            <!-- <div class="kirikuyy" style="margin-top:10px">                            
            </div> -->
            <div class="kanankuyy">
            
            Komponen : 
            <select name="cbo_komponen" id="cbo_komponen" style="width: 70%;" >
                <option value="">  </option>
                @php

                    $array = json_decode( $listkomponen, true );

                    $arrays = $array['komponen'];

                    foreach($arrays as $item) {

                        $kode_komponen = $item['kode_komponen'];
                        $nama_komponen = $item['nama_komponen'];
                        echo "<option value='$kode_komponen'> $nama_komponen </option>";
                    }
                @endphp
                </select>
            <br><br>   
            Sub Komponen : 
            <select name="cbo_subkomponen" id="cbo_subkomponen" style="width: 70%;" >
                <option value="">  </option>
                @php

                    $array = json_decode( $listsubKomponen, true );

                    $arrays = $array['subkomponen'];

                    foreach($arrays as $item) {

                        $kode_subkomponen = $item['kode_subkomponen'];
                        $nama_subkomponen = $item['nama_subkomponen'];
                        echo "<option value='$kode_subkomponen'> $nama_subkomponen </option>";
                    }
                @endphp
                
            
            </select>
            <br><br>
            </div>
        </div>

        <div class="modal-body" align="center">
        Kode Akun : 
        

        <select name="cbo_akun" id="cbo_akun" style="width: 70%;" >
                <option value="">  </option>
                @php

                    $array = json_decode( $listakun, true );

                    $arrays = $array['akun'];

                    foreach($arrays as $item) {

                        $kode = $item['kode'];
                        $uraian = $item['uraian'];
                        echo "<option value='$kode'> $uraian </option>";
                    }
                @endphp
                
            
            </select>


        </div>
        
        <table border="0" style="color:white; text-align:center">
            <tr>
                <td>Detail Uraian</td>
                <td>Volume</td>
                <td>Satuan</td>
                <td>Harga</td>
                <td>Total</td>
            </tr>
            <tr>
                <td><input id="txt_d_uraian" name="txt_d_uraian" type="text" style="width: 70%;"></td>
                <td><input id="txt_volume" name="txt_volume" type="text" style="width: 70%;"></td>
                <td><input id="txt_satuan" name="txt_satuan" type="text" style="width: 70%;"></td>
                <td><input id="txt_harga" name="txt_harga" type="text" style="width: 70%;"></td>
                <td><input id="txt_total" name="txt_total" type="text" style="width: 70%;"></td>
            </tr>
        </table>

        <br>
        <div class="modal-body" style="margin-top:0%; margin-left:60%">
            
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


        <form action="{{ route('addrab') }}" method="POST">
                @csrf
                <input type="hidden" name="token" value="{{$token}}"/>

        <center>

        <div class="modal-header" style="padding-left:250px">
            <h5 class="modal-title" id="exampleModalLabel"><center>REKAM DETAIL RKA K/L</center></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>

        <div class="modal-header">
            <div class="kanan">
                Kode Satker &nbsp: <select name="cbo_satker_rk_d" id="cbo_satker_rk_d" style="width: 70%;" >
                <option value="">  </option>
                @php

                    $array = json_decode( $listsatker, true );

                    $arrays = $array['satker'];

                    foreach($arrays as $item) {

                        $satker_id = $item['satker_id'];
                        $nama_satker = $item['nama_satker'];
                        echo "<option value='$satker_id'> $nama_satker </option>";
                    }
                @endphp
                
            
                </select><br><br>

                Program &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: 

                <select name="cbo_program_rk_d" id="cbo_program_rk_d" style="width: 70%;" >
                <option value="">  </option>
                     @php

                    $array = json_decode( $listprogram, true );

                    $arrays = $array['program'];

                    foreach($arrays as $item) {

                        $kode_program = $item['kode_program'];
                        $nama_program = $item['nama_program'];
                        echo "<option value='$kode_program'> $nama_program </option>";
                    }
                        @endphp
                
            
                </select>
                
                
                <br><br>
                
                Kegiatan &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: 

                <select name="cbo_kegiatan_rk_d" id="cbo_kegiatan_rk_d" style="width: 70%;" >
                <option value="">  </option>
                @php

                    $array = json_decode( $listkegiatan, true );

                    $arrays = $array['kegiatan'];

                    foreach($arrays as $item) {

                        $kode_kegiatan = $item['kode_kegiatan'];
                        $nama_kegiatan = $item['nama_kegiatan'];
                        echo "<option value='$kode_kegiatan'> $nama_kegiatan </option>";
                    }
                @endphp
                
            
                </select>	
            
            
            <br><br>
            </div>
            <div class="kiri">
                
                KRO &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: 
                                            
                <select name="cbo_kro_rk_d" id="cbo_kro_rk_d" style="width: 70%;" >
                <option value="">  </option>
                @php

                    $array = json_decode( $listkro, true );

                    $arrays = $array['kro'];

                    foreach($arrays as $item) {

                        $kode_kro = $item['kode_kro'];
                        $nama_kro = $item['nama_kro'];
                        echo "<option value='$kode_kro'> $nama_kro </option>";
                    }
                @endphp
                
            
                </select>
                

                <br><br>
                RO &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: 
               

                <select name="cbo_ro_rk_d" id="cbo_ro_rk_d" style="width: 70%;" >
                <option value="">  </option>
                @php

                    $array = json_decode( $listro, true );

                    $arrays = $array['ro'];

                    foreach($arrays as $item) {

                        $kode_ro = $item['kode_ro'];
                        $nama_ro = $item['nama_ro'];
                        echo "<option value='$kode_ro'> $nama_ro </option>";
                    }
                @endphp
                
            
                </select>

            </div>
        </div>

        <div class="modal-header">
            <!-- <div class="kirikuyy" style="margin-top:10px">                            
            </div> -->
            <div class="kanankuyy">
            
            Komponen : 
            <select name="cbo_komponen_rk_d" id="cbo_komponen_rk_d" style="width: 70%;" >
                <option value="">  </option>
                @php

                    $array = json_decode( $listkomponen, true );

                    $arrays = $array['komponen'];

                    foreach($arrays as $item) {

                        $kode_komponen = $item['kode_komponen'];
                        $nama_komponen = $item['nama_komponen'];
                        echo "<option value='$kode_komponen'> $nama_komponen </option>";
                    }
                @endphp
                </select>
            <br><br>   
            Sub Komponen : 
            <select name="cbo_subkomponen_rk_d" id="cbo_subkomponen_rk_d" style="width: 70%;" >
                <option value="">  </option>
                @php

                    $array = json_decode( $listsubKomponen, true );

                    $arrays = $array['subkomponen'];

                    foreach($arrays as $item) {

                        $kode_subkomponen = $item['kode_subkomponen'];
                        $nama_subkomponen = $item['nama_subkomponen'];
                        echo "<option value='$kode_subkomponen'> $nama_subkomponen </option>";
                    }
                @endphp
                
            
            </select>
            <br><br>
            </div>
        </div>

        <div class="modal-body" align="center">
        Kode Akun : 
        

        <select name="cbo_akun_rk_d" id="cbo_akun_rk_d" style="width: 70%;" >
                <option value="">  </option>
                @php

                    $array = json_decode( $listakun, true );

                    $arrays = $array['akun'];

                    foreach($arrays as $item) {

                        $kode = $item['kode'];
                        $uraian = $item['uraian'];
                        echo "<option value='$kode'> $uraian </option>";
                    }
                @endphp
                
            
            </select>


        </div>
        
        <table border="0" style="color:white; text-align:center">
            <tr>
                <td>Detail Uraian</td>
                <td>Volume</td>
                <td>Satuan</td>
                <td>Harga</td>
                <td>Total</td>
            </tr>
            <tr>
                <td><input id="txt_d_uraian" name="txt_d_uraian" type="text" style="width: 70%;"></td>
                <td><input id="txt_volume" name="txt_volume" type="text" style="width: 70%;"></td>
                <td><input id="txt_satuan" name="txt_satuan" type="text" style="width: 70%;"></td>
                <td><input id="txt_harga" name="txt_harga" type="text" style="width: 70%;"></td>
                <td><input id="txt_total" name="txt_total" type="text" style="width: 70%;"></td>
            </tr>
        </table>

        <br>
        <div class="modal-body" style="margin-top:0%; margin-left:60%">
            
            <input type="reset" name="" id="" value="Cancel" style="color:red">
            <input type="submit" name="" id="" value="Tambah" style="color:blue">
        </div>

        </center>
    </form>	


        </div>
    </div>
</div>

@push('js-table')
    <script>
        $(document).ready(function () {

            $('#dtHorizontalVerticalExample').DataTable({
                "scrollX": true,
                "scrollY": 200,
            });
            $('.dataTables_length').addClass('bs-select');

        });



        $(document).ready(function(){
            
            $('.delete_rab_rincian').click(function(e){
            e.preventDefault();
            var v_rab_rincian_id = $(this).attr('data-rab_rincian_id');

            var parent = $(this).parent("td").parent("tr");
            bootbox.dialog({
            message: "Apakah anda akan menghapus data ini ?",
            title: "<i class='glyphicon glyphicon-trash'></i> Delete !",
            buttons: {
                success: {
                label: "No",
                className: "btn-success",
                callback: function() {
                $('.bootbox').modal('hide');
                }
                },
                danger: {
                label: "Delete!",
                className: "btn-danger",
                callback: function() {                     
                    v_url = "/rab_rincian_delete?v_id=" + v_rab_rincian_id;
                    url = v_url;
                    window.location.href = url;                
                }
                }
                }
            });
            });
});
        
    </script>
@endpush
{{-- End of Bagian Modal  --}}
@endsection