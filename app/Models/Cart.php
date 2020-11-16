<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class Cart extends Model
{
    static function getCartItems($user_id) {
        $carts = DB::table('carts')
          ->join('items', 'item_id', '=', 'items.ID')
          ->where('carts.user_id', '=', $user_id)
          ->select('items.*', 'carts.count')
          ->get();
        
        return $carts;
    }
}
