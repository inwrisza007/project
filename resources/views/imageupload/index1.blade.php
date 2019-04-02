@extends('layouts.app')



      <div class="panel-body">
        <div class="row">
            @foreach ($form as $forms)

            <div>
                <div class="panel panel-default">

                    <div class="panel-body">
                      <a type="button" href="{{ route('imageupload.create') }}" class="btn btn-primary btn-lg btn-block">อัพโหลดรูป</a>
                    </div>
                  </div>
                </div>
                @endforeach


            </div>

