<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApplicantChoice extends Model
{
    use HasFactory;

    protected $table = 'applicantchoice';

    protected $primaryKey = 'ApplicantChoiceID';

    protected $fillable = [
        'CourseID',
    ];

    // Define the relationship with Course
    public function course()
    {
        return $this->belongsTo(Course::class, 'CourseID');
    }

}
