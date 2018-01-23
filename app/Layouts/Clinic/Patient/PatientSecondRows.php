<?php

namespace App\Layouts\Clinic\Patient;

use Orchid\Platform\Fields\Field;
use Orchid\Platform\Layouts\Rows;

class PatientSecondRows extends Rows
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
                ->name('patient.street')
                ->max(255)
                ->required()
                ->title('Street'),

            Field::tag('input')
                ->type('text')
                ->name('patient.city')
                ->max(255)
                ->required()
                ->title('City'),

            Field::tag('input')
                ->type('input')
                ->name('patient.email')
                ->max(255)
                ->required()
                ->title('Email'),
        ];
    }

}

