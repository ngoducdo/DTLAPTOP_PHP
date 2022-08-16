@extends('admin.layout.index')
@section('content')
     <section class="content-header">
      <h1>
        Sửa
        <small>{{$supplier->name}}</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Slide</a></li>
        <li class="active">Edit</li>
      </ol>
    </section>
    <br>
    <div class="box-body" style="width: 1500px;">
        @if(count($errors)>0)
          <div class="alert alert-danger">
            @foreach($errors->all() as $err)
              {{$err}}<br>
            @endforeach
          </div>
        @endif

        @if(session('thongbao'))
          <div class="alert alert-success">
            {{session('thongbao')}}
          </div>
        @endif
         <form role="form" action="admin/nhacungcap/edit/{{$supplier->id}}" method="post">
              <input type="hidden" name="_token" value="{{csrf_token()}}">
              <div class="col-sm-7">
                <div class="form-group">
                  <label>Tên Nhà cung cấp</label>
                  <input type="text" name="name" value="{{$supplier->name}}" class="form-control" placeholder="Nhập tên nhà cung cấp">
                </div>
                <div class="form-group">
                  <label>Địa chỉ</label>
                  <input type="text" name="address" value="{{$supplier->address}}" class="form-control" placeholder="Nhập địa chỉ">
                </div>
                 <div class="form-group">
                  <label>Số điện thoại</label>
                  <input type="text" name="phone" value="{{$supplier->phone}}" class="form-control" placeholder="Nhập số điện thoại">
                </div>
                <div class="form-group">
                  <label>email</label>
                  <input type="text" name="email" value="{{$supplier->email}}" class="form-control" placeholder="Nhập email">
                </div>
                 <div class="form-group">
                  <label>Mô tả</label>
                  <textarea id="demo" class="form-control ckeditor" name="description" placeholder="Nhập mô tả" ><?php echo $supplier['description']; ?></textarea>
                </div>
                <button type="submit" class="btn btn-default">Sửa</button>
                 <button type="reset" class="btn btn-default">Làm Mới</button>
               </div>
        </form>
     </div>
@endsection