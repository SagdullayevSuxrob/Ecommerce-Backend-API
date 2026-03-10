<?php

namespace App\Models;

use Arr;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class PaymentType extends Model
{
    use HasFactory, HasTranslations;

    protected $fillable = [
        'name'
    ];

    public array $translatable = ["name"];

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
