@extends('layouts.layout-dashboard')

@section('content')
<div class="container-fluid container-content">
    <div class="row">
        <h1>Group</h1>
    </div>

    <div class="row">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">Group Id</th>
                <th scope="col">Process Id</th>
                <th scope="col">Name</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row"></th>
                <td></td>
                <td></td>
                <td>
                    <button class="btn btn-primary">View</button>
                    <button class="btn btn-warning">Edit</button>
                    <button class="btn btn-danger">Delete</button>
                </td>
              </tr>
              <tr>
                <th scope="row"></th>
                <td></td>
                <td></td>
                <td>  
                    <button class="btn btn-primary">View</button>
                    <button class="btn btn-warning">Edit</button>
                    <button class="btn btn-danger">Delete</button></td>
              </tr>
            </tbody>
          </table>
          <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#formAddUnitKerja">
                Tambahkan Data
            </button>
            
            <!-- Modal -->
            <div class="modal fade" id="formAddUnitKerja" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                <form action="">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambahkan User Level Permissions</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="form-groups">
                                <label for="">Group Id</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-groups">
                                <label for="">Process Id</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-groups">
                                <label for="">Name</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Tambahkan</button>
                        </div>
                    </div>
                </form>
                </div>
            </div>
                </div>
</div>
@endsection