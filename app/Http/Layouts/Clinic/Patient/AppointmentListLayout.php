<?php

namespace App\Http\Layouts\Clinic\Patient;

use Orchid\Platform\Layouts\Table;

class AppointmentListLayout extends Table
{

    /**
     * @var string
     */
    public $data = 'appointment';

    /**
     * @return array
     */
    public function fields() : array
    {
        return [
            'appointment_time' => 'appointment_time',
            'appointment_type' => 'appointment_type',
            'doctor_notes'     => 'doctor_notes',
        ];
    }
}
