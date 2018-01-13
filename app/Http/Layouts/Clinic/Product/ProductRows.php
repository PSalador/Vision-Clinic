<?php

namespace App\Http\Layouts\Clinic\Product;

use Orchid\Platform\Fields\Field;
use Orchid\Platform\Layouts\Rows;

class ProductRows extends Rows
{

    /**
     * @return array
     * @throws \Orchid\Platform\Exceptions\TypeException
     */
    public function fields() : array
    {
        return [

            Field::tag('input')
                ->type('text')
                ->name('product.name')
                ->max(255)
                ->required()
                ->title('Name'),

            Field::tag('input')
                ->type('number')
                ->name('product.msrp')
                ->required()
                ->title('Price')
                ->help('Manufacturer\'s Suggested Retail Price'),

            Field::tag('input')
                ->type('text')
                ->name('product.category')
                ->max(255)
                ->required()
                ->title('Category'),

            Field::tag('textarea')
                ->name('product.descriptions')
                ->required()
                ->title('Descriptions')
                ->row(10),

            Field::tag('picture')
                ->name('product.image')
                ->required()
                ->title('Descriptions')
                ->width(300)
                ->height(150)
                ->title('Image'),
        ];
    }

}

