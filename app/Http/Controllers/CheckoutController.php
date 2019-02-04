<?php

namespace App\Http\Controllers;

use Mail;
use Cart;
use Stripe\Charge;
use Stripe\Stripe;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index()
    {
        if(Cart::content()->count() == 0)
        {
            toastr()->info('Your cart is still empty. Add a product to cart.');
            return redirect()->back();
        }
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

        toastr()->success('Purchase successful! Check your email for verification.');

        Cart::destroy();

        Mail::to(request()->stripeEmail)->send(new \App\Mail\PurchaseSuccessful);

        return redirect('/');
    }
}
