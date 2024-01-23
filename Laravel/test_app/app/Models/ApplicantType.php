<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApplicantType extends Model
{
    use HasFactory;

    protected $table = 'applicanttype';

    protected $primaryKey = 'ApplicantTypeID';

    protected $fillable = [
        'TypeOfStudent',
    ];

    // Define the relationship with Applicant
    public function applicants()
    {
        return $this->hasMany(Applicant::class, 'ApplicantTypeID');
    }
}
