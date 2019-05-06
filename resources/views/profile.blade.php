@extends('layouts.app')

@section('content')
@foreach($test as $data)

<div class="card-body">
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <img src="/uploads/avatars/{{ $data->avatar }}" style="width:150px; height:150px; float:left; border-radius:50%; margin-right:25px;">
            <h2>{{ $data->name }}'s Profile</h2>
            <form enctype="multipart/form-data" action="/profile" method="POST">
                <label>Update Profile Image</label>
                <input type="file" name="avatar">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="submit" class="pull-right btn btn-sm btn-primary">

            </form>

            <table class='table table-bordered'>
                <div class="card-header">ข้อมูลส่วนตัว</div>








                    <tr>
                    <td>ชื่อ</td>


                    <td>{{$data->name}}</td>
                    </tr>
                    <tr>
                        <td>หมายเลขสมาชิก</td>
                        <td>{{$data->username}}</td>
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
        </div>
    </div>
</div>
@endsection
