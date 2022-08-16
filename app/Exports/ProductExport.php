<?php
namespace App\Exports;

use App\Product;
use Maatwebsite\Excel\Concerns\FromCollection;

use Maatwebsite\Excel\Concerns\WithHeadings;

class ProductExport implements FromCollection,WithHeadings
{
    public function collection()
    {
        return Product::select('id','name','unit_price','promotion_price','guarantee','origin')->get();
    }
    
    public function headings() : array {
    	return 
    	[
    		'STT',
    		'Tên sản phẩm',
    		'Giá',
    		'Giá khuyến mãi',
    		'Bỏa hành',
    		'Xuất xứ'
    		
    	];
    }
}
?>