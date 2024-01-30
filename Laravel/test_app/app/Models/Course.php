<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $table = 'course';

    protected $primaryKey = 'CourseID';

    protected $fillable = [
        'CourseName',
        'CourseCode',
        'TotalCredits',
        'SubjectID',
    ];

    // Define the relationship with Subject
    public function subject()
    {
        return $this->belongsTo(Subject::class, 'SubjectID');
    }

    // Define the relationship with Student
    public function students()
    {
        return $this->hasMany(Student::class, 'CourseID');
    }

    public function getStudentsList()
    {
        return $this->students()->pluck('StudFirstName', 'StudentID');
    }
}
