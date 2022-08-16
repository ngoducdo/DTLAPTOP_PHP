@extends('admin.layout.index')
@section('content')
<style type="text/css">
        .table h4{
          color: #660FC7;
        }
        .table tr:first-child h5{
          display: inline;
        }
        .table tr:first-child p{
          display: inline;
        }
      </style>
  <div class="container-fluid">
  	<div class="row">
  		<div class="col-md-10">
        <h4><b>chi tiết liên hệ: </b> {{$lienhe->id}}</h4>
        <table class="table m-auto">
          <tr>
            <td colspan="2"><p>Họ và tên: </p><h4 id="ho">{{$lienhe->name}}</h4></td>
          </tr>
          <tr>
            <td colspan="2"><p>SĐT:</p><h4 id="sdt">0{{$lienhe->phone}}</h4></td>
          </tr>
          <tr>
            <td colspan="2"><p>Email:</p><h4 id="sdt">{{$lienhe->email}}</h4></td>
          </tr>
          <tr>
            <td colspan="2"><p>Nội dung :</p><h4 id="diachi">{{$lienhe->message}}</h4></td>
          </tr>
        </table>
        <br>
    </div>
  </div>
</div>
@endsection