<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    use HasFactory;

    protected $table = 'section';

    protected $primaryKey = 'SectionID';

    protected $fillable = [
        'SectionName',
        'CourseCode',
    ];

    // Define the relationship with Student
    public function students()
    {
        return $this->hasMany(Student::class, 'SectionID');
    }

    public function getStudentCount()
    {
        return $this->students()->count();
    }
}

