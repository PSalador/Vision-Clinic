<?php

namespace App\Http\Layouts\Clinic\Patient;

use Orchid\Platform\Layouts\Columns;

class EditPatient extends Columns
{
    /**
     * @return array
     */
    public function layout() : array
    {
        return [
            'Колонка 2' => [
                PatientFirstRows::class,
                //NewsTable::class,
            ],
            'Колонка 1' => [
                PatientSecondRows::class,
                //NewsRows::class,
            ],
        ];
    }
}
