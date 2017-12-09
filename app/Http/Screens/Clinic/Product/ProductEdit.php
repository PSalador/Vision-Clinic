<?php

namespace App\Http\Screens\Clinic\Product;

use App\Http\Layouts\Clinic\Patient\AppointmentListLayout;
use App\Http\Layouts\Clinic\Patient\EditPatient;
use App\Http\Layouts\Clinic\Patient\EditTablePatient;
use App\Core\Models\Patient;
use App\Http\Layouts\Clinic\Patient\InvoiceListLayout;
use App\Http\Layouts\Clinic\Patient\PatientFirstRows;
use App\Http\Layouts\Clinic\Patient\PatientSecondRows;
use Orchid\Platform\Facades\Alert;
use Orchid\Platform\Screen\Layouts;
use Orchid\Platform\Screen\Link;
use Orchid\Platform\Screen\Screen;

class ProductEdit extends Screen
{
    /**
     * Display header name
     *
     * @var string
     */
    public $name = 'Product card';

    /**
     * Display header description
     *
     * @var string
     */
    public $description = 'Product';

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

        return [
            'patient'     => $patient,
            'appointment' => $patient->appointments()->orderBy('updated_at')->paginate(10),
            'invoice'     => $patient->invoices()->orderBy('updated_at')->paginate(10),
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
            Link::name('Записать на приём')->method('save'),
            Link::name('Выписать счёт')->method('save'),
            Link::name('Сохранить')->method('save'),
            Link::name('Удалить')->method('remove'),
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
                'Колонка 2' => [
                    PatientFirstRows::class,
                ],
                'Колонка 1' => [
                    PatientSecondRows::class,
                ],
            ]),
            Layouts::columns([
                'Колонка 1' => [
                    AppointmentListLayout::class
                ],
                'Колонка 2' => [
                    InvoiceListLayout::class
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

}
