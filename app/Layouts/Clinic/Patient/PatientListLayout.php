<?php

namespace App\Layouts\Clinic\Patient;

use App\Http\Filters\LastNamePatient;
use Orchid\Platform\Http\Filters\CreatedFilter;
use Orchid\Platform\Http\Filters\SearchFilter;
use Orchid\Platform\Http\Filters\StatusFilter;
use Orchid\Platform\Layouts\Table;
use Orchid\Platform\Platform\Fields\TD;

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
            //CreatedFilter::class,
        ];
    }

    /**
     * @return array
     */
    public function fields() : array
    {
        return [
            TD::name('last_name')
                ->title('Last name')
                ->setRender(function ($patient) {
                return '<a href="' . route('dashboard.clinic.patient.edit',
                        $patient->id) . '">' . $patient->last_name . '</a>';
            }),

            TD::name('first_name')
                ->title('First Name'),

            TD::name('phone')
                ->title('Phone'),

            TD::name('email')
                ->title('Email'),

            TD::name('created_at')
                ->title('Date of publication'),
        ];
    }
}
