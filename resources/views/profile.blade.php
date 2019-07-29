@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Profile</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form method = 'POST' action = '/check_profile'>
                        {{ csrf_field() }}
                        <label>Name</label>
                        <input class = 'form-control' name = 'textbox1' id = 'p1' type = 'text' value = "{{Auth::user()->name}}"/>

                        <label>Email</label>
                        <input class = 'form-control' name = 'textbox2' type = 'text' id = 'p1' value = "{{Auth::user()->email}}"/>
                        
                        <input class = 'btn btn-primary' name = 'button1' type = 'submit' value = 'Change'/>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
