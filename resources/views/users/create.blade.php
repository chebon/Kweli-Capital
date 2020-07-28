@extends('app')
@section('content')
<div id="content">
    <div class="container">
        <div class="row justify-content-md-center align-items-center">
            <div class="col col-md-6  col-lg-5 col-xl-4">
                <ul class="nav nav-tabs tab-lg" role="tablist">
                    <li role="presentation" class="nav-item"><a class="nav-link active" href="signin.html">Register</a></li>
                </ul>
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="login">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form action="/register" method="post">
                            @csrf
                            <input hidden style="display: none" type="text" name="role" id="role" value="{{$role}}" class="form-control form-control-lg" placeholder="Password">
                            <div class="form-group">
                                <label for="name">Names</label>
                                <input type="text" name="name" id="name" class="form-control form-control-lg" placeholder="Names">
                            </div>
                            <div class="form-group">
                                <label for="email">Email address</label>
                                <input type="email" name="email" id="email" class="form-control form-control-lg" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" name="password" id="password" class="form-control form-control-lg" placeholder="Password">
                            </div>

                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" name="password_confirmation" id="password-confirm" class="form-control form-control-lg" placeholder="Password Confirmation">
                            </div>
                            <button type="submit" class="btn btn-primary btn-lg">Register</button>
                        </form>
                    </div>
                </div>
                <div> </div>
            </div>
        </div>
    </div>
@endsection
