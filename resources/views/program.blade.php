@extends('layouts.layout-dashboard')

@section('content')
<div class="container-fluid container-content">
    <div class="row">
        <h1>Program</h1>
    </div>

    <div class="row">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">Kode</th>
                <th scope="col">Nama Program</th>
                <th scope="col">ID</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
             @php

                    $array = json_decode( $listprogram, true );

                    $arrays = $array['program'];

                    foreach($arrays as $item) {

                        $program_id = $item['id'];
                        $nama_program = $item['nama_program'];
                        $kode_program = $item['kode_program'];
                        echo "
                        <tr>
                            <th>$kode_program</th>
                            <td>$nama_program</td>
                            <td>$program_id</td>
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
                <form action="{{ route('addProgram') }}" method="POST">
                    @csrf
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambahkan Program</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ route('addProgram') }}" method="POST">
                                <div class="form-groups">
                                    <label for="#kodeProgram">Kode</label>
                                    <input type="text" name="kode_program" id="kodeProgram" class="form-control">
                                </div>
                                <div class="form-groups">
                                    <label for="">Nama Program</label>
                                    <input type="text" name="nama_program" id="namaProgram" class="form-control">
                                </div>
                                <div class="form-groups">
                                    <label for="">Id</label>
                                    <input type="text" class="form-control" name="id_program" id="idProgram">
                                </div>
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Tambahkan</button>
                            </form>
                        </div>
                    </div>
                </form>
                </div>
            </div>
                </div>
</div>
@endsection