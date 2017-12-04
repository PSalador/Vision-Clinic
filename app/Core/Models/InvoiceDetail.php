<?php

namespace App\Core\Models;

use Illuminate\Database\Eloquent\Model;

class InvoiceDetail extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'invoice_detail';

    /**
     * @var array
     */
    protected $fillable = [
        'quantity',
        'unit_price',
        'invoice_id',
        'product_id',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function product(){
      return $this->hasOne(Product::class);
    }
}
