<?php

namespace App\Layouts\Clinic\Patient;

use Orchid\Platform\Layouts\Chart;

class ChartsLayout extends Chart
{

    /**
     * @var string
     */
    public $title = 'DemoCharts';

    /**
     * @var int
     */
    public $height = 150;

    /**
     * Available options:
     * 'bar', 'line', 'scatter',
     * 'pie', 'percentage'
     *
     * @var string
     */
    public $type = 'scatter';

    /**
     * @var array
     */
    public $labels = [
        "12am-3am",
        "3am-6am",
        "6am-9am",
        "9am-12pm",
        "12pm-3pm",
        "3pm-6pm",
        "6pm-9pm",
        "9pm-12am",
    ];

    /**
     * @var string
     */
    public $data = 'charts';
}
