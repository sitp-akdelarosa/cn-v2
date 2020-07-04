@extends('layouts.auth')

@section('title')
    Pricon Microelectronics, Inc.
@endsection

@section('content')
    <form class="login-form" action="{{ route('login') }}" method="post">

        @csrf

        <div class="titlehead">
            <img src="{{ asset('img/pricon-logo.png') }}" alt="" class="img-responsive">
        </div>
        <div class="tpicshead text-center">
            <h4>{{ __('CN YPICS SUBSYSTEM') }}</h4>
        </div>

        <div class="form-group @error('user_id') has-error @enderror">
            <label class="control-label visible-ie8 visible-ie9">{{ __('User ID') }}</label>
            <div class="input-icon">
                <i class="fa fa-user"></i>
                <input class="form-control input-sm placeholder-no-fix" type="text" placeholder="User ID" name="user_id" id="user_id" value="{{ old('user_id') }}" autofocus/>
                @error('email')
                    <span class="help-block">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group @error('password') has-error @enderror">
            <label class="control-label visible-ie8 visible-ie9">{{ __('Password') }}</label>
            <div class="input-icon">
                <i class="fa fa-lock"></i>
                <input class="form-control input-sm placeholder-no-fix" type="password" autocomplete="off" placeholder="Password" name="password" id="password"/>
                @error('password')
                    <span class="help-block">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>


        <div class="form-actions">
            <button type="submit" class="btn btn-sm blue"><i class="fa fa-send"></i> {{ __('Login') }} </button>
            <button type="button" onclick="javascript:reset()" class="btn btn-sm blue pull-right"><i class="fa fa-refresh"></i> {{ __('Reset') }} </button>
        </div>
    </form>
@endsection
