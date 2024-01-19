<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Approval extends Model
{
    use HasFactory;

    protected $table = 'approval';

    protected $primaryKey = 'ApprovalID';

    protected $fillable = [
        'ApprovalType',
    ];

    // Define the relationship with Applicant
    public function applicants()
    {
        return $this->hasMany(Applicant::class, 'ApprovalID');
    }
}
