    @extends('layouts.auth')

    @section('title')
        Login
    @endsection

    @section('content')
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 ml-auto mr-auto">
                    <div class="card card-login">
                        <form method="POST" action="{{ route('login') }}" class="form">
                            @csrf
                            <div class="card-body">
                                <div class="card-header card-header-primary text-center">
                                    <h4 class="card-title">Login</h4>
                                    <div class="social-line">
                                        <a href="#pablo" class="btn btn-just-icon btn-link">
                                            <i class="fa fa-facebook-square"></i>
                                        </a>
                                        <a href="#pablo" class="btn btn-just-icon btn-link">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                        <a href="#pablo" class="btn btn-just-icon btn-link">
                                            <i class="fa fa-google-plus"></i>
                                        </a>
                                    </div>
                                </div>
                                <p class="description text-center">Or Be Classical</p>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <label for="input_login_email"></label>
                                        <span class="input-group-text">
                                            <i class="material-icons">mail</i>
                                        </span>
                                    </div>
                                    <input name="email" value="{{ old('email') }}"
                                        class="form-control py-4  @error('email') is-invalid @enderror"
                                        id="input_login_email" type="email" placeholder="Enter email address"
                                        autocomplete="email" />
                                    <!-- todo: show message validation (email) -->
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <label for="input_login_password"></label>
                                        <span class="input-group-text">
                                            <i class="material-icons">lock_outline</i>
                                        </span>
                                    </div>
                                    <input name="password" class="form-control py-4 @error('password') is-invalid @enderror"
                                        id="input_login_password" type="password" placeholder="Enter password"
                                        autocomplete="current-password" />
                                    <!-- todo: show message validation (password) -->
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-sm-8 col-md-5 mx-auto">
                                <button type="submit" class="btn btn-primary btn btn-primary btn-round">Get Started</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>



    @endsection
