<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class YearLevel extends Model
{
    use HasFactory;

    protected $table = 'yearlevel';

    protected $primaryKey = 'YearLevelID';

    protected $fillable = [
        'YearLevelName',
    ];
}

