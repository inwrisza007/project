@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Waiting for Approval</div>

                    <div class="card-body">
                        Your account is waiting for our administrator approval.
                        <br />
                        Please check back later.
                        <a href="/profile" class="button" input type="button" value="สมัครสมาชิก">upload image </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
