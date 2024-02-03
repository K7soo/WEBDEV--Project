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
        'StudentNo',
        'StudLastName',
        'StudFirstName',
        'StudMiddleName',
        'Suffix',
        'Gender',
        'StatusID',
        'AccountID',
        'YearLevelID',
        'CourseID',
        'SectionID',
    ];

    public function status()
    {
        return $this->belongsTo(Status::class, 'StatusID');
    }

    // Define the relationship with Account
    public function account()
    {
        return $this->belongsTo(Account::class, 'AccountID');
    }

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
    public function yearlevels()
    {
        return $this->belongsTo(YearLevel::class, 'YearLevelID');
    }
}
