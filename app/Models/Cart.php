<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $table = 'carts';

    public $primarykey = 'id';

    public $timestamps = true;

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'User_ID', 'id');
    }

    public function book()
    {
        return $this->belongsTo('App\Models\Book', 'Book_ID', 'id');
    }
}
