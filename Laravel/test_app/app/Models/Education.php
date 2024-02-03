<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    use HasFactory;

    protected $table = 'education';

    protected $primaryKey = 'EducID';

    protected $fillable = [
        'Grades',
        'EducAttainment',
        'School'
    ];

    public function applicant()
    {
        return $this->hasOne(Applicant::class, 'EducID');
    }
}