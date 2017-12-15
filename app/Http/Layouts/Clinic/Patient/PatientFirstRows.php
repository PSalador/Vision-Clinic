<?php

namespace App\Http\Layouts\Clinic\Patient;

use Orchid\Platform\Layouts\Rows;

class PatientFirstRows extends Rows
{
    /**
     * @return array
     */
    public function fields() : array
    {
        return [
            'first_name' => [
                'tag'      => 'input',
                'type'     => 'text',
                'name'     => 'patient.first_name',
                'max'      => 255,
                'required' => true,
                'title'    => 'First name',
            ],
            'last_name'  => [
                'tag'      => 'input',
                'type'     => 'text',
                'name'     => 'patient.last_name',
                'max'      => 255,
                'required' => true,
                'title'    => 'Last name',
            ],
            'phone'      => [
                'tag'      => 'input',
                'type'     => 'text',
                'name'     => 'patient.phone',
                'max'      => 12,
                'required' => true,
                'title'    => 'Phone',
            ],
        ];
    }

}

