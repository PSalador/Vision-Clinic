<?php

namespace App\Http\Filters;

use Orchid\Platform\Filters\Filter;
use Illuminate\Database\Eloquent\Builder;

class LastNamePatient extends Filter
{

    /**
     * @var array
     */
    public $parameters = [
        'last_name'
    ];

    /**
     * @var bool
     */
    public $display = true;

    /**
     * @var bool
     */
    public $dashboard = true;

    /**
     * @param Builder $builder
     *
     * @return Builder
     */
    public function run(Builder $builder): Builder
    {
        return $builder->where('last_name', 'like', '%'. $this->request->get('last_name').'%');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function display()
    {
        return view('filters/patient/last_name',[
            'request' => $this->request,
        ]);
    }
}
