@extends('layouts.layout-landing')

@section('content')
                <div class="row d-flex justify-content-center align-items-center row-card-login">
                <div class="col-5 col-md-5 col-lg-5 col-xl-5 d-flex align-items-center">
                    <div class="card text-white" style="border-radius: 1rem; background-color:red; width:100%; height:auto;">
                    <div class="card-body text-center">

                        <form action="{{ route('login.post') }}" method="POST">
                            @csrf
                            <img src="../assets/img/ikon.png" class="rounded-circle">
    
                            <div class="">
                                <br>
    
                                <div class="form-outline form-white mb-4">
                                    <input type="text" name="username" id="typeEmailX" class="form-control" />
                                    <label class="form-label" for="typeEmailX">Username</label>
                                </div>
    
                                <div class="form-outline form-white mb-4">
                                    <input type="password" name="password" id="typePasswordX" class="form-control" />
                                    <label class="form-label" for="typePasswordX">Password</label>
                                </div>
                                
                                <p class="small mb-5 pb-lg-2"><a class="text-white-50" href="#!">
                                Remember me      
                                Forgot password?</a></p>
    
                                <button style = "bgcolor:red"class="btn btn-outline-light btn-lg px-5" type="submit">Login</button>
                            </div>
                        </form>

                    </div>
                    </div>
                </div>
                </div>
    

    @endsection