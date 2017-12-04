<?php

namespace App\Http\Composer;

use Orchid\Platform\Kernel\Dashboard;

class MenuComposer
{

    /**
     * MenuComposer constructor.
     *
     * @param Dashboard $dashboard
     */
    public function __construct(Dashboard $dashboard)
    {
        $this->menu = $dashboard->menu;
    }


    /**
     *
     */
    public function compose()
    {

        $this->menu->add('Main', [
            'slug'   => 'vision-clinic',
            'icon'   => 'icon-chemistry',
            'active' => 'dashboard.clinic.*',
            'route'  => '#',
            'label'  => 'Vision Clinic',
            'childs' => true,
            'main'   => true,
            'sort'   => 0,
        ]);

        $this->menu->add('vision-clinic', [
            'slug'      => 'vision-clinic-patient',
            'icon'      => 'icon-people',
            'active'    => 'dashboard.clinic.*',
            'route'     => route('dashboard.clinic.patient.list'),
            'label'     => 'Patient List',
            'groupname' => 'Vision Clinic',
        ]);

        $this->menu->add('vision-clinic', [
            'slug'   => 'vision-clinic-product',
            'icon'   => 'icon-bag',
            'active' => 'dashboard.clinic.*',
            'route'  => route('dashboard.clinic.product.list'),
            'label'  => 'Product List',
        ]);

        $this->menu->add('vision-clinic', [
            'slug'   => 'vision-clinic-invoice',
            'icon'   => 'icon-wallet',
            'active' => 'dashboard.clinic.*',
            'route'  => '#',
            'label'  => 'Invoice Screen',
        ]);


    }
}
