<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Cart;

class CartController extends Controller
{
  function index() {
      if (Auth::check()) {
          $carts = Cart::getCartItems(Auth::id());

          return view('cart/index', [
              'carts' => $carts,
          ]);
      } else {
          return redirect('/login');
      }
  }
}
