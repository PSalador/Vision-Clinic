<?php

namespace App\Http\Filters;

use Orchid\Platform\Fields\Field;
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
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|mixed|void
     *
     * @throws \Orchid\Platform\Exceptions\TypeException
     */
    public function display()
    {
        return Field::tag('input')
            ->type('text')
            ->name('last_name')
            ->value($this->request->get('search'))
            ->placeholder(trans('dashboard::common.search_posts'))
            ->title('Last Name')
            ->maxlength(200)
            ->autocomplete('off')
            ->hr(false);
    }
}
