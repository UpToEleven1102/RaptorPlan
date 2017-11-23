@extends('layouts.app')

@section('content')

<div style="height:100%; position:relative;">
      <div style="position:absolute; width:100%;">
          <div class="loginbox">
              <div class="grid-x">
                  <form  action="{{route('login')}}" method="POST" style="width:100%;">
                      {{csrf_field()}}
                    <h2>Login</h2>
                    <label for="email">Email:</label>
                    <input type="email" name="email">
                    @if ($errors->has('email'))
                                    <span>
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                    <label for="password">Password:</label>
                    <input type="password" name="password">
                    @if ($errors->has('password'))
                    <span>
                            <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                    @endif
                    <label>
                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                    </label>
                    <input class="button" style="background-color: rgb(20,20,20)" type="submit">
                  </form>
                </div>
                <div class="grid-x text-right" style="display:flex">
                <div class="cell" style="display:flex; align-items: right"> No account? <a href="/register"><i>Create one!</i></a></div>
                   
                </div>
          </div>
      </div>    
    </div>
@endsection
