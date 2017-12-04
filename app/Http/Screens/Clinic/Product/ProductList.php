<?php

namespace App\Http\Screens\Clinic\Product;

use App\Http\Layouts\Clinic\Product\ProductListLayout;
use App\Core\Models\Product;
use Orchid\Platform\Screen\Screen;

class ProductList extends Screen
{
    /**
     * Display header name
     *
     * @var string
     */
    public $name = 'Product Screen';

    /**
     * Display header description
     *
     * @var string
     */
    public $description = 'Product Screen';

    /**
     * Query data
     *
     * @return array
     */
    public function query() : array
    {
        return [
            'products' => Product::paginate()
        ];
    }

    /**
     * Button commands
     *
     * @return array
     */
    public function commandBar() : array
    {
        return [
            'create'  => [
                'displayName' => 'Создать',
                'description' => 'Создать новую запись',
                'method'      => 'create',
            ]
        ];
    }

    /**
     * Views
     *
     * @return array
     */
    public function layout() : array
    {
        return [
            ProductListLayout::class,
        ];
    }

    /**
     * @return \Illuminate\Http\RedirectResponse
     */
    public function create()
    {
        return redirect()->route('dashboard.clinic.product.create');
    }
}
