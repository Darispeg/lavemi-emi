<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{

    public function index()
    {
        $categories =  Category::paginate(10);
        return view('admin.categories.index', compact('categories'));
    }

    public function create()
    {
        return view('admin.categories.create');
    }


    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'slug' => 'required|unique:categories'
        ]);

        $category = Category::create($request->all());

        if($request->file('file')){
            $url = Storage::put('categories', $request->file('file'));

            $category->image()->create([
                'url' => $url
            ]);
        }

        return redirect()->route('admin.categories.edit', $category)->with('info', 'La categoría se creó con éxito');
    }

    public function edit(Category $category)
    {
        return view('admin.categories.edit', compact('category'));
    }

    public function update(Request $request, Category $category)
    {
        $request->validate([
            'name' => 'required',
            'slug' => "required|unique:categories,slug,$category->id"
        ]);

        $category->update($request->all());

        if ($request->file('file')) {
            $url = Storage::put('categories', $request->file('file'));

            if ($category->image) {
                Storage::delete($category->image->url);

                $category->image->update([
                    'url' => $url
                ]);
            }else{
                $category->image()->create([
                    'url' => $url
                ]);
            }
        }

        return redirect()->route('admin.categories.edit', $category)->with('info', 'La categoría se actualizo con exitó');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        if($category->image != null){
            Storage::delete([$category->image->url]);
        }

        $category->delete();

        return redirect()->route('admin.categories.index')->with('info', 'La Categoría se elimino con exitó');
    }
}
