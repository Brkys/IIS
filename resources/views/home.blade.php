@extends('layouts.app')

@section('title', 'Hlavní stránka')

@section('navpanel')
	@parent
@endsection

@section('content')
<img src="../images/header.jpg" width="50%" height="100%" style="margin-top: 50px;">
@php 
if(!empty(Session::get('permission')))
	echo Session::get('permission');
@endphp
@endsection