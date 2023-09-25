<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service_form extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'phone',
        'description',
        'service_id',
        'user_id',
        'time',
        'Date',
    ];
    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}
