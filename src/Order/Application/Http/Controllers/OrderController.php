<?php

namespace Monolith\Order\Application\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function getMyOrders(Request $request)
    {
        $user = $request->user();

        return $user->orders;
    }
}
