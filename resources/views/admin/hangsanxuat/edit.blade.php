@extends('admin.layout.index')
@section('content')
	   <section class="content-header">
      <h1>
        Sửa
        <small>{{$supplier->name_supplier}}</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Hãng sản xuất</a></li>
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
         <form role="form" action="admin/hangsanxuat/edit/{{$supplier->id}}" method="post">
              <input type="hidden" name="_token" value="{{csrf_token()}}">
              <div class="col-sm-7">
                <div class="form-group">
                  <label>Tên Hãng sản xuất</label>
                  <input type="text" name="name_supplier" class="form-control" placeholder="Nhập tên danh mục" value="{{$supplier->name_supplier}}">
                </div>
                <div class="form-group">
                  <label>Ảnh hãng sản xuất</label>
                  <img src="images/hangsanxuat/{{$supplier->image}}" width="100px" height="100px">
                  <input type="file" name="image" value="{{$supplier->image}}">
                </div>
                 <div class="form-group">
                  <label>Mô tả</label>
                  <textarea id="demo" class="form-control ckeditor" name="description" placeholder="Nhập địa chỉ" ><?php echo $supplier['description']; ?></textarea>
                </div>
                <button type="submit" class="btn btn-default">Sửa</button>
                 <button type="reset" class="btn btn-default">Làm Mới</button>
               </div>
        </form>
     </div>
@endsection