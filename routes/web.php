<?php
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('index',[
	'as'=>'trang-chu',
	'uses'=>'PageController@getIndex'
]);

Route::get('loai-san-pham/{type}',[
	'as'=>'loaisanpham',
	'uses'=>'PageController@getLoaiSp'
]);

Route::get('danh-muc-san-pham/{type}',[
	'as'=>'danhmucsp',
	'uses'=>'PageController@getDanhmucSp'
]);

/*Route::get('danh-muc-san-pham-hang/{type}',[
	'as'=>'danhmucsphang',
	'uses'=>'PageController@getDanhmucSpHang'
]);*/
Route::get('danh-muc-san-pham-hang/{type}',[
	'as'=>'danhmucsphang',
	'uses'=>'PageController@getDanhmucSpHang'
]);

Route::get('danh-muc-san-pham-hangsx/{type}',[
	'as'=>'danhmuchsx',
	'uses'=>'PageController@getDanhmucSpHsx'
]);

Route::get('chi-tiet-san-pham/{id}',[
	'as'=>'chitietsanpham',
	'uses'=>'PageController@getChitiet'
]);

Route::post('chi-tiet-san-pham/{id}',[
	'as'=>'chitietsanpham',
	'uses'=>'PageController@postComment'
]);

Route::get('san-pham-moi',[
	'as'=>'sp_new',
	'uses'=>'PageController@getSpNew'
]);

Route::get('san-pham-giam-gia',[
	'as'=>'sp_sale',
	'uses'=>'PageController@getSpSale'
]);

Route::get('lien-he',[
	'as'=>'lienhe',
	'uses'=>'PageController@getLienHe'
]);

Route::post('lien-he',[
	'as'=>'lienhe',
	'uses'=>'PageController@postLienHe'
]);

Route::get('bao-hanh',[
	'as'=>'baohanh',
	'uses'=>'PageController@getBaoHanh'
]);

Route::post('bao-hanh',[
	'as'=>'baohanh',
	'uses'=>'PageController@postBaoHanh'
]);

Route::post('tes-st',[
	'as'=>'tesst',
	'uses'=>'PageController@postTesst'
]);

Route::get('tes-st',[
	'as'=>'tesst',
	'uses'=>'PageController@getTesst'
]);


Route::get('gioi-thieu',[
	'as'=>'gioithieu',
	'uses'=>'PageController@getGioiThieu'
]);

Route::get('tin-tuc',[
	'as'=>'tintuc',
	'uses'=>'PageController@getNews'
]);

Route::get('chi-tiet-tin/{id}',[
	'as'=>'chitiettin',
	'uses'=>'PageController@getChitietNews'
]);

Route::get('gio-hang',[
	'as'=>'giohang',
	'uses'=>'PageController@getGiohang'
]);

Route::get('add-to-cart/{id}',[
	'as'=>'themgiohang',
	'uses'=>'PageController@getAddtoCart'
]);

Route::get('del-cart/{id}',[
	'as'=>'xoagiohang',
	'uses'=>'PageController@getDelItemCart'
]);

Route::get('Save-Item-List-Cart/{id}/{qty}',[
	'as'=>'capnhatgiohang',
	'uses'=>'PageController@getUpdateItemCart'
]);

Route::get('dat-hang',[
	'as'=>'dathang',
	'uses'=>'PageController@getCheckout'
]);

Route::post('update-cart',[
	'as'=>'updatecart',
	'uses'=>'PageController@updateCart'
]);


Route::post('dat-hang',[
	'as'=>'dathang',
	'uses'=>'PageController@postCheckout'
]);

//
Route::get('dathang',[
	'as'=>'dathang',
	'uses'=>'PageController@getCheckout'
]);

Route::post('dathang',[
	'as'=>'dathang',
	'uses'=>'PageController@postCheckout'
]);
//

Route::get('dang-nhap',[
	'as'=>'login',
	'uses'=>'PageController@getLogin'
]);

Route::post('dang-nhap',[
	'as'=>'login',
	'uses'=>'PageController@postLogin'
]);

Route::get('dang-ky',[
	'as'=>'sigin',
	'uses'=>'PageController@getSigin'
]);

Route::post('dang-ky',[
	'as'=>'sigin',
	'uses'=>'PageController@postSigin'
]);

