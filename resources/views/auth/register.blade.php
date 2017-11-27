@extends('layouts.app')

@section('content')

<div class="container">
      <div class="grid-x grid-margin-x grid-margin-y grid-padding-x grid-padding-y">
        <aside class="aside-container cell medium-6">
          <h3>
            <strong>Leverage your academic career with RAPTOR PLAN</strong>
          </h3>
          <div class="bulletpoint">
            <p><i class="fa fa-book" aria-hidden="true"></i>  Create academic plan!</p>
          </div>
          <div class="bulletpoint">
            <p><i class="fa fa-exchange" aria-hidden="true"></i>  Create transfer path to universities!</p>
          </div>
          <div class="bulletpoint">
              <p><i class="fa fa-connectdevelop" aria-hidden="true"></i>  Connect with professors and friends!</p>
          </div>
        </aside>
        
        <form action="#" method="POST" class="cell main-container medium-6">
            {{csrf_field()}}
            <h2>Register</h2>
            <input type="text" name="name" placeholder="First Name" value="{{ old('name') ? old('name'): ''}}" required>
            @if ($errors->has('name'))
                                    <span>
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
            <input type="text" name="last_name" placeholder="Last Name" value = "{{old('last_name')? old('last_name'):''}}"required>
            @if ($errors->has('last_name'))
            <span>
                <strong>{{$errors->first('last_name')}}</strong>
            </span>
            @endif
            <input type="password" name="password" placeholder="Password" required>
            @if ($errors->has('password'))
                <span>
                    <strong>{{$errors->first('password')}}</strong>
                </span>

            @endif

            <input type="password" name="password_confirmation" placeholder="Retype Password" required> 
            <input type="email" name="email" placeholder="Email Address" value = "{{old('email')?old('email'):''}}" required>
            @if ($errors->has('email'))
            <span>
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
            @endif

            <select name="major" id="select_major">
                <option selected hidden>Preferred major ...</option>
                @foreach($majors as $major)
                <option value="{{$major}}">
                    {{$major}}
                </option>
                @endforeach
            </select>
            
            <input class="button hollow" type="submit" text="Submit">
        </form>
      </div>
</div>
@endsection
