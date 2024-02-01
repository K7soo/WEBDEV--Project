<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $table = 'student';

    protected $primaryKey = 'StudentID';

    protected $fillable = [
        'StudLastName',
        'StudFirstName',
        'StudMiddleName',
        'Suffix',
        'YearLevelID',
        'CourseID',
        'SectionID',
        'Status',
    ];

    // Define the relationship with Course
    public function course()
    {
        return $this->belongsTo(Course::class, 'CourseID');
    }

    // Define the relationship with Section
    public function section()
    {
        return $this->belongsTo(Section::class, 'SectionID');
    }

    // Define the relationship with YearLevel
    public function yearlevel()
    {
        return $this->belongsTo(YearLevel::class, 'YearLevelID');
    }
}
