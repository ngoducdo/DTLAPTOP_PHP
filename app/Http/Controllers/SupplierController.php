<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Supplier1;

class SupplierController extends Controller
{
    // const UPDATED_AT = null;
    //
    public function getDanhSach(){
        $supplier = Supplier1::all();
        $supplier = Supplier1::paginate(5);
        return view('admin.nhacungcap.danhsach',['supplier'=>$supplier]);
    }

     public function getEdit($id){
        $supplier = Supplier1::find($id);
        return view('admin.nhacungcap.edit',['supplier'=>$supplier]);
    }

    public function postEdit(Request $req,$id){
        $this->validate($req,
            [
                'name'=>'required|min:2',
                'address'=>'required|min:2',
                'phone'=>'required|min:10|max:15',
                'email'=>'required'
            ],
            [
                'name.required'=>'bạn chưa nhập tên hãng sản xuất',
                'name.min'=>'Tên nhà cung cấp trên 2 ký tự',
                'address.required'=>'bạn chưa nhập địa chỉ nhà cung cấp',
                'address.min'=>'địa chỉ lớn hơn 2 ký tự',
                'phone.required'=>'bạn chưa nhập số điện thoại',
                'phone.min'=>'Số điện thoại phải từ 10 đến 15 số',
                'phone.max'=>'Số điện thoại phải từ 10 đến 15 số',
                'email.required'=>'bạn chưa nhập địa chỉ email'
            ]);
        $supplier = Supplier1::find($id);
        $supplier->name = $req->name;
        $supplier->address = $req->address;
        $supplier->phone = $req->phone;
        $supplier->email = $req->email;
        $supplier->description = $req->description;
        $supplier->save();
        return redirect('admin/nhacungcap/edit/'.$id)->with('thongbao','Sửa nhà cung cấp thành công!!');
    }

     public function getAdd(){
        return view('admin.nhacungcap.add');
    }

    public function postAdd(Request $req){
        $this->validate($req,
            [
                 'name'=>'required|min:2',
                'address'=>'required|min:2',
                'phone'=>'required|min:8',
                'email'=>'required'
            ],
            [
                'name.required'=>'bạn chưa nhập tên nhà cung cấp',
                'name.min'=>'Tên nhà cung cấp trên 2 ký tự',
                'address.required'=>'bạn chưa nhập địa chỉ nhà cung cấp',
                'address.min'=>'địa chỉ lớn hơn 2 ký tự',
                'phone.required'=>'bạn chưa nhập số điện thoại',
                'phone.min'=>'số điện thoại tối thiểu 10 số',
                'email.required'=>'bạn chưa nhập địa chỉ email',
            ]);
        $supplier = new Supplier1;
        $supplier->name = $req->name;
        $supplier->address = $req->address;
        $supplier->phone = $req->phone;
        $supplier->email = $req->email;
        $supplier->description = $req->description;
        $supplier->save();
        return redirect('admin/nhacungcap/add')->with('thongbao','Thêm nhà cung cấp thành công!!');
    }

    public function getDelete($id){
        $supplier = Supplier1::find($id);
        $supplier->delete();

        return redirect('admin/nhacungcap/danhsach')->with('thongbao','Xóa thành công!');
    }
}
