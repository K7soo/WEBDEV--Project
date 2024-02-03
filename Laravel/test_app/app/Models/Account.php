<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;

    protected $table = 'account';

    protected $primaryKey = 'AccountID';

    protected $fillable = [
        'Email',
        'Password',
        'accountType',
    ];

    public function students()
    {
        return $this->hasOne(Student::class, 'AccountID', 'Email', 'Password', 'accountType');
    }

    public function applicants()
    {
        return $this->hasOne(Applicant::class, 'AccountID');
    }
}
