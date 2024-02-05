<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $table = "customers";

    const CREATED_AT = null;
    const UPDATED_AT = null;

    protected $fillable = [
        'firstname',
        'middlename',
        'lastname',
        'civil_status',
        'barangay',
        'street',
        'municipality',
        'date_of_birth',
    ];
}
