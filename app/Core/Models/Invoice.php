<?php

namespace App\Core\Models;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'invoice';

    /**
     * @var array
     */
    protected $fillable = [
        'invoice_date',
        'invoice_due',
        'invoice_status',
        'ship_date',
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

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function detail(){
        return $this->hasOne(ProductRebase::class);
    }

}
