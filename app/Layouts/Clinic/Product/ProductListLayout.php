<?php

namespace App\Layouts\Clinic\Product;

use Orchid\Platform\Layouts\Table;

class ProductListLayout extends Table
{

    /**
     * @var string
     */
    public $data = 'products';

    /**
     * @return array
     */
    public function fields() : array
    {
        return [
            'image'  => [
                'name'   => 'Image',
                'action' => function ($product) {
                    return '<a href="' . route('dashboard.clinic.product.edit',
                            $product->id) . '"><img height="100px" src="' . $product->image . '"></a>';
                },
            ],
            'name'         => 'Name',
            'msrp'         => 'MSRP',
            'category'     => 'Category',
            'descriptions' => 'Descriptions',
        ];
    }
}
