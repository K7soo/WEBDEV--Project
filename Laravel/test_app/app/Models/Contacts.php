<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contacts extends Model
{
    use HasFactory;

    protected $table = 'contacts';

    protected $primaryKey = 'ContactID';

    protected $fillable = [
        'Address',
        'Email',
        'ContactNo',
        'Parents/Guardian',
        'P_ContactInfo',
    ];

    // Define the relationship with Applicant
    public function applicants()
    {
        return $this->hasMany(Applicant::class, 'ContactID');
    }
}
