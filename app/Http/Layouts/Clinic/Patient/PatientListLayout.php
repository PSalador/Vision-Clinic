<?php

namespace App\Http\Layouts\Clinic\Patient;

use App\Http\Filters\LastNamePatient;
use Orchid\Platform\Http\Filters\CreatedFilter;
use Orchid\Platform\Http\Filters\SearchFilter;
use Orchid\Platform\Http\Filters\StatusFilter;
use Orchid\Platform\Layouts\Table;

class PatientListLayout extends Table
{

    /**
     * @var string
     */
    public $data = 'patients';

    /**
     * HTTP data filters
     *
     * @return array
     */
    public function filters() : array
    {
        return [
            LastNamePatient::class,
            SearchFilter::class,
            //StatusFilter::class,
            CreatedFilter::class,
        ];
    }

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
