<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class ItemController extends Controller
{
    public function index() {
        $items = Item::orderBy('id', 'desc')->get();

        return view('index', [
            'items' => $items
        ]);
    }

    public function view() {
        $item = Item::findOrFail(2);

        return view('item/item', [
            'item' => $item
        ]);
    }
}
