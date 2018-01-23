<?php

namespace App\Layouts\Clinic\Patient;

use App\Http\Widgets\AppointmentTypes;
use Orchid\Platform\Fields\Field;
use Orchid\Platform\Layouts\Rows;

class Appointment extends Rows
{

    /**
     * @return array
     *
     * @throws \Orchid\Platform\Exceptions\TypeException
     */
    public function fields(): array
    {
        return [

            Field::tag('datetime')
                ->name('appointment_time')
                ->required()
                ->title('Time'),

            Field::tag('relationship')
                ->name('appointment_type')
                ->required()
                ->title('Appointment type')
                ->handler(AppointmentTypes::class),

            Field::tag('textarea')
                ->name('doctor_notes')
                ->rows(10)
                ->required()
                ->title('Doctor notes')
                ->help('What did the patient complain about?'),

        ];
    }
}
