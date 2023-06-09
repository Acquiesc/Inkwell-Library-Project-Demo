<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeePaymentLog extends Model
{
    use HasFactory;

    protected $table = 'fee_payment_logs';

    protected $primaryKey = 'id';

    public function order()
    {
        return $this->belongsTo('App\Models\Order');
    }
}
