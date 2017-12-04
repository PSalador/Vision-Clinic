<?php

namespace App\Http\Layouts\Clinic\Patient;

use Orchid\Platform\Layouts\Table;

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
            'invoice_date'   => 'invoice_date',
            'invoice_due'    => 'invoice_due',
            'invoice_status' => 'invoice_status',
            'ship_date'      => 'ship_date',

        ];
    }
}
