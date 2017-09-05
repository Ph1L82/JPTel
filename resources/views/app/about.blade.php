@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Acerca de...</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <p>
                    <center>
                        <img height="500" align="middle" src="{{url('img/jpt.jpg')}}">
                    </center>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
