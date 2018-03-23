@extends('layouts.app')

@section('content')
<div class="container" >
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body" >
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <center>
                    
                    <img src="{{ Auth::user()->avatar }}" height="200px" width="200px" >

                    <br><br>
                    <h3>{{ Auth::user()->firstName }}</h3>
                    <br><br>
                    </center>

                    <div class="container" >

    <div class="row justify-content-center">
        <div class="col-md-8">
                    <form method="POST" action="{{ action('ConfirmationMessageController@check') }} " enctype="multipart/form-data">
                        @csrf
                        <!-- Make sure to make this more dynamic, refactor it later -->
                        <div class="form-group row">
                            <label for="username" class="col-md-4 col-form-label text-md-right">Username</label>

                            <div class="col-md-6">
                                <input id="username" type="text" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }} form-input" name="username" value="{{ Auth::user()->username }}" required autofocus style="cursor: no-drop;" disabled>
                                <i class="fa fa-user-o input-place"></i>

                                @if ($errors->has('username'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }} form-input" name="email" value="{{ Auth::user()->email }}" required>
                                <span class="fa fa-vcard-o input-place"></span>
                                

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">First Name</label>

                            <div class="col-md-6">
                                <input id="firstName" type="text" class="form-control{{ $errors->has('firstName') ? ' is-invalid' : '' }} form-input" name="firstName" value="{{ Auth::user()->firstName }}" required>
                                <span class="fa fa-users input-place"></span>

                                @if ($errors->has('firstName'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('firstName') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">Last Name</label>

                            <div class="col-md-6">
                                <input id="lastName" type="text" class="form-control{{ $errors->has('lastName') ? ' is-invalid' : '' }} form-input" name="lastName" value="{{ Auth::user()->lastName }}" required>
                                <span class="fa fa-users input-place"></span>

                                @if ($errors->has('lastName'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('lastName') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">Phone Number</label>

                            <div class="col-md-6">
                                <input id="phoneNum" type="text" class="form-control{{ $errors->has('phoneNum') ? ' is-invalid' : '' }} form-input" name="phoneNum" value="{{ Auth::user()->phoneNum }}" required>
                                <span class="fa fa-phone input-place"></span>

                                @if ($errors->has('phoneNum'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('phoneNum') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">Address</label>

                            <div class="col-md-6">
                                <input id="adr" type="text" class="form-control{{ $errors->has('adr') ? ' is-invalid' : '' }} form-input" name="adr" value="{{ Auth::user()->adr }}" required>
                                <span class="fa fa-address-book-o input-place"></span>

                                @if ($errors->has('adr'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('adr') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="avatar" class="col-md-4 col-form-label text-md-right"> Avatar </label>

                            <div class="col-md-6">
                                <input id="avatar" type="file" class="form-control{{ $errors->has('avatar') ? ' is-invalid' : '' }}" name="avatar" value="{{ old('avatar') }}">

                                @if ($errors->has('avatar'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('avatar') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>



                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }} form-input" name="password" required>
                                <span class="fa fa-key input-place"></span>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control form-input" name="password_confirmation" required>
                                 <span class="fa fa-key input-place"></span>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Update') }}
                                </button>
                            </div>
                        </div>


                    </form>
              
        </div>
    </div>
</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection