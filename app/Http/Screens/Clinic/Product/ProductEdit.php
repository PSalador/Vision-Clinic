<?php

namespace App\Http\Screens\Clinic\Product;

use App\Http\Layouts\Clinic\Patient\EditPatient;
use App\Http\Layouts\Clinic\Patient\EditTablePatient;
use App\Core\Models\Patient;
use Orchid\Platform\Facades\Alert;
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
            'appointment' => [
                'displayName' => 'Записать на приём',
                'description' => 'Записать на приём',
                'method'      => 'save',
            ],
            'invoice'     => [
                'displayName' => 'Выписать счёт',
                'description' => 'Выписать счёт',
                'method'      => 'save',
            ],
            'save'        => [
                'displayName' => 'Сохранить',
                'description' => 'Создать новую запись',
                'method'      => 'save',
            ],
            'remove'      => [
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
            EditTablePatient::class,
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
