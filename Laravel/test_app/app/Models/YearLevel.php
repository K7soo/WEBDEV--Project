<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class YearLevel extends Model
{
    use HasFactory;

    protected $table = 'yearlevels';

    protected $primaryKey = 'YearLevelID';

    protected $fillable = [
        'YearLevelName',
    ];

    public function students()
    {
        return $this->hasOne(Student::class, 'YearLevelID', 'YearLevelName');
    }
}

