<?php

namespace App\Http\Controllers;

use App\Model\Category;
use Illuminate\Http\Request;
use App\Http\Resources\CategoryResource;
use Response ;
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return CategoryResource::collection(Category::latest()->get());
    }

  

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $category = Category::create($request->all());
         $category->slug= str_slug($category->name);
         $category->update()  ;
        return 'created'  ;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        return new CategoryResource($category) ;
    }

   

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
       $category->update($request->all());
       $category->slug = str_slug($category->name);
$category->update();


       return 'updated' ;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $category->delete();
            return response(null, Response::HTTP_NO_CONTENT);

    }
}
