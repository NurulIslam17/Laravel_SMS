@extends('admin.master')
@section('form')
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6 col-xl-5">
            <div class="card overflow-hidden">
                <div class="bg-soft-primary">
                    <div class="row">
                        <div class="col-7">
                            <div class="text-primary p-4">
                                <h5 class="text-primary">Register Form</h5>
                                <p>Create Your Account.</p>
                            </div>
                        </div>
                        <div class="col-5 align-self-end">
                            <img src="{{asset('/')}}admin/assets/images/profile-img.png" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
                <div class="card-body pt-0">
                    <div>
                        <a href="index.html">
                            <div class="avatar-md profile-user-wid mb-4">
                                            <span class="avatar-title rounded-circle bg-light">
                                                <img src="{{asset('/')}}admin/assets/images/logo.svg" alt="" class="rounded-circle" height="34">
                                            </span>
                            </div>
                        </a>
                    </div>
                    <div class="p-2">

                        <form class="form-horizontal" action="{{ route('register') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="username">Name</label>
                                <input type="text" class="form-control" name="name" id="username" placeholder="Enter username">
                            </div>

                            <div class="form-group">
                                <label for="useremail">Email</label>
                                <input type="email" class="form-control" name="email" id="useremail" placeholder="Enter email">
                            </div>

                            <div class="form-group">
                                <label for="userpassword">Password</label>
                                <input type="password" class="form-control" name="password" id="userpassword" placeholder="Enter password">
                            </div>

                            <div class="form-group">
                                <label for="userpassword">Confirm Password</label>
                                <input type="password" class="form-control" name="password_confirmation" id="userpassword" placeholder="Enter password">
                            </div>

                            <div class="mt-4">
                                <button class="btn btn-primary btn-block waves-effect waves-light" type="submit">Register</button>
                            </div>

                            <div class="mt-4 text-center">
                                <h5 class="font-size-14 mb-3">Sign up using</h5>

                                <ul class="list-inline">
                                    <li class="list-inline-item">
                                        <a href="javascript::void()" class="social-list-item bg-primary text-white border-primary">
                                            <i class="mdi mdi-facebook"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="javascript::void()" class="social-list-item bg-info text-white border-info">
                                            <i class="mdi mdi-twitter"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="javascript::void()" class="social-list-item bg-danger text-white border-danger">
                                            <i class="mdi mdi-google"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                            <div class="mt-4 text-center">
                                <p class="mb-0">By registering you agree to the SMS <a href="#" class="text-primary">Terms of Use</a></p>
                            </div>
                        </form>


                    </div>

                </div>
            </div>
            <div class="mt-5 text-center">

                <div>
                    <p>Already have an account ? <a href="{{route('login')}}" class="font-weight-medium text-primary"> Login</a> </p>
                    <p>© 2020 Skote. Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesbrand</p>
                </div>
            </div>

        </div>
    </div>
@endsection

