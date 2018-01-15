<?php

namespace App\Http\Controllers;

use App\TopCategory;
use Illuminate\Http\Request;

class TopCategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $top_categories = TopCategory::all();
        return view('categories.index', compact('top_categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('categories.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $top_category = TopCategory::create($request->all());
        // $top_category->user_id = Auth::id();
        // $top_category->save();
        return view('categories.show', compact('top_category'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Topcategory  $topcategory
     * @return \Illuminate\Http\Response
     */
    public function show(TopCategory $topcategory)
    {
        $top_category = $topcategory;
        return view('categories.show', compact('top_category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Topcategory  $topcategory
     * @return \Illuminate\Http\Response
     */
    public function edit(TopCategory $top_category)
    {
        
        return view('categories.edit', compact('top_category'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Topcategory  $topcategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TopCategory $top_category)
    {
        $top_category->update($request->all());
        return view('categories.show', compact('top_category'));
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Topcategory  $topcategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(TopCategory $top_category)
    {
        $top_items = $top_category->top_items();
        if(!empty($top_items)) {
            foreach ($top_items as $item) {
                $item->destroy();
            }
        }
        $top_category->destroy();
        $top_categories = TopCategory::all();
        return view('categories.index', compact('top_categories'));
    }
}
