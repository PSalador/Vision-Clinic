<?php

namespace App\Http\Layouts\Clinic\Patient;

use App\Http\Widgets\AppointmentTypes;
use Orchid\Platform\Layouts\Rows;

class Appointment extends Rows
{
    /**
     * Views
     *
     * @return array
     */
    public function fields(): array
    {
        return [
            'appointment_time' => [
                'tag'      => 'datetime',
                'name'     => 'appointment_time',
                'required' => true,
                'title'    => 'Time',
            ],
            'appointment_type' => [
                'tag'      => 'relationship',
                'name'     => 'appointment_type',
                'required' => true,
                'title'    => 'avatar',
                'handler'  => AppointmentTypes::class,
            ],
            'doctor_notes' => [
                'tag'      => 'textarea',
                'name'     => 'doctor_notes',
                "rows"      => 10,
                'required' => true,
                'title'    => 'Doctor notes',
                'help'     => 'What did the patient complain about?',
            ],
        ];
    }
}
