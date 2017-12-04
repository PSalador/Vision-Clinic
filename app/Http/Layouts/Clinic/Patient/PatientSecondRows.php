<?php

namespace App\Http\Layouts\Clinic\Patient;

use Orchid\Platform\Layouts\Rows;

class PatientSecondRows extends Rows
{
    /**
     * @return array
     */
    public function fields() : array
    {
        return [
            'street' => [
                'tag'      => 'input',
                'type'     => 'text',
                'name'     => 'patient.street',
                'max'      => 255,
                'required' => true,
                'title'    => 'street',
                'help'     => 'Article title',
            ],
            'city'   => [
                'tag'      => 'input',
                'type'     => 'text',
                'name'     => 'patient.city',
                'max'      => 255,
                'required' => true,
                'title'    => 'city',
                'help'     => 'Article title',
            ],
            'email'  => [
                'tag'      => 'input',
                'type'     => 'email',
                'name'     => 'patient.email',
                'max'      => 255,
                'required' => true,
                'title'    => 'email',
                'help'     => 'Article title',
            ],

        ];
    }

}

