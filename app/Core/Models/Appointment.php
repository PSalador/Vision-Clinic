<?php

namespace App\Core\Models;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'appointment';

    /**
     * @var array
     */
    protected $fillable = [
        'appointment_time',
        'appointment_type',
        'doctor_notes',
        'patient_id',
    ];


    /**
     * @param $key
     *
     * @return mixed
     */
    public function getContent($key){
        return $this->getAttribute($key);
    }


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function patient(){
        return $this->hasOne(Patient::class);
    }

}
