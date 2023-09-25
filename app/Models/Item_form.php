<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item_form extends Model
{

use HasFactory;
protected $fillable = [
    'user_id',
    'item_id',
    'volunteerName',
    'volunteerEmail',
    'volunteerPhone',
    'volunteerAddress',
    'description',
    'status',
    'image',
];
public function item()
{
    return $this->belongsTo(Item::class);
}
}
