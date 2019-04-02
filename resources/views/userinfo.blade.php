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







            @foreach($test as $data)

                <tr>
                <td>ชื่อ</td>


                <td>{{$data->name}}</td>
                </tr>
                <tr>
                <td>เบอร์โทรศัพท์</td>
                <td>{{$data->phonenumber}}</td>
                </tr>

                <tr>
                <td>หมายเลขบัตรประชาชน</td>
                <td>{{$data->userid}}</td>
                </tr>

                <tr>
                <td>E-mail</td>
                <td>{{$data->email}}</td>
                </tr>

                <tr>
                <td>ที่อยู่</td>
                <td>{{$data->address}}</td>
                </tr>




            @endforeach
@endsection
