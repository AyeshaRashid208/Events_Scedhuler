<?php

namespace App\Imports;

use App\Product;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class AbbreviationsImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Product([
                
                'name'    => $row['name'],
                'name2'    => $row['name2'],
                'description_short'    => $row['description_short'],
                'description_supplier'    => $row['description_supplier'],
                'brand'    => $row['brand'],
                'kind_of_product'    => $row['kind_of_product'],
                'clasification_code'    => $row['clasification_code'],
                'active'    => $row['active'],
                'base_currency'    => $row['base_currency'],
                'rotation'    => $row['rotation'],
                'characteristic1'    => $row['characteristic1'],
                'characteristic2'    => $row['characteristic2'],
                'characteristic3'    => $row['characteristic3'],
                'characteristic4'    => $row['characteristic4'],
                'characteristic5'    => $row['characteristic5'],
                'list_price'    => $row['list_price'],
                'price1'    => $row['price1'],
                'price2'    => $row['price2'],
                'price3'    => $row['price3'],
                'price4'    => $row['price4'],
                'price5'    => $row['price5'],
                'idERP'     => $row['iderp'],
        ]);
    }
}
