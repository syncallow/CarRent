<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Car extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'cars';
    protected $guarded = false;

    public function orders() {
        return $this->hasMany(Order::class);
    }

    public function getCurrentOrder(){
        $today = Carbon::today();

        return $this->hasMany(Order::class)
            ->whereDate('book_start_date', '<=', $today)
            ->whereDate('book_end_date', '>=', $today)
            ->latest('created_at')
            ->first();
    }

}
