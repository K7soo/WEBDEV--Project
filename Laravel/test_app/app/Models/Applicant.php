<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Applicant extends Model
{
    use HasFactory;

    protected $table = 'applicant';

    protected $primaryKey = 'ApplicantID';

    protected $fillable = [
        'AppLastName',
        'AppFirstName',
        'AppMiddleName',
        'Suffix',
        'Birthday',
        'Gender',

        'ContactsID',
        'EducID',
        'AccountID',   
   
        'ApplicantChoiceID',
        'ApplicantTypeID',
        'ApprovalID',
    ];

    public function contacts()
    {
        return $this->belongsTo(Contacts::class, 'ContactsID');
    }

    public function education()
    {
        return $this->belongsTo(education::class, 'EducID');
    }

    public function account()
    {
        return $this->belongsTo(Account::class, 'AccountID');
    }


    // Define the relationship with ApplicantChoice
    public function applicantChoice()
    {
        return $this->belongsTo(ApplicantChoice::class, 'ApplicantChoiceID');
    }

    // Define the relationship with ApplicantType
    public function applicantType()
    {
        return $this->belongsTo(ApplicantType::class, 'ApplicantTypeID');
    }

    // Define the relationship with Approval
    public function approval()
    {
        return $this->belongsTo(Approval::class, 'ApprovalID');
    }
}
