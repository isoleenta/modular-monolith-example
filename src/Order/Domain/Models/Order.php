<?php

namespace Monolith\Order\Domain\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'user_id',
        'total',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
