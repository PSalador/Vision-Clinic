<?php

namespace App\Http\Layouts\Clinic\Patient;

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
                'title'    => 'Время записи',
            ],
            'appointment_type' => [
                'tag'      => 'input',
                'type'     => 'text',
                'name'     => 'appointment_type',
                'max'      => 255,
                'required' => true,
                'title'    => 'Тип приёма',
                'help'     => 'Article title',
            ],
            'doctor_notes' => [
                'tag'      => 'textarea',
                'name'     => 'doctor_notes',
                "rows"      => 10,
                'required' => true,
                'title'    => 'Показания врача',
                'help'     => 'На что жаловался пациент?',
            ],
        ];
    }
}
