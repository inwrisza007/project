@extends('layouts.app')

@section('content')
รายชื่อสมาชิก
<table class='table table-bordered'>
        <tr>
            <td>id</td>
                <th> ชื่อ </th>

             <th> E-mail </th>
             <th> เบอร์โทรศัพท์</th>
                 <th>ที่อยู่</th>
                 <th>ยืนยัน</th>
                 <th>สายงาน</th>
                 <th>บัตรประชาชน</th>
                 <th>สำเนาทะเบียนบ้าน</th>



             </tr>
@foreach ($member as $data)




        <tr>
            <td>{{$data->id}}</td>
            <td>{{$data->name}}</td>
            <td>{{$data->email}}</td>
            <td>{{$data->phonenumber}}</td>
            <td>{{$data->address}}</td>
            <td>{{$data->approved_at}}</td>
            <td>{{$data->parent_id}}</td>
            <td>คลิก</td>
            <td>คลิก</td>
            <td>
                <form method="post" class="delete_form" action="{{action('memberController@destroy',$data->id)}}">
                        <input type="hidden" name ="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="_method" value="DELETE" />
                <button type="submit" class = "btn btn-danger">Delete</button>
            </form>
            </td>

        </tr>
@endforeach

</table>
