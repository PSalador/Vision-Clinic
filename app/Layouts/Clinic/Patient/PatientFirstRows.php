<?php

namespace App\Layouts\Clinic\Patient;

use Orchid\Platform\Fields\Field;
use Orchid\Platform\Layouts\Rows;

class PatientFirstRows extends Rows
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
                ->name('patient.first_name')
                ->max(255)
                ->required()
                ->title('First name'),

            Field::tag('input')
                ->type('text')
                ->name('patient.last_name')
                ->max(255)
                ->required()
                ->title('Last name'),

            Field::tag('input')
                ->type('text')
                ->name('patient.phone')
                ->max(12)
                ->required()
                ->title('Phone')
                ->mask('(999) 999-9999'),
        ];
    }

}

