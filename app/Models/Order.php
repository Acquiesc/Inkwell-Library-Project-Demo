<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table = 'orders';

    public $primarykey = 'id';

    public $timestamps = true;

    public function calculateFees()
    {
        if($this->checked_in_date == null) {
            $dueDate = $this->due_date;
            $currentDate = now()->startOfDay();
    
            if ($currentDate->isAfter($dueDate)) {
                $daysOverdue = $currentDate->diffInDays($dueDate);
                $total_fees_accrued = number_format(($daysOverdue * 0.25), 2);
                $this->days_overdue = $daysOverdue;
                $this->total_fees_accrued = $total_fees_accrued;
            } else {
                $this->days_overdue = 0;
                $this->total_fees_accrued = 0.00;
            }

            $this->total_fees_due = number_format(($this->total_fees_accrued - $this->total_fees_paid), 2);

            $this->save();
        }
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function book()
    {
        return $this->belongsTo('App\Models\Book');
    }

    public function feePaymentLogs()
    {
        return $this->hasMany('App\Models\FeePaymentLog');
    }
}
