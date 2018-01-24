<?php

namespace App\Layouts\Clinic\Patient;

use Orchid\Platform\Layouts\Table;
use Orchid\Platform\Platform\Fields\TD;

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
            TD::name('appointment_time')
            ->title('Time')
            ->width('200px')
            ->setRender(function ($appointment) {
                return $appointment->appointment_time->toDateString();
            }),

            TD::name('appointment_type')
                ->title('appointment_type')
                ->width('200px')
                ->setRender(function ($appointment) {
                    $types = config('appointment.types');
                    $message = isset($types[$appointment->appointment_type]['text']) ? $types[$appointment->appointment_type]['text'] : '';
                    return $message;
                }),
            TD::name('doctor_notes')
                ->title('Notes')
        ];
    }
}
