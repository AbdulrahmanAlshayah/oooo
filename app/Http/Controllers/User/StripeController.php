<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StripeController extends Controller
{
    public function StripeOrder(Request $request){



        \Stripe\Stripe::setApiKey('sk_test_51LwhBPJ0iLxopWChpaNgKCyoDWB3p1EX1JbnJwvGXtSgAeelrrr7l5S8GnDml6xyn3nCpMCBUOfAgkWbV6SQu4wZ005cKwRKcp');
    
    
        $token = $_POST['stripeToken'];
        $charge = \Stripe\Charge::create([
          'amount' => 999*100,
          'currency' => 'usd',
          'description' => 'Easy Online Store',
          'source' => $token,
          'metadata' => ['order_id' => '6735'],
        ]);
    
        dd($charge);
    
    
    
    
        } // end method 
    
}
