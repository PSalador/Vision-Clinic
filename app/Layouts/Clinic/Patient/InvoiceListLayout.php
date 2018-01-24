<?php

namespace App\Layouts\Clinic\Patient;

use Orchid\Platform\Http\Filters\SearchFilter;
use Orchid\Platform\Layouts\Table;
use Orchid\Platform\Platform\Fields\TD;

class InvoiceListLayout extends Table
{

    /**
     * @var string
     */
    public $data = 'invoice';

    /**
     * @return array
     */
    public function fields() : array
    {
        return [
            TD::name('invoice_date')
                ->title('Date'),
            TD::name('invoice_due')
                ->title('Due'),
            TD::name('invoice_status')
                ->title('Status')
                ->width('200px')
                ->setRender(function ($appointment) {

                    if ($appointment->invoice_status) {
                        return "<span class='icon-check'>";
                    }

                    return "<span class='icon-close'>";
                }),
            TD::name('ship_date')
                ->title('Ship Date'),
        ];
    }
}
