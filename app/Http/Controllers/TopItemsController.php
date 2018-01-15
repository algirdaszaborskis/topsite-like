<?php

namespace App\Http\Controllers;

use App\TopItem;
use Illuminate\Http\Request;

class TopItemsController extends Controller
{
	public function create()
    {
    	$category_id = request('category_id');
        return view('items.create', compact('category_id'));

    }

    public function store(Request $request)
    {
        $items_item = TopItem::create($request->all());
        // $items_item->user_id = Auth::id();
        // $items_item->save();
        return view('items.show', compact('items_item'));
    }

    public function show(TopItem $items_item)
    {
        return view('items.show', compact('items_item'));
    }

    public function edit(TopItem $items_item)
    {
        
        return view('items.edit', compact('items_item'));
        
    }

    public function update(Request $request, TopItem $items_item)
    {
        $items_item->update($request->all());
        return view('items.show', compact('items_item'));
        
    }

    public function destroy(TopItem $items_item)
    {
        $items_item->destroy();
        $items_categories = TopCategory::all();
        return view('categories.index', compact('items_categories'));
    }
}
