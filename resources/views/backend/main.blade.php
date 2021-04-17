@extends('backend.layouts.master')
@section('title')
    Main | Admin
@endsection
@section('main')
<h1 class="mt-4">Main</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href="index.html">Main</a></li>
    <li class="breadcrumb-item active">Main</li>
</ol>
<div class="card mb-4">
    <div class="card-body">
        <h3>Background Image</h3>
        <img class="img-thumbnail" style="height: 30vh" src="{{asset('assets/img/header-bg.jpg')}}" alt="">
    </div>
</div>
@endsection
