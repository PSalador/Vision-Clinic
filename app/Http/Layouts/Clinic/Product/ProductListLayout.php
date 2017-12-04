<?php

namespace App\Http\Layouts\Clinic\Product;

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
                'name'   => 'image',
                'action' => function ($product) {
                    return '<a href="' . route('dashboard.clinic.product.edit',
                            $product->id) . '"><img height="100px" src="' . $product->image . '"></a>';
                },
            ],
            'name'         => 'name',
            'msrp'         => 'msrp',
            'category'     => 'category',
            'descriptions' => 'descriptions',
        ];
    }
}
