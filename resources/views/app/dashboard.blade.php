@extends('layouts.app');
@section('content')
<div class="grid-container">
<div class="grid-x grid-margin-x grid-margin-y">
    <div class="cell">
        @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                        You are logged in!
                    @endif
    </div>
    

</div>

</div>
        

                    

@endsection