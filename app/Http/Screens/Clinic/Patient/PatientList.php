<?php

namespace App\Http\Screens\Clinic\Patient;

use App\Http\Layouts\Clinic\Patient\PatientListLayout;
use App\Core\Models\Patient;
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
            'patients' => Patient::paginate()
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
            Link::name('Создать новую запись')->method('create'),
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
        ];
    }

    /**
     * @return \Illuminate\Http\RedirectResponse
     */
    public function create()
    {
        return redirect()->route('dashboard.clinic.patient.create');
    }
}
