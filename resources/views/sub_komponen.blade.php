@extends('layouts.layout-dashboard')

@section('content')
<div class="container-fluid container-content">
    <div class="row">
        <h1>Sub Komponen</h1>
    </div>

    <div class="row">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">Kode Sub Komponen</th>
                <th scope="col">Kode Komponen</th>
                <th scope="col">Nama Sub Komponen</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
                @php

                $array = json_decode( $listsubKomponen, true );

                $arrays = $array['subkomponen'];

                foreach($arrays as $item) {

                    $nama_subkomponen = $item['nama_subkomponen'];
                    $kode_subkomponen = $item['kode_subkomponen'];
                    $kode_komponen = $item['kode_komponen'];
                    echo "
                    <tr>
                        <th>$kode_subkomponen</th>
                        <th>$kode_komponen</th>
                        <td>$nama_subkomponen</td>
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
                <form action="{{ route('addSubKomponen') }}" method="POST">
                    @csrf
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambahkan Sub Komponen</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                        <div class="form-groups">
                            <label for="">Kode Sub Komponen</label>
                            <input type="text" name="kode_subkomponen" class="form-control">
                        </div>
                        <div class="form-groups">
                            <label for="">Kode Komponen</label>
                            <select class="form-select" name="ddkode_komponen" aria-label="Default select example">
                                <option selected></option>
                                @php

                                $array = json_decode( $listkomponen, true );

                                $arrays = $array['komponen'];

                                foreach($arrays as $item) {

                                    $komponen_id = $item['id'];
                                    $kode_komponen = $item['kode_komponen'];
                                    echo "<option value='$kode_komponen'> $kode_komponen </option>";
                                    }
                                @endphp
                              </select>
                        </div>
                        <div class="form-groups">
                            <label for="">Nama Sub Komponen</label>
                            <input type="text" name="nama_subkomponen" class="form-control">
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