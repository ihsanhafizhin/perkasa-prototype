@extends('layouts.layout-dashboard')

@section('content')
<div class="container-fluid container-content">
    <div class="row">
        <h1>User Level</h1>
    </div>

    <div class="row">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">User Level Id</th>
                <th scope="col">User Level Name</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row"></th>
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
                    <div class="modal-content" style="width: 100%">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambahkan User Level Permissions</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="form-groups">
                                <label for="">User Level Id</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-groups">
                                <label for="">User Level Name</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-groups">
                                <label for="">Permission</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="addCopy">
                                    <label class="form-check-label" for="addCopy">
                                      Add/Copy
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="delete">
                                    <label class="form-check-label" for="delete">
                                      Delete
                                    </label>
                                </div>
                                   
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="edit">
                                    <label class="form-check-label" for="edit">
                                      Edit
                                    </label>
                                </div>
                                   
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="list">
                                    <label class="form-check-label" for="list">
                                      List
                                    </label>
                                </div>
                                    
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="lookup">
                                    <label class="form-check-label" for="lookup">
                                      Lookup
                                    </label>
                                </div>
                                    
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="view">
                                    <label class="form-check-label" for="view">
                                      View
                                    </label>
                                </div>
                                 
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="search">
                                    <label class="form-check-label" for="search">
                                      Search
                                    </label>
                                </div>
                                   
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="import">
                                    <label class="form-check-label" for="import">
                                      Import
                                    </label>
                                </div>
                                  
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="admin">
                                    <label class="form-check-label" for="admin">
                                      Admin
                                    </label>
                                </div
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