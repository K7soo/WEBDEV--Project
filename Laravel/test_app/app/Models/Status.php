<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    use HasFactory;

    protected $table = 'status';

    protected $primaryKey = 'StatusID';

    protected $fillable = [
        'Status',
    ];

    public function students()
    {
        return $this->hasOne(Status::class, 'StatusID', 'Status');
    }
}
