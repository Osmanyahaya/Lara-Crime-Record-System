<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Investigation extends Model
{
    use HasFactory;
    protected $guarded = [];

     public function caseTable() {
        return $this->belongsTo(CaseTable::class);
    }
}
