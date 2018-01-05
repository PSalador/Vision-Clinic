<?php

namespace App\Http\Widgets;

use Orchid\Platform\Widget\Widget;

class AppointmentTypes extends Widget {


    /**
     * @var null
     */
    public $query = null;

    /**
     * @var null
     */
    public $key = null;


    /**
     * @return mixed
     */
     public function handler(){
         $data = config('appointment.types');

         if(!is_null($this->key)) {
             foreach ($data as $key => $result) {

                 if ($result['id'] === intval($this->key)) {
                     return $data[$key];
                 }
             }
         }

         return $data;
     }

}
