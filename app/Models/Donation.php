<?php
namespace App\Http\Controllers;
namespace App\Models;

use App\Models\Category;
use App\Models\Donation_form;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    use HasFactory;
    protected $fillable = [
        'DonationName',
        'description',
        'image',
        'amount_needed',
        'amount_donated'
    ];
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function donationform()
    {
        return $this->hasMany(Donation_form::class);
    }
}
