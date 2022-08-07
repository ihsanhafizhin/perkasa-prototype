@extends('layouts.layout-landing')

@section('content')
                <div class="row d-flex justify-content-center align-items-center row-card-login">
                <div class="col-5 col-md-5 col-lg-5 col-xl-5 d-flex align-items-center">
                    <div class="card text-white" style="border-radius: 1rem; background-color:red; width:100%; height:auto;">
                    <div class="card-body text-center">

                        <form action="{{ route('login.post') }}" method="POST">
                            @csrf
                            <img src="../assets/img/ikon.png" class="rounded-circle">
    
                            <div class="container-form-login">    
                                <div class="form-outline form-white mb-4">
                                    <input type="text" name="username" id="typeEmailX" class="form-control form-login" />
                                    <label class="form-label" for="typeEmailX">Username</label>
                                </div>
    
                                <div class="form-outline form-white mb-4">
                                    <input type="password" name="password" id="typePasswordX" class="form-control form-login" />
                                    <label class="form-label" for="typePasswordX">Password</label>
                                </div>
                                
                               <div class="d-flex justify-content-between container-login-link">
                                <div class="input-group-text">
                                    <input class="form-check-input" type="checkbox" value="" id="rememberMe">
                                    <label href="#" for="rememberMe">Remember Me</label>
                                  </div>
                                <a href="#">Forgot Password?</a>
                               </div>
    
                                <button style = "bgcolor:red"class="btn btn-submit" type="submit">LOGIN</button>
                            </div>
                        </form>

                    </div>
                    </div>
                </div>
                </div>
    

    @endsection