@extends('app')
@section('content')
    <div id="content">
        <div class="container">
            <div class="row justify-content-md-center align-items-center">
                <div class="col col-md-6  col-lg-5 col-xl-4">
                    <ul class="nav nav-tabs tab-lg" role="tablist">
                        <li role="presentation" class="nav-item"><a class="nav-link active" href="signin.html">Sign In</a></li>
                    </ul>
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="login">
                            <form>
                                <div class="form-group">
                                    <label for="email">Email address</label>
                                    <input type="email" id="email" class="form-control form-control-lg" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" id="password" class="form-control form-control-lg" placeholder="Password">
                                </div>
                                <p class="text-lg-right"><a href="forgot-password.html">Forgot Password</a></p>
                                <div class="checkbox">
                                    <input type="checkbox" id="remember_me">
                                    <label for="remember_me">Remember Me</label>
                                </div>
                                <button type="submit" class="btn btn-primary btn-lg">Sign In</button>
                            </form>
                        </div>
                    </div>
                    <div> </div>
                </div>

                <div class="col-md-6 col-lg-5 col-xl-4">
                    <div class="socal-login-buttons"> <a href="signin.html#" class="btn btn-social btn-block btn-facebook"><i class="icon fa fa-facebook"></i> Continue with Facebook</a> <a href="signin.html#" class="btn btn-social btn-block btn-twitter"><i class="icon fa fa-twitter"></i> Continue with Twitter</a> <a href="signin.html#" class="btn btn-social btn-block btn-google"><i class="icon fa fa-google"></i> Continue with Google</a> </div>
                </div>
            </div>
        </div>
@endsection
