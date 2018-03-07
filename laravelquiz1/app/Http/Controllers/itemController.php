<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\items;
use App\categories;

class itemController extends Controller
{
    //
    public function index()
    {
    	//$somethings=DB::table('somethings')->get();
    	//$somethings=\App\something::all();
    	$show=items::all(); //something itu model nya
    	return $show;
    }
    public function show($id)
    {
    	$category=App\categories::find($id);

    	$item = $category->items;

    	return $item;
    	
    }

   public function destroy($id){
   		 $show=items::find($id);
 
   		 $success=$show->delete();

   		 if(!$success){return "failed";}

    	 else{return "success";}
    	 
    }

    public function add(Request $request)
    {
    	$newCategory = ['name' => $request->name,
    					'category_id'=> $request->category_id,
    					'price'=>$request->price,
    					'stock'=>$request->stock,

    					];
        $newCategory = $this->category->create($newCategory);
        
        var_dump($newCategory);
    }
    
    public function update(Request $request,items $data){

    	/*$item=items::find($id);
    	$item->name=Input::get('name');
    	$item->category_id=Input::get('category_id');
    	$item->price=Input::get('price');
    	$item->stock=Input::get('stock');

    	$item->save();

    	return 'success';*/
    	$data->update($request->all());

    	return "success";

    }

}
