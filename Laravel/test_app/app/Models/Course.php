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
<<<<<<< Updated upstream
        'TotalCredits',
        'SubjectID',
=======
        'CourseCode',
>>>>>>> Stashed changes
    ];

    public $timestamps = true;
    // const CREATED_AT = 'created_at';
    // const UPDATED_AT = 'updated_at';
}
