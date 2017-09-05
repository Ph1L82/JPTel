@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Consumo Telefónico</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <ul class="nav nav-pills">
                        <li>
                        <form class="form-inline" method="POST" action="{{url('/consumption/Month')}}">
                            {{ csrf_field() }}
                            <input type="hidden" id="fromDate" name="fromDate" value="{{date('Y-m-d',mktime(0,0,0,date('m', strtotime('-2 months')),26,date('y')))}}"> <!-- //26th day 2 months before -->
                            <input type="hidden" id="toDate" name="toDate" value="{{date('Y-m-d',mktime(0,0,0,date('m', strtotime('last month')),25,date('y')))}}" >
                            <button type="submit" class="btn btn-default">Mes Pasado</button>
                        </form>
                        </li>
                        <li>
                        <form class="form-inline" method="POST" action="{{url('/consumption/Month')}}">
                            {{ csrf_field() }}
                            <input type="hidden" id="fromDate" name="fromDate" value="{{date('Y-m-d',mktime(0,0,0,date('m', strtotime('last month')),26,date('y')))}}" > <!-- //26th day last month -->
                            <input type="hidden" id="toDate" name="toDate" value="{{date('Y-m-d',mktime(0,0,0,date('m'),25,date('y')))}}"> <!-- //25th day this month -->
                            <button type="submit" class="btn btn-default">Mes Actual</button>
                        </form>
                        </li>
                        <li>
                        <form class="form-inline" method="POST" action="{{url('/consumption/Month')}}">
                            {{ csrf_field() }}
                            <input type="month" id="fromDate" name="fromDate">
                            <input type="month" id="toDate" name="toDate">
                            <button type="submit" class="btn btn-default">Mes Personalizado</button>
                        </form>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
