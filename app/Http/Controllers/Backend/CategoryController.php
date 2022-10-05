<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function CategoryView(){
        
        $category = Category::latest()->get();
        return view('backend.category.category_view',compact('category'));
    }

    public function CategoryStore(Request $request)
    {
        $request->validate([
            'category_name_en' => 'required',
            'category_name_ar' => 'required',
            'category_icon' => 'required',

        ],[
            'category_name_en.required' => 'Input Category English Name',
            'category_name_ar.required' => 'Input Brand Arabic Name',
        ]);

        Category::insert([
            'category_name_en' => $request->category_name_en,
            'category_name_ar' => $request->category_name_ar,
            'category_slug_en' => strtolower(str_replace('','-',$request->category_name_en)),
            'category_slug_ar' => str_replace('','-',$request->category_name_ar),
            'category_icon' => $request->category_icon,
        ]);

        $notification = array(
            'message' => 'Category Inserted Successfully',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }// end method

    public function CategoryEdit($id){
        
        $category = Category::findOrFail($id);
        return view('backend.Category.category_edit',compact('category'));
    }

    public function CategoryUpdate(Request $request){
        $cat_id = $request->id;

        $request->validate([
            'category_name_en' => 'required',
            'category_name_ar' => 'required',
            'category_icon' => 'required',

        ],[
            'category_name_en.required' => 'Input Category English Name',
            'category_name_ar.required' => 'Input Brand Arabic Name',
        ]);

        Category::findOrFail($cat_id)->update([
            'category_name_en' => $request->category_name_en,
            'category_name_ar' => $request->category_name_ar,
            'category_slug_en' => strtolower(str_replace('','-',$request->category_name_en)),
            'category_slug_ar' => str_replace('','-',$request->category_name_ar),
            'category_icon' => $request->category_icon,
        ]);

        $notification = array(
            'message' => 'Category Updated Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('all.Category')->with($notification);
    }
}
