<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\ProductType;
use App\Category;
use App\Product;
use App\Supplier;
use App\Supplier1;
use App\Exports\ProductExport;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Facades\Excel;

class ProductController extends Controller
{
    //
    public function getDanhSach(){
    	// $product = Product::orderBy('id','DESC')->get();
        $product = Product::orderBy('id','DESC')->where('status','')->paginate(20);
        return view('admin.sanpham.danhsach',['product'=>$product]);
    }

     public function getEdit($id){
        $loaisp = ProductType::all();
        $danhmuc = Category::all();
        $nhacc = Supplier::all();
        $nhacc1 = Supplier1::all();
        $product = Product::find($id);
        return view('admin.sanpham.edit',['loaisp'=>$loaisp,'danhmuc'=>$danhmuc,'nhacc'=>$nhacc,'product'=>$product,'nhacc1'=>$nhacc1]);
    }

    public function postEdit(Request $req,$id){
      $product = Product::find($id);
      $this->validate($req,
            [
                'type_products'=>'required',
                'name'=>'required|min:2',
                'des' => 'required|min:10',
            ],
            [
                'type_products.required'=>'Bạn chưa chọn loại sản phẩm!',
                'name.required'=>'Bạn chưa nhập tên sản phẩm',
                'name.min'=>'Tên sản phẩm ít nhất 2 ký tự',
                'des.required'=>'Bạn chưa nhập mô tả',
                'unit_price.required'=>'bạn chưa nhập giá cho sản phẩm',
            ]);

                $product->name = $req->name;
                $product->id_type = $req->type_products;
                $product->id_category = $req->category;
                $product->id_supplier = $req->supplier;
                $product->id_ncc = $req->ncc;
                $product->description = $req->des;
                $product->description1 = $req->des1;
                $product->parameter = $req->parameter;
                $product->origin = $req->origin;
                $product->guarantee = $req->guarantee;
                $product->unit_price = $req->unit_price;
                $product->promotion_price = $req->promotion_price;
                $product->image = $req->img;
                $product->unit = $req->unit;
                $product->new = $req->new;
                $product->save();
                return redirect('admin/sanpham/edit/' .$id)->with('thongbao','Sửa thành công!');

    }

     public function getAdd()
     {
        $loaisp = ProductType::all();
        $nhacc = Supplier::all();
        $nhacc1 = Supplier1::ALL();
        $danhmuc = Category::all();
     	return view('admin.sanpham.add',['loaisp'=>$loaisp,'danhmuc'=>$danhmuc,'nhacc'=>$nhacc,'nhacc1'=>$nhacc1]);
    }

    public function postAdd(Request $req)
    {
    	$this->validate($req,
            [
                'type_products'=>'required',
                'name'=>'required|min:2|unique:products,name',
                'des' => 'required|min:10|max:5550',
                'unit_price'=>'required',
                'img'=>'required'
            ],
            [
                'type_products.required'=>'Bạn chưa chọn loại sản phẩm!',
                'name.required'=>'Bạn chưa nhập tên sản phẩm',
                'name.min'=>'Tên sản phẩm ít nhất 2 ký tự',
                'name.unique'=>'Tên sản phẩm đã tồn tại',
                'des.required'=>'Bạn chưa nhập mô tả',
                'unit_price.required'=>'bạn chưa nhập giá cho sản phẩm',
                'img.required'=>'Bạn chưa nhập ảnh cho sản phẩm',
                //'promotion_price' =>'Giá KM phải nhỏ hơn giá Gốc'
            ]);

        if($req->unit_price < $req->promotion_price)
            return redirect()->back()->with('error','Giá khuyến mãi phải nhỏ hơn giá gốc!');
        else{

            $product = new Product;
            $product->name = $req->name;
            $product->id_type = $req->type_products;
            $product->id_category = $req->category;
            $product->id_supplier = $req->supplier;
            $product->id_ncc = $req->ncc;
            $product->description = $req->des;
            $product->description1 = $req->des1;
            $product->parameter = $req->parameter;
            $product->origin = $req->origin;
            $product->guarantee = $req->guarantee;
            $product->unit_price = $req->unit_price;
            $product->promotion_price = $req->promotion_price;
            $product->image = $req->img;
            $product->unit = $req->unit;
            $product->new = $req->new;
            $product->status = '';
            $product->save();
            return redirect('admin/sanpham/add')->with('thongbao','Thêm sản phẩm thành công');
        }
    }

    // public function getDelete($id){
    //     $product = Product::find($id);
    //     $product->delete();

    //     return redirect('admin/sanpham/danhsach')->with('thongbao','Xóa thành công!');
    // }
     public function getHuy(Request $id){
        $product = Product::where('status','đã hủy')->paginate(10);
        return view('admin.sanpham.delete',compact('product'));
    }

    public function postHuy(Request $id){
        $product = Product::find($id);
        $product = Product::where('id',$id->id)->first();
        $product->status = 'đã hủy';
        $product->save();
        return redirect()->back()->with('thongbao','Đã xóa sản phẩm!');
    }

    public function xuatExcel(){
        return Excel::download(new ProductExport, 'product.xlsx');
    }


}
