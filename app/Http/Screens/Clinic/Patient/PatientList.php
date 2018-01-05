<?php

namespace App\Http\Screens\Clinic\Patient;

use App\Http\Filters\LastNamePatient;
use App\Http\Layouts\Clinic\Patient\PatientFirstRows;
use App\Http\Layouts\Clinic\Patient\PatientListLayout;
use App\Core\Models\Patient;
use App\Http\Layouts\Clinic\Patient\PatientSecondRows;
use Illuminate\Http\Request;
use Orchid\Platform\Screen\Layouts;
use Orchid\Platform\Screen\Link;
use Orchid\Platform\Screen\Screen;

class PatientList extends Screen
{
    /**
     * Display header name
     *
     * @var string
     */
    public $name = 'PatientList Screen';

    /**
     * Display header description
     *
     * @var string
     */
    public $description = 'PatientList Screen';

    /**
     * Query data
     *
     * @return array
     */
    public function query() : array
    {
        return [
            'patients' => Patient::filtersApply([
                LastNamePatient::class,
            ])->orderBy('id','Desc')->paginate()
        ];
    }

    /**
     * Button commands
     *
     * @return array
     */
    public function commandBar() : array
    {
        return [
            Link::name('Add new patient')
                ->modal('create')
                ->title('Add a new patient')
                ->method('create'),
        ];
    }

    /**
     * Views
     *
     * @return array
     */
    public function layout() : array
    {
        return [
            PatientListLayout::class,

            // Modals windows
            Layouts::modals([
                'create' => [
                    PatientFirstRows::class,
                    PatientSecondRows::class,
                ],
            ]),
        ];
    }

    /**
     * @param         $method
     * @param Request $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function create($method, Request $request)
    {
        $patient = Patient::create($request->get('patient'));

        return redirect()->route('dashboard.clinic.patient.edit',$patient->id);
    }
}
