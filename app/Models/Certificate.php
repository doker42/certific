<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certificate extends Model
{
    use HasFactory;

    public const CERT_LINK = 'https://example.com/certificates/';

    protected $fillable = [
        'num',
        'curse',
        'full_name',
        'graduated'
    ];
}
