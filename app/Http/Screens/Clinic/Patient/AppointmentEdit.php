<?php

namespace App\Http\Screens\Clinic\Patient;

use App\Http\Layouts\Clinic\Patient\EditPatient;
use App\Core\Models\Patient;
use Orchid\Platform\Facades\Alert;
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
            'create'  => [
                'displayName' => 'Сохранить',
                'description' => 'Создать новую запись',
                'method'      => 'save',
            ],
            'remove'  => [
                'displayName' => 'Удалить',
                'description' => 'Создать новую запись',
                'method'      => 'remove',
            ],
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
            EditPatient::class,
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
