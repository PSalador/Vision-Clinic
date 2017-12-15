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
            'invoice_date'   => 'Date',
            'invoice_due'    => 'Due',
            'invoice_status' => 'Status',
            'ship_date'      => 'Ship Date',

        ];
    }
}
