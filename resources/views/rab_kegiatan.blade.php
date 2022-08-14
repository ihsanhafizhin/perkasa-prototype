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



        </b>
    </div>
    {{-- KONTEN TABLENYA --}}
    <div class="row row-content">
        <div class="container tbl-container" style="max-width:fit-content;">
            <div class="row-tbl-fixed table-responsive" style="overflow-x:scroll; overflow-y:scroll; max-height:100%">               
                <table id="tbl_test_Rab" class="table table-rincian horizontal-scrollable"></table>
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
      

        $(document).ready(function(){
            
            $('.edit_rab_rincian').click(function(e){

                e.preventDefault();
                var v_rab_rincian_id = $(this).attr('data-rab_rincian_id');
                var parent = $(this).parent("td").parent("tr");

                $('#detail').modal('show');
                
            });


            $('.copy_rab_rincian').click(function(e){
            e.preventDefault();
            var v_rab_rincian_id = $(this).attr('data-rab_rincian_id');

            var parent = $(this).parent("td").parent("tr");
            bootbox.dialog({
            message: "Apakah anda akan copy data ini ?",
            title: "<i class='glyphicon glyphicon-trash'></i> Informasi.",
            buttons: {
                success: {
                label: "Tidak",
                className: "btn-success",
                callback: function() {
                $('.bootbox').modal('hide');
                }
                },
                danger: {
                label: "Ya",
                className: "btn-danger",
                callback: function() { 
                                       
 

                }
                }
                }
            });
            });


            $('.delete_rab_rincian').click(function(e){
            e.preventDefault();
            var v_rab_rincian_id = $(this).attr('data-rab_rincian_id');

            var parent = $(this).parent("td").parent("tr");
            bootbox.dialog({
            message: "Apakah anda akan menghapus data ini ?",
            title: "<i class='glyphicon glyphicon-trash'></i> Informasi.",
            buttons: {
                success: {
                label: "Tidak",
                className: "btn-success",
                callback: function() {
                $('.bootbox').modal('hide');
                }
                },
                danger: {
                label: "Ya",
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

@php

$arr_rab_rincians = json_decode( $listrabrincian, true );

$arr_rab_rincianss = $arr_rab_rincians['rab_rincian'];




@endphp

<script>
  var $arb_array = <?php  echo json_encode($arr_rab_rincianss) ?>;
  $arb_array_length = $arb_array.length;
  var $table = $('#tbl_test_Rab')

  function buildTable($el, cells, rows) {
    var i; var j; var row
    var columns = []
    var data = []
    var $arb_column = [
    {0: 'Kode'},
    {1: 'Uraian'}, 
    {2: 'Volume'}, 
    {3: 'Satuan'}, 
    {4: 'Harga'},
    {5: 'Jumlah'},
    {6: 'Ket'},
    {7: 'Aksi'},
    {8: 'Catatan'}
];

$arb_column_length = $arb_column.length;

for (i = 0; i < $arb_column_length; i++) {    
    columns.push({
        field: 'field' + i,
        title: $arb_column[i][i],
        sortable: true
      })

}
    
    for (i = 0; i < $arb_array_length; i++) {
      row = {};

      $rab_rincian_id =  $arb_array[i]['rab_rincian_id'];
    //   $kode =  $arb_array[i]['kode'];
    //   $id =  $arb_array[i]['id'];
      $kode_akun =  $arb_array[i]['kode_akun'];
      $detail_id =  $arb_array[i]['detail_id'];
      $uraian =  $arb_array[i]['uraian'];
      $volum =  $arb_array[i]['volum'];      
      $satuan =  $arb_array[i]['satuan'];
      $sbm =  $arb_array[i]['sbm'];
      $subtotal =  $arb_array[i]['subtotal'];
      console.log($rab_rincian_id);
      for (j = 0; j < cells; j++) {
        row['field' + 0] = $kode_akun
        row['field' + 1] = $uraian
        row['field' + 2] = $sbm
        row['field' + 3] = $kode_akun
        row['field' + 4] = $uraian
        row['field' + 5] = $sbm
        row['field' + 6] = "-"
        row['field' + 7] = " <button class='btn btn-sm btn-primary edit_rab_rincian' type='button' data-rab_rincian_id='' > EDIT</button>&nbsp<button class='btn btn-sm btn-primary copy_rab_rincian' type='button' data-rab_rincian_id=''>COPY</button><a href='/rab_rincian_delete?v_id="+ $rab_rincian_id +"'  class='btn btn-sm btn-danger'>HAPUS</a>"
        row['field' + 8] = "-"
      }
      data.push(row)
    }
    $el.bootstrapTable({
      columns: columns,
      data: data,
      detailView: cells > 1,
      onExpandRow: function (index, row, $detail) {
        //alert("test");
        /* eslint no-use-before-define: ["error", { "functions": false }]*/
        expandTable($detail, cells - 1)
      }
    })
  }

  function expandTable($detail, cells) {
    buildTable($detail.html('<table></table>').find('table'), cells, 1)
  }

  $(function() {
    buildTable($table, 8, 1)
  })
</script>

@endpush


@endsection