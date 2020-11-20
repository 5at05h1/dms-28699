<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Favorite;

class FavoriteController extends Controller
{
    public function add($item_id) {
      if (Auth::check()) {
        $favorite = new Favorite;
        $already = $favorite->where('user_id', Auth::id())->where('item_id', $item_id)->first();

        if ($already) {
          $already->delete();
        } else {
          $favorite->user_id = Auth::id();
          $favorite->item_id = $item_id;
          $favorite->save();
        }

        return redirect('/item/' . $item_id);
      } else {
        return redirect('/login');
      }
    }
}
