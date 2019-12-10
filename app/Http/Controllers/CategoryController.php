<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
  public function addCategory(Request $request){
    if($request->isMethod('post')){
      $data = $request->all();
      //echo "<pre>";print_r($data);die;
      $category= new Category;
      $category->name= $data['category_name'];
      $category->description= $data['description'];
      $category->save();
      return redirect('/admin/view-categories')->with('flash_message_success', 'Categoria creata con successo!'); ;

    }
      return view('admin.categories.add_category');
  }
  
  public function viewCategories(Request $request){
    $categories= Category::get();
    $categories= json_decode(json_encode($categories));
    return view('admin.categories.view_categories')->with(compact('categories'));
  }
}