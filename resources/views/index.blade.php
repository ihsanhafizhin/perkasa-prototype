<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INDEX</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css1/bootstrap.css') }}">
    <link rel="stylesheet" href="css/style.css">
    <script type="text/javascript" src="{{ asset('js/bootstrap.js') }}"></script>
</head>
<body>

    <div>
        <b>
            <a href="/" class="btn btn-success" data-toggle="modal" data-target="#program"> + REKAM PROGRAM</a>
            <a href="/" class="btn btn" data-toggle="modal" data-target="#kegiatan" style="background-color:greenyellow; color:white;"> + REKAM KEGIATAN</a>
            <a href="/" class="btn btn-info" data-toggle="modal" data-target="#kro"> + REKAM KRO</a>
            <a href="/" class="btn btn-primary" data-toggle="modal" data-target="#ro"> + REKAM RO</a>
            <a href="/" class="btn btn-warning" data-toggle="modal" data-target="#komponen" style="color:white"> + REKAM KOMPONEN</a>
            <a href="/" class="btn btn" data-toggle="modal" data-target="#subkomponen" style="background-color:orangered; color:white;"> + REKAM SUB KOMPONEN</a>
            <a href="/" class="btn btn" data-toggle="modal" data-target="#akun" style="background-color:red; color:white;"> + REKAM AKUN</a>
            <a href="/" class="btn btn" data-toggle="modal" data-target="#detail" style="background-color:maroon; color:white;"> + REKAM DETAIL</a>
        </b>
    </div>

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

        

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>