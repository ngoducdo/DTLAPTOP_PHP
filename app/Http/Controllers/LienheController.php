<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lienhe;

class LienheController extends Controller
{
    // const UPDATED_AT = null;
    //
    public function getDanhSach(){
    	$lienhe = Lienhe::all();
        $lienhe = Lienhe::paginate(5);
        return view('admin.lienhe.danhsach',['lienhe'=>$lienhe]);
    }

      public function getChitiet(Request $id){
        $lienhe = Lienhe::where('id',$id->id)->first();
        return view('admin.lienhe.chitietlienhe',compact('lienhe'));
    }

    public function getDelete($id){
        $lienhe = Lienhe::find($id);
        $lienhe->delete();
        return redirect('admin/lienhe/danhsach')->with('thongbao','Xóa thành công!');
    }
}
