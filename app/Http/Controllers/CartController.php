<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;

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

  public function add(Request $request, $item_id) {
      if (Auth::check()) {
          Cart::buy(Auth::id(), $item_id, $request->input('unit'));
          
          return redirect('/cart');
      } else {
          return redirect('/login');
      }
  }

  function delete(Request $request) {
    if (Auth::check()) {
        $cart = new Cart;
        $cart->where('user_id', Auth::id())
          ->where('item_id', $request->input('item_id'))
          ->delete();
    }

    return redirect('/cart');
  }
}
