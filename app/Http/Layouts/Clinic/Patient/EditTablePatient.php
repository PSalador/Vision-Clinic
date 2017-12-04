<?php

namespace App\Http\Layouts\Clinic\Patient;

use Orchid\Platform\Layouts\Columns;

class EditTablePatient extends Columns
{
    /**
     * @return array
     */
    public function layout() : array
    {
        return [
            'Колонка 1' => [
                AppointmentListLayout::class
            ],
            'Колонка 2' => [
                InvoiceListLayout::class
            ],
        ];
    }
}
