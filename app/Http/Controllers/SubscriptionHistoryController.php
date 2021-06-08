<?php

namespace App\Http\Controllers;

use App\Models\Subscription_history;
use Illuminate\Http\Request;

class SubscriptionHistoryController extends Controller
{
    function subscribe_history(){
        return view('subscription_history/index');
    }

}
