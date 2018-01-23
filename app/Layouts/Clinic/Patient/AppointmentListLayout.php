<?php

namespace App\Layouts\Clinic\Patient;

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
            'appointment_time' => [
                'name'   => 'Time',
                'width'  => '200px',
                'action' => function ($appointment) {
                    return $appointment->appointment_time->toDateString();
                },
            ],
            'appointment_type' => [
                'name'   => 'Type',
                'width'  => '200px',
                'action' => function ($appointment) {
                    $types = config('appointment.types');
                    $message = isset($types[$appointment->appointment_type]['text']) ? $types[$appointment->appointment_type]['text'] : '';
                    return $message;
                },
            ],
            'doctor_notes'     => 'Notes',
        ];
    }
}
