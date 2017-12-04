<?php

namespace App\Core\Models;

use Illuminate\Database\Eloquent\Model;

class ProductRebase extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'product_rebase';

    /**
     * @var array
     */
    protected $fillable = [
        'product_id',
        'start',
        'end',
        'rebate',
    ];
}
