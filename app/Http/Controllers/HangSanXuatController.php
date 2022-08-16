<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Supplier;

class HangSanXuatController extends Controller
{
    // const UPDATED_AT = null;
    //
    public function getDanhSach(){
    	$supplier = Supplier::all();
        $supplier = Supplier::paginate(5);
        return view('admin.hangsanxuat.danhsach',['supplier'=>$supplier]);
    }

     public function getEdit($id){
        $supplier = Supplier::find($id);
        return view('admin.hangsanxuat.edit',['supplier'=>$supplier]);
    }

    public function postEdit(Request $req,$id){
        $this->validate($req,
            [
                'name_supplier'=>'required',
                'image'=>'required'
            ],
            [
                'name_supplier.required'=>'bạn chưa nhập tên hãng sản xuất',
                'image.required'=>'bạn chưa chọn ảnh'
            ]);
        $supplier = Supplier::find($id);
        $supplier->name_supplier = $req->name_supplier;
        $supplier->image = $req->image;
        $supplier->description = $req->description;
        $supplier->save();
        return redirect('admin/hangsanxuat/edit/'.$id)->with('thongbao','Sửa hãng sản xuất thành công!!');
    }

     public function getAdd(){
     	return view('admin.hangsanxuat.add');
    }

    public function postAdd(Request $req){
        $this->validate($req,
            [
                'name_supplier'=>'required'
            ],
            [
                'name_supplier.required'=>'bạn chưa nhập tên hãng sản xuất'
            ]);
        $supplier = new Supplier;
        $supplier->name_supplier = $req->name_supplier;
        $supplier->image = $req->image;
        $supplier->description = $req->description;
        $supplier->save();
        return redirect('admin/hangsanxuat/add')->with('thongbao','Thêm hãng sản xuất thành công!!');
    }

    public function getDelete($id){
        $supplier = Supplier::find($id);
        $supplier->delete();

        return redirect('admin/hangsanxuat/danhsach')->with('thongbao','Xóa thành công!');
    }
}
