@extends('adminlte::page', ['iFrameEnabled' => true]){{-- , ['iFrameEnabled' => true] --}}

@section('content')

@if(Session::has('error1'))

<div class="alert alert-danger">

<button type="button" class="close" data-dismiss="alert">
&times;
	
</button>
	{{Session::get('error1')}}
</div>

@endif
