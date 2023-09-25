<?php

namespace App\Models;

use App\Models\Donation;
use App\Models\Item;
use App\Models\Service;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'image',
    ];
    public function items()
    {
        return $this->hasMany(Item::class);
    }
    public function services()
    {
        return $this->hasMany(Service::class);
    }
    public function donations()
    {
        return $this->hasMany(Donation::class);
    }
}
