<?php

namespace App\Http\Layouts\Clinic\Patient;

use Orchid\Platform\Http\Filters\SearchFilter;
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
            'invoice_status' => [
                'name'   => 'Status',
                'width'  => '200px',
                'action' => function ($appointment) {

                    if ($appointment->invoice_status) {
                        return "<span class='icon-check'>";
                    }

                    return "<span class='icon-close'>";
                },
            ],


            'ship_date' => 'Ship Date',

        ];
    }
}
