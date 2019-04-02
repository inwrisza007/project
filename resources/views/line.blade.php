@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">ข้อมูลส่วนตัว</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

        <table class='table table-bordered'>







            @foreach($line as $data)
            <tr>

                <td>ชื่อ</td>


                <td>{{$data->name}}</td>
                </tr>
                <tr>
                <td>เบอร์โทรศัพท์</td>
                <td>{{$data->phonenumber}}</td>
                </tr>






            @endforeach
@endsection
