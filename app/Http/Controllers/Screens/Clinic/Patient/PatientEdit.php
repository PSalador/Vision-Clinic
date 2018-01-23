<?php

namespace App\Http\Screens\Clinic\Patient;

use App\Layouts\Clinic\Patient\Appointment;
use App\Layouts\Clinic\Patient\AppointmentListLayout;
use App\Core\Models\Patient;
use App\Layouts\Clinic\Patient\ChartsLayout;
use App\Layouts\Clinic\Patient\InvoiceListLayout;
use App\Layouts\Clinic\Patient\PatientFirstRows;
use App\Layouts\Clinic\Patient\PatientSecondRows;
use App\Http\Requests\AppointmentRequest;
use Orchid\Platform\Facades\Alert;
use Orchid\Platform\Screen\Layouts;
use Orchid\Platform\Screen\Link;
use Orchid\Platform\Screen\Screen;

class PatientEdit extends Screen
{
    /**
     * Display header name
     *
     * @var string
     */
    public $name = 'Patient card';

    /**
     * Display header description
     *
     * @var string
     */
    public $description = 'There is a record of the patient\'s medical history and the treatment prescribed for him';

    /**
     * Query data
     *
     * @param Patient $patient
     *
     * @return array
     */
    public function query($patient = null) : array
    {
        $patient = is_null($patient) ? new Patient() : $patient;

        $charts = [
            [
                'title'  => "Some Data",
                'values' => [25, 40, 30, 35, 8, 52, 17, -4],
            ],
            [
                'title'  => "Another Set",
                'values' => [25, 50, -10, 15, 18, 32, 27, 14],
            ],
            [
                'title'  => "Yet Another",
                'values' => [15, 20, -3, -15, 58, 12, -17, 37],
            ],
        ];


        return [
            'patient'     => $patient,
            'appointment' => $patient->appointments()->orderByDesc('updated_at')->paginate(10),
            'invoice'     => $patient->invoices()->orderByDesc('updated_at')->paginate(10),
            'charts' => $charts,
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
            Link::name('Appointments')
                ->modal('Appointments')
                ->title('Appointments')
                ->method('createAppointments'),
            //Link::name('Write out a bill')->method('save'),
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
                'Right column2' => [
                    ChartsLayout::class,
                ],
            ]),
            Layouts::tabs([
                'Appointments' => [
                    AppointmentListLayout::class
                ],
                'Invoices' => [
                    InvoiceListLayout::class
                ],
            ]),
            // Modals windows
            Layouts::modals([
                'Appointments' => [
                    Appointment::class,
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
    public function remove(Patient $patient)
    {
        $patient->delete();
        Alert::info('Message');

        return redirect()->route('dashboard.clinic.patient.list');
    }

    /**
     * @param Patient            $patient
     * @param AppointmentRequest $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function createAppointments(Patient $patient, AppointmentRequest $request){
        $appointent = new \App\Core\Models\Appointment($request->all());
        $patient->appointments()->save($appointent);
        Alert::info('Message');
        return redirect()->back();
    }

}
