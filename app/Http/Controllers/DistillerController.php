<?php

namespace App\Http\Controllers;

use App\Distiller;
use Illuminate\Http\Request;

class DistillerController extends Controller
{
  public function get_distillers(Request $request)
  {
    $distillers = Distiller::all();
    if($distillers){
        return response()->json(["distillers" => $distillers], 200);
    }else{
        return response()->json(["message" => "An error occured."], 404);
    }
  }
  
  public function get_distiller($id)
  {
    $distiller = Distiller::where('id',$id)->first();
    if($distiller){
        return response()->json(["distiller" => $distiller], 200);
    }else{
        return response()->json(["message" => "Distiller not found."], 404);
    }
  }

  public function create_distiller(Request $request)
  {

  }

  public function update_distiller(Request $request, $id)
  {

  }

  public function delete_distiller(Request $request, $id)
  {
    $distiller = Distiller::where('id',$id)->first();
    if($distiller){
        $distiller->delete();
        return response()->json(["message" => "Distiller successfully deleted."], 404);
    }else{
        return response()->json(["message" => "Distiller not found."], 404);
    }
  }

}
