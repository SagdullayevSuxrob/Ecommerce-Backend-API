<?php

namespace App\Http\Controllers;

use App\Models\Order;

class StatsController extends Controller
{
    public function ordersCount()
    {
        return $this->response(Order::query()->whereRelation('staus', 'code', 'closed')->count()); 
    }
}
