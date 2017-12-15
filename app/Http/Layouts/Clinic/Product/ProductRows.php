<?php

namespace App\Http\Layouts\Clinic\Product;

use Orchid\Platform\Layouts\Rows;

class ProductRows extends Rows
{
    /**
     * @return array
     */
    public function fields() : array
    {
        return [
            'name'         => [
                'tag'      => 'input',
                'type'     => 'text',
                'name'     => 'product.name',
                'max'      => 255,
                'required' => true,
                'title'    => 'Name',
            ],
            'mrsp'         => [
                'tag'      => 'input',
                'type'     => 'number',
                'name'     => 'product.msrp',
                'required' => true,
                'title'    => 'Price',
                'help'     => 'Manufacturer\'s Suggested Retail Price',
            ],
            'descriptions' => [
                'tag'      => 'textarea',
                'name'     => 'product.descriptions',
                "rows"      => 10,
                'required' => true,
            ],
            'picture' => [
                'tag'      => 'picture',
                'type'     => 'text',
                'name'     => 'product.image',
                'width'    => 300,
                'height'   => 150,
                'required' => true,
                'title'    => 'Image',
            ],
        ];
    }

}

