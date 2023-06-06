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

    public function calculateDaysOverdue()
    {
        $dueDate = $this->due_date;
        $currentDate = now()->startOfDay();

        if ($currentDate->isAfter($dueDate)) {
            $daysOverdue = $currentDate->diffInDays($dueDate);
            $this->days_overdue = $daysOverdue;
        } else {
            $this->days_overdue = 0; // Set to 0 if not overdue
        }

        $this->save();
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function book()
    {
        return $this->belongsTo('App\Models\Book');
    }
}
