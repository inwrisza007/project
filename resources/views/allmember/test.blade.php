@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">รายชื่อสมาชิก</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @foreach ($form as $data)
<div class="col-md-4">
    <div class="thumbnail">
      <a href="/uploads/images/{{$data->filename}}" target="_blank">
        <img src="/uploads/images/{{$data->filename}}" style= width="200" height="200">
      </a>
      <div class="caption">
        <div class="form-group row">
            @endforeach
      </a>
    </div>
  </div>
