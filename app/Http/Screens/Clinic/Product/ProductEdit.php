<?php

namespace App\Http\Screens\Clinic\Product;

use App\Core\Models\Product;
use App\Http\Layouts\Clinic\Product\ProductRows;
use Orchid\Platform\Facades\Alert;
use Orchid\Platform\Screen\Link;
use Orchid\Platform\Screen\Screen;

class ProductEdit extends Screen
{
    /**
     * Display header name
     *
     * @var string
     */
    public $name = 'Product card';

    /**
     * Display header description
     *
     * @var string
     */
    public $description = 'Product';

    /**
     * Query data
     *
     * @param Product $product
     *
     * @return array
     */
    public function query($product = null) : array
    {
        return [
            'product' => is_null($product) ? new Product() : $product,
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
            Link::name('Сохранить')->method('save'),
            Link::name('Удалить')->method('remove'),
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
            ProductRows::class,
        ];
    }

    /**
     * @param Product $product
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function save(Product $product)
    {
        $product->fill($this->request->get('product'))->save();
        Alert::info('Message');

        return redirect()->route('dashboard.clinic.product.list');
    }

    /**
     * @param Product $product
     *
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function remove(Product $product)
    {
        $product->delete();
        Alert::info('Message');

        return redirect()->route('dashboard.clinic.product.list');
    }

}
