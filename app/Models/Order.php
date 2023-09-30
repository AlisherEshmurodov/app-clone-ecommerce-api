<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        "user_id",
        "payment_type_id",
        "delivery_method_id",
        "address",
        "comments",
        "sum",
        "products",
    ];

    public function paymentType()
    {
        return $this->belongsTo(PaymentType::class);
    }

    public function deliveryMethod()
    {
        return $this->belongsTo(DeliveryMethod::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }


}