Route::get('dang-xuat',[
	'as'=>'logout',
	'uses'=>'PageController@postLogout'
]);

Route::get('search',[
	'as'=>'search',
	'uses'=>'PageController@getSearch'
]);
Route::group(['prefix'=>'admin','middleware'=>'admin'],function(){
	Route::group(['prefix'=>'layout'],function(){
		Route::get('trangchu',[
		'as'=>'trangchu',
		'uses'=>'AdminController@getIndex']);

		Route::get('profile',[
		'as'=>'thong-tin-ca-nhan',
		'uses'=>'AdminController@getProfile']);
	});
		Route::group(['prefix'=>'danhmuc'],function(){
		//admin/danhmuc/danhsach
		Route::get('danhsach','DanhMucController@getDanhSach');

		Route::get('edit/{id}','DanhMucController@getEdit');
		Route::post('edit/{id}','DanhMucController@postEdit');

		Route::get('add','DanhMucController@getAdd');
		Route::post('add','DanhMucController@postAdd');

		Route::get('delete/{id}','DanhMucController@getDelete');
	});

		Route::group(['prefix'=>'loaisp'],function(){
		//admin/loaisp/danhsach
		Route::get('danhsach','LoaiSpController@getDanhSach');

		Route::get('edit/{id}','LoaiSpController@getEdit');
		Route::post('edit/{id}','LoaiSpController@postEdit');

		Route::get('add','LoaiSpController@getAdd');
		Route::post('add','LoaiSpController@postAdd');

		Route::get('delete/{id}','LoaiSpController@getDelete');
	});

		Route::group(['prefix'=>'sanpham'],function(){
		//admin/sanpham/danhsach
		Route::get('danhsach','ProductController@getDanhSach');

		Route::get('edit/{id}','ProductController@getEdit');
		Route::post('edit/{id}','ProductController@postEdit');

		Route::get('add','ProductController@getAdd');
		Route::post('add','ProductController@postAdd');
		// Route::get('delete/{id}','ProductController@getDelete');
		Route::get('huy','ProductController@getHuy');
		Route::post('huy/{id}','ProductController@postHuy');

		// Route::get('xuat-excel','ProductController@xuatExcel');
		Route::get('xuat-excel','ProductController@xuatExcel')->name('xuatexcel');

	
	});

		Route::group(['prefix'=>'comment'],function(){
		//admin/sanpham/danhsach
		Route::get('delete/{id}/{id_product}','CommentController@getDelete');
		Route::post('chi-tiet-san-pham/{id}','CommentController@postAdd');
	});

		Route::group(['prefix'=>'slide'],function(){
		//admin/slide/danhsach
		Route::get('danhsach','SlideController@getDanhSach');

		Route::get('edit/{id}','SlideController@getEdit');
		Route::post('edit/{id}','SlideController@postEdit');

		Route::get('add','SlideController@getAdd');
		Route::post('add','SlideController@postAdd');

		Route::get('delete/{id}','SlideController@getDelete');
	});

		Route::group(['prefix'=>'lienhe'],function(){
		//admin/lienhe/danhsach
		Route::get('danhsach','LienheController@getDanhSach');
		Route::get('chitietlienhe/{id}','LienheController@getChitiet');
		Route::get('delete/{id}','LienheController@getDelete');
	});

		Route::group(['prefix'=>'hangsanxuat'],function(){
		//admin/nhacungcap/danhsach
		Route::get('danhsach','HangSanXuatController@getDanhSach');

		Route::get('edit/{id}','HangSanXuatController@getEdit');
		Route::post('edit/{id}','HangSanXuatController@postEdit');

		Route::get('add','HangSanXuatController@getAdd');
		Route::post('add','HangSanXuatController@postAdd');

		Route::get('delete/{id}','HangSanXuatController@getDelete');
	});

			Route::group(['prefix'=>'nhacungcap'],function(){
		//admin/nhacungcap/danhsach
		Route::get('danhsach','SupplierController@getDanhSach');

		Route::get('edit/{id}','SupplierController@getEdit')->name('ncc');

		Route::post('edit/{id}','SupplierController@postEdit')->name('ncc');

		Route::get('add','SupplierController@getAdd');
		Route::post('add','SupplierController@postAdd');

		Route::get('delete/{id}','SupplierController@getDelete');


	/*	//
		Route::get('danhsach','NccController@getDanhSach');

		Route::get('edit/{id}','NccController@getEdit')->name('ncc');

		Route::post('edit/{id}','NccController@postEdit')->name('ncc');

		Route::get('add','NccController@getAdd');
		Route::post('add','NccController@postAdd');

		Route::get('delete/{id}','NccController@getDelete');
		//*/
	});

			Route::group(['prefix'=>'khachhang'],function(){
		//admin/khachhang/danhsach
		Route::get('danhsach','CustomerController@getDanhSach');

		Route::get('edit/{id}','CustomerController@getEdit');
		Route::post('edit/{id}','CustomerController@postEdit');

		Route::get('add','CustomerController@getAdd');
		Route::post('add','CustomerController@postAdd');

		Route::get('delete/{id}','CustomerController@getDelete');
	});


		Route::group(['prefix'=>'tintuc'],function(){
		//admin/tintuc/danhsach
		Route::get('danhsach','TintucController@getDanhSach');

		Route::get('edit/{id}','TintucController@getEdit');
		Route::post('edit/{id}','TintucController@postEdit');

		Route::get('add','TintucController@getAdd');
		Route::post('add','TintucController@postAdd');

		Route::get('delete/{id}','TintucController@getDelete');
	});

		Route::group(['prefix'=>'user'],function(){
		//admin/user/danhsach
		Route::get('danhsach','UserController@getDanhSach');

		Route::get('edit/{id}','UserController@getEdit');
		Route::post('edit/{id}','UserController@postEdit');

		Route::get('add','UserController@getAdd');
		Route::post('add','UserController@postAdd');
		
		Route::get('delete/{id}','UserController@getDelete');
	});

		Route::group(['prefix'=>'nhanvien'],function(){
		//admin/nhanvien/danhsach
		Route::get('danhsach','EmployeesController@getDanhSach');

		Route::get('edit/{id}','EmployeesController@getEdit');
		Route::post('edit/{id}','EmployeesController@postEdit');

		Route::get('add','EmployeesController@getAdd');
		Route::post('add','EmployeesController@postAdd');
		
		Route::get('delete/{id}','EmployeesController@getDelete');
	});

		Route::group(['prefix'=>'bill'],function(){
		//admin/bill/
		Route::get('donhang','BillController@getDanhSach');
		Route::get('chitietdon/{id}','BillController@getChitiet');
		Route::get('ban','BillController@getBan');
		Route::post('ban/{id}','BillController@postBan');
		Route::get('search',[
			'as'=>'search-admin',
			'uses'=>'BillController@getSearch'
		]);
		Route::get('huy','BillController@getHuy');
		Route::post('huy/{id}','BillController@postHuy');

		//
		Route::get('xac-nhan-don-hang/{id}','BillController@xacnhanDH')->name('xac.nhan.DH');
		Route::get('lay-hang/{id}','BillController@layHang')->name('lay.nhan.DH');
		Route::get('van-chuyen/{id}','BillController@vanChuyen')->name('van.chuyen');
		Route::get('hoan-tat/{id}','BillController@hoanTat')->name('hoan.tat.DH');

		Route::get('kiemtra','BillController@kiemtra')->name('kiemtra');
		//
		Route::get('thong-ke-bao-cao','BillController@TKBC');
		Route::get('thong-ke-doanh-thu','BillController@TKDT');
		//'as'=>'TKBC',
		//'uses'=>'BillController@TKBC'
		//]);
		//
		//Route::get('doanhthu','BillController@getDoanhThu');
		//

	});

		Route::group(['prefix'=>'bill-import'],function(){
		//admin/bill-import/
		Route::get('danhsach','ImportBillController@getDanhSach');
		Route::get('chitietdon/{id}','ImportBillController@getChitiet');
		Route::get('ban','ImportBillController@getBan');
		Route::post('ban/{id}','ImportBillController@postBan');

		Route::get('huy','ImportBillController@getHuy');
		Route::post('huy/{id}','ImportBillController@postHuy');
	});

	Route::group(['prefix'=>'ajax'],function(){
			Route::get('loaisp/{id_type}','AjaxController@getLoaiSp');
		});

});

