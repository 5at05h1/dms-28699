<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Item;
use App\Models\Favorite;

class ItemController extends Controller
{
    public function index() {
        $items = Item::orderBy('id', 'desc')->get();

        return view('index', [
            'items' => $items
        ]);
    }

    public function view($item_id) {
        $item = Item::findOrFail($item_id);
        $fav_item = 0;
        
        if (Auth::check()) {
            $fav = Favorite::where('user_id', Auth::id())->where('item_id', $item_id)->first();
            $fav_item = count($fav);
        }

        return view('item/item', [
            'item' => $item,
            'fav_item' => $fav_item,
        ]);
    }
}
