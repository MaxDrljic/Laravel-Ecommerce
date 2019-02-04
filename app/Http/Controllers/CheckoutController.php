<?php

namespace App\Http\Controllers;

use Cart;
use Stripe\Charge;
use Stripe\Stripe;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index()
    {
        return view('checkout');
    }

    public function pay()
    {
        Stripe::setApiKey(env('STRIPE_SECRET_KEY'));

        $charge = Charge::create([
            'amount'        => Cart::total() * 100,
            'currency'      => 'usd',
            'description'   => 'test selling functionality!',
            'source'        => request()->stripeToken
        ]);

        dd('Your cart was charged successfully!');
    }
}
