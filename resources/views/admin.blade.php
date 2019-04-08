@extends('layouts.app')
<style>
        .button {
          background-color: #4CAF50;
          border: none;
          color: white;
          padding: 15px 32px;
          text-align: center;
          text-decoration: none;
          display: inline-block;
          font-size: 16px;
          margin: 4px 2px;
          cursor: pointer;
        }
        </style>


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <a href="/register" class="button" input type="button" value="สมัครสมาชิก">สมัครสมาชิก </a>
                    <a href="/userinfo" class="button" input type="button" value="ข้อมูลส่วนตัว">ข้อมูลส่วนตัว </a>
                    <a href="/users" class="button" input type="button" value="ข้อมูลส่วนตัว">ยืนยันการสมัคร </a>
                    <a href="/line" class="button" input type="button" value="ข้อมูลส่วนตัว">line </a>
                    <a href="/create" class="button" input type="button" value="ข้อมูลส่วนตัว">upload </a>
                    <a href="/imageupload" class="button" input type="button" value="ข้อมูลส่วนตัว">upload </a>
                    <a href="/allmember" class="button" input type="button" value="ข้อมูลส่วนตัว">รายชื่อสมาชิก </a>
                    <a href="/image" class="button" input type="button" value="ข้อมูลส่วนตัว">บัตรสมาชิก </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
