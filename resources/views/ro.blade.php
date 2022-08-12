@extends('layouts.layout-dashboard')

@section('content')
<div class="container-fluid container-content">
    <div class="row">
        <h1>RO</h1>
    </div>

    <div class="row">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">Kode RO</th>
                <th scope="col">Kode KRO</th>
                <th scope="col">Nama RO</th>
                <th scope="col">Id</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
                @php

                $array = json_decode( $listro, true );

                $arrays = $array['ro'];

                foreach($arrays as $item) {

                    $ro_id = $item['id'];
                    $nama_ro = $item['nama_ro'];
                    $kode_ro = $item['kode_ro'];
                    $kode_kro = $item['kode_kro'];
                    echo "
                    <tr>
                        <th>$kode_ro</th>
                        <th>$kode_kro</th>
                        <td>$nama_ro</td>
                        <td>$ro_id</td>
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
                <form action="{{ route('addRo') }}" method="POST">
                    @csrf
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambahkan RO</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                        <div class="form-groups">
                            <label for="">Kode RO</label>
                            <input type="text" name="kode_ro" class="form-control">
                        </div>
                        <div class="form-groups">
                            <label for="">Kode KRO</label>
                            <select class="form-select" name="ddkode_kro" aria-label="Default select example">
                                <option selected></option>
                                @php

                                $array = json_decode( $listkro, true );

                                $arrays = $array['kro'];

                                foreach($arrays as $item) {

                                    $kro_id = $item['id'];
                                    $kode_kro = $item['kode_kro'];
                                    echo "<option value='$kode_kro'> $kode_kro </option>";
                                    }
                                @endphp
                              </select>
                        </div>
                        <div class="form-groups">
                            <label for="">Nama RO</label>
                            <input type="text" name="nama_ro" class="form-control">
                        </div>
                        <div class="form-groups">
                            <label for="">Id</label>
                            <input type="text" name="id_ro" class="form-control">
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