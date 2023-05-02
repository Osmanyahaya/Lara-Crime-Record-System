<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class CaseTable extends Model
{
    protected $guarded = [];

    use HasFactory;

    // Relationship To User
    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function category() {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function investigation() {
        return $this->hasOne(Investigation::class, 'case_table_id');
    }

    public static function boot() {
        parent::boot();

        static::creating(function ($model) {
            
            $getToday=CaseTable::whereDate('created_at', Carbon::today())->get();
            $number=count($getToday)+1;
            $model->reference = make_reference_id('Ref/'.date("dmy"), $number);
        });
    }

}
