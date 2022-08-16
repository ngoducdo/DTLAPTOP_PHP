<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bill;
use App\BillDetail;
use App\Product;
use App\Customer;
use Carbon\Carbon;
use DB;
class BillController extends Controller
{
    // const UPDATED_AT = null;
    //
    public function getDanhSach(){
        $customer = Customer::all();
    	$bill = Bill::where('status','not like','đã xử lý')

        ->paginate(10);
        return view('admin.hoadon_ban.dangxuly',['bill'=>$bill,'customer'=>$customer]);
    }

    public function getChitiet(Request $id){
        $bill = Bill::where('id',$id->id)->first();
        $bill_detail = BillDetail::where('id_bill',$bill->id)->get();
        
        // $getExpire = BillDetail::where('id_bill',$bill->id)
        // ->join('bills','bills.id','=','bill_detail.id_bill')->first();
        // cho nay get(); getExpire get() hả ?
        // tao k hieeur gif trown
        // cdoe lại cái cũ 
        return view('admin.hoadon_ban.chitietdon',compact('bill','bill_detail'));
       
    }


    //doanh thu
     /*public function getDoanhThu(Request $id){
       
        //return view('admin.doanhthu.thongkedoanhthu',compact('bill','bill_detail'));
         return redirect()->back();
    }*/
    public function TKBC(){
        
    
        $thongke_sanpham = Product::join('bill_detail','bill_detail.id_product','=','products.id')
        ->join('bills','bills.id','=','bill_detail.id_bill')
        ->where('bills.status','like','đã xử lý')
        ->select('*','products.id as idproduct', 'bill_detail.id as idbill')
        ->groupBy('products.id')
        ->paginate(5);

        $test = BillDetail::join('bills','bills.id','=','bill_detail.id_bill')
        ->where('bills.status','like','đã xử lý')->get();

        $thongke_top_sold = Product::join('bill_detail','bill_detail.id_product','=','products.id')
        ->join('bills','bills.id','=','bill_detail.id_bill')
        ->where('bills.status','like','đã xử lý')
        ->select('*','products.id as idproduct', 'bill_detail.id as idbill')
        ->groupBy('products.id')
        ->orderBy(DB::raw('COUNT(bill_detail.unit_price)'), 'desc')
        ->get();       //$thongke_sanpham->paginate(2);($\
        $doanhthu = Bill::where('status','đã xử lý')->sum('total');
        $thongke = [
            'thongke_sanpham' => $thongke_sanpham,
            'test' => $test,
            'thongke_top_sold' => $thongke_top_sold,
            'doanhthu' => $doanhthu,
        ];

       // $thongke->
        
        return view('admin.doanhthu.thongkebaocao',$thongke);
    }


    /*
    */
    public function TKDT(Request $id){
        
        $doanhthu = Bill::where('status','đã xử lý')->sum('total');
    
       // $doanhthu = Bill::where('status','đã xử lý');
        
        return view('admin.doanhthu.thongkedoanhthu',compact('doanhthu'));
    }
    //
    //
    public function getBan(Request $id){
       $customer = Customer::all();
        $bill = Bill::where('status','đã xử lý')->paginate(10);
        return view('admin.hoadon_ban.giao_hang_xong',compact('bill','bill_detail'));
    }

    public function postBan(Request $id){
        $bill = Bill::find($id);
        $bill = Bill::where('id',$id->id)->first();
        $bill->status = 'đã xử lý';
        $bill->save();
        return redirect()->back()->with('thongbao','Đã giao hàng!');
    }

      public function getHuy(Request $id){
        $customer = Customer::all();
        $bill = Bill::where('status','đã hủy')->paginate(10);
        return view('admin.hoadon_ban.donhang_huy',compact('bill','bill_detail'));
    }

    public function postHuy(Request $id){
        $bill = Bill::find($id);
        $bill = Bill::where('id',$id->id)->first();
        $bill->status = 'đã hủy';
        $bill->save();
        return redirect()->back()->with('thongbao','Đã hủy hàng!');
    }

    public function getSearch(Request $req){
        // $customer = Customer::all();
        $bill = DB::table('customer')->join('bills','customer.id','=','bills.id_customer')->where('customer.name','like','%'.$req->key.'%')
                            // ->orWhere('bills.id',$req->key)
                            ->paginate(12);
        return view('admin.hoadon_ban.search',compact('bill'));
    }

      public function xacnhanDH($id){
        DB::table('bills')->where('id','=',$id)->update(['status'=>'Đã xác nhận']);
        return redirect()->back();
    }


    public function layHang($id){
        DB::table('bills')->where('id','=',$id)->update(['status'=>'Đã lấy hàng']);
        return redirect()->back();
    }

    public function vanChuyen($id){
        DB::table('bills')->where('id',$id)->update(['status'=>'Đang vận chuyển']);
        return redirect()->back();
    }

    public function hoanTat($id){
        DB::table('bills')->where('id',$id)->update(['status'=>'Hoàn tất đơn hàng']);
        return redirect()->back();
    }
    public function kiemtra(){
        return redirect()->back()->with('thongbao','Chưa hoàn tất đơn hàng');
    }
}
