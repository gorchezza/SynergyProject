<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PassportData extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $table = 'passport_data';
    protected $guarded = [];
}
