<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\UUID;

class Asset extends Model
{
    use HasFactory, UUID;

    protected $fillable = [
        'name',
        'serial_no',
        'type',
        'model'
    ];

    protected $primaryKey = 'id';
    protected $keyType = 'string';
    public $incrementing = false;
}
