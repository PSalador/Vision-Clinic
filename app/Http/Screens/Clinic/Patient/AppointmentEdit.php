<?php

namespace App\Http\Screens\Clinic\Patient;

use App\Core\Models\Patient;
use App\Http\Layouts\Clinic\Patient\PatientFirstRows;
use App\Http\Layouts\Clinic\Patient\PatientSecondRows;
use Orchid\Platform\Facades\Alert;
use Orchid\Platform\Screen\Layouts;
use Orchid\Platform\Screen\Link;
use Orchid\Platform\Screen\Screen;

class AppointmentEdit extends Screen
{
    /**
     * Display header name
     *
     * @var string
     */
    public $name = 'PatientList Edit';

    /**
     * Display header description
     *
     * @var string
     */
    public $description = 'Testing Screen News';

    /**
     * Query data
     *
     * @param null $patient
     *
     * @return array
     */
    public function query($patient = null) : array
    {
        return [
            'patient' => $patient,
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
            Link::name('Save')->method('save'),
            Link::name('Remove')->method('remove'),
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
            Layouts::columns([
                'Left column' => [
                    PatientFirstRows::class,
                ],
                'Right column' => [
                    PatientSecondRows::class,
                ],
            ]),
        ];
    }

    /**
     * @param Patient $patient
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function save(Patient $patient)
    {
        $patient->fill($this->request->get('patient'))->save();
        Alert::info('Message');
        return redirect()->route('dashboard.clinic.patient.list');
    }

    /**
     * @param Patient $patient
     *
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function remove(Patient $patient){

        $patient->delete();
        Alert::info('Message');
        return redirect()->route('dashboard.clinic.patient.list');
    }

}
