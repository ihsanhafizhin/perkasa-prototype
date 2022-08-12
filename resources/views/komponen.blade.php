@extends('layouts.layout-dashboard')

@section('content')
<div class="container-fluid container-content">
    <div class="row">
        <h1>Komponen</h1>
    </div>

    <div class="row">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">Kode Komponen</th>
                <th scope="col">Kode RO</th>
                <th scope="col">Nama Komponen</th>
                <th scope="col">Id</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
                @php

                $array = json_decode( $listkomponen, true );

                $arrays = $array['komponen'];

                foreach($arrays as $item) {

                    $komponen_id = $item['id'];
                    $nama_komponen = $item['nama_komponen'];
                    $kode_komponen = $item['kode_komponen'];
                    $kode_ro = $item['kode_ro'];
                    echo "
                    <tr>
                        <th>$kode_komponen</th>
                        <th>$kode_ro</th>
                        <td>$nama_komponen</td>
                        <td>$komponen_id</td>
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
                <form action="{{ route('addKomponen') }}" method="POST">
                    @csrf
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambahkan Komponen</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                        <div class="form-groups">
                            <label for="">Kode Komponen</label>
                            <input type="text" name="kode_komponen" class="form-control">
                        </div>
                        <div class="form-groups">
                            <label for="">Kode RO</label>
                            <select class="form-select" name="ddkode_ro" aria-label="Default select example">
                                <option selected></option>
                                @php

                                $array = json_decode( $listro, true );

                                $arrays = $array['ro'];

                                foreach($arrays as $item) {

                                    $ro_id = $item['id'];
                                    $kode_ro = $item['kode_ro'];
                                    echo "<option value='$kode_ro'> $kode_ro </option>";
                                    }
                                @endphp
                              </select>
                        </div>
                        <div class="form-groups">
                            <label for="">Nama Komponen</label>
                            <input type="text" name="nama_komponen" class="form-control">
                        </div>
                        <div class="form-groups">
                            <label for="">Id</label>
                            <input type="text" name="id_komponen" class="form-control">
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