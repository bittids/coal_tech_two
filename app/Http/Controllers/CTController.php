<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Storage;

class CTController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   	public function index()
    {
        return view('ct_form');
    }

    
    public function post_form(Request $request)
    {
    	$arr_new_info = array(
    			"product_name" => $request->product_name,
				"quantity" => $request->quantity,
    			"prince" => $request->price,
    			"curr_time" => time()
    	);
/*    	$arr_new_info = array(
    			"product_name" => "asdf",
    			"quantity" => 5,
    			"price" => 7,
    			"curr_time" => time()
    	);
*/
// echo "new info =";   	 
//    	print_r($arr_new_info);
// echo "<br>";   	
 //   	$json_info = json_encode($arr_new_info);
		$bool_file_exists = Storage::exists('coal_tech.txt');
		if ($bool_file_exists)
		{
//			echo "file exists<br>";
			$str_contents = Storage::get('coal_tech.txt');
			$obj_info = json_decode($str_contents);
			$arr_info = array();
			foreach($obj_info as $key=>$obj_item)
			{
				$arr_info[$key] = (array)$obj_item;
			} 
//			echo "info from disk = ";
//			print_r($arr_info);
//			echo "<br>";
			$arr_info[] = $arr_new_info;
			$json_info = json_encode($arr_info);
//			echo "info from disk and new info = ";
//			echo $json_info;
//			echo "<br><br>";
			Storage::put('coal_tech.txt', $json_info);				
			return $arr_info;
		}
		else 
		{
//			echo "file does not exist\n<br>";
			$json_info = json_encode(array(0 => $arr_new_info));
//			print_r($json_info);
			Storage::put('coal_tech.txt', $json_info);				
			return $json_info;
		}
    }
  
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
