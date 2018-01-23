<?php

namespace App\Core\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'product';

    /**
     * @var array
     */
    protected $fillable = [
        'name',
        'msrp',
        'descriptions',
        'image',
        'category',
    ];


    /**
     * @param $key
     *
     * @return mixed
     */
    public function getContent($key){
        return $this->getAttribute($key);
    }

}
