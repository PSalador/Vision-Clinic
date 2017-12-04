<?php

namespace App\Http\Layouts\Clinic\Patient;

use Orchid\Platform\Layouts\Table;

class PatientListLayout extends Table
{

    /**
     * @var string
     */
    public $data = 'patients';

    /**
     * @return array
     */
    public function fields() : array
    {
        return [
            'last_name'  => [
                'name'   => 'Last name',
                'action' => function ($patient) {
                    return '<a href="' . route('dashboard.clinic.patient.edit',
                            $patient->id) . '">' . $patient->last_name . '</a>';
                },
            ],
            'first_name' => 'First Name',
            'phone'      => 'Phone',
            'email'      => 'Email',
            'created_at' => 'Date of publication',
        ];
    }
}
