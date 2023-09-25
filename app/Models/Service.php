<?php
namespace App\Http\Controllers;
namespace App\Models;

use App\Models\Category;
use App\Models\Service_form;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'ServiceName',
        'description',
        'image',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function serviceform()
    {
        return $this->hasMany(service_form::class);
    }
}
