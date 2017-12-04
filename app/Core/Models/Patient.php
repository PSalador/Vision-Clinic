<?php

namespace App\Core\Models;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'patient';

    /**
     * @var array
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'street',
        'city',
        'phone',
        'email',
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
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function appointments()
    {
        return $this->hasMany(Appointment::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function invoices()
    {
        return $this->hasMany(Invoice::class);
    }
}
