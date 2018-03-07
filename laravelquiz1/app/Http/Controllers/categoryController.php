<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\categories;

class categoryController extends Controller
{
    //
    public function index()
    {
    	//$somethings=DB::table('somethings')->get();
    	//$somethings=\App\something::all();
    	$show=categories::all(); //something itu model nya
    	return $show;
    }
    public function show($id)
    {

    	/*yg get by id nya json cuman item doang kan ya?

			$category=App\categories::find($id);

    		$item = $category->items;

    		return $item;
    	*/
    	$show=categories::find($id);

    	return $show;
    }

    public function destroy($id){
   		$show=categories::find($id);
 
  		$success=$show->delete();

   		if(!$success){return "failed";}

    	else{return "success";}
    	 
    }

    public function add(Request $request)
    {
    	$newCategory = ['name' => $request->name,];
        $newCategory = $this->category->create($newCategory);

    
        var_dump($newCategory);
    }

    public function update(Request $request,categories $data){

    	$data->update($request->all());

    	return "success";

    }

}


