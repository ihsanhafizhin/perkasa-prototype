@extends('layouts.layout-dashboard')

@section('content')
<div class="container-fluid container-content">
    <div class="row">
        <h1>Kegiatan</h1>
    </div>

    <div class="row">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">Kode Kegiatan</th>
                <th scope="col">Kode Program</th>
                <th scope="col">Nama Kegiatan</th>
                <th scope="col">Id</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
                @php

                    $array = json_decode( $listkegiatan, true );

                    $arrays = $array['kegiatan'];

                    foreach($arrays as $item) {

                        $kegiatan_id = $item['id'];
                        $nama_kegiatan = $item['nama_kegiatan'];
                        $kode_program = $item['kode_program'];
                        $kode_kegiatan = $item['kode_kegiatan'];
                        echo "
                        <tr>
                            <th>$kode_kegiatan</th>
                            <th>$kode_program</th>
                            <td>$nama_kegiatan</td>
                            <td>$kegiatan_id</td>
                            <td>
                                <button class='btn btn-primary'>View</button>
                                <button class='btn btn-warning'>Edit</button>
                                <button class='btn btn-danger'>Delete</button>
                            </td>
                        </tr>
                        ";
                    }
                @endphp
            </tbody>
          </table>
          <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#formAddUnitKerja">
                Tambahkan Data
            </button>
            
            <!-- Modal -->
            <div class="modal fade" id="formAddUnitKerja" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <form action="{{ route('addKegiatan') }}" method="POST">
                        @csrf
                        <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Tambahkan Kegiatan</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                            <div class="form-groups">
                                <label for="">Kode Kegiatan</label>
                                <input type="text" name="kode_kegiatan" id="kodeKegiatan" class="form-control">
                            </div>
                            <div class="form-groups">
                                <label for="">Kode Program</label>
                                <select class="form-select" name="ddkode_program" aria-label="Default select example">
                                    <option selected></option>
                                    @php

                                        $array = json_decode( $listprogram, true );

                                        $arrays = $array['program'];

                                        foreach($arrays as $item) {

                                            $program_id = $item['id'];
                                            $kode_program = $item['kode_program'];
                                            echo "<option value='$kode_program'> $kode_program </option>";
                                        }
                                    @endphp
                                </select>
                            </div>
                            <div class="form-groups">
                                <label for="">Nama Kegiatan</label>
                                <input type="text" name="nama_kegiatan" class="form-control">
                            </div>
                            <div class="form-groups">
                                <label for="">Id</label>
                                <input type="text" name="id_kegiatan" class="form-control">
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
        </div>
</div>
@endsection