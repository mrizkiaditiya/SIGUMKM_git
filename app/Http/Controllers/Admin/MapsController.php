<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\FormMapRequest;
use App\Boxmap;

class MapsController extends Controller
{
    //
    public function index()
    {

        $boxmap = Boxmap::all();

        $dataMap  = Array();
        $dataMap['type']='FeatureCollection';
        $dataMap['features']=array();
       foreach($boxmap as $value){
                $feaures = array();
                $feaures['type']='Feature';
                $geometry = array("type"=>"Point","coordinates"=>[$value->lng, $value->lat]);
                $feaures['geometry']=$geometry;
                $properties=array('title'=>$value->title,"description"=>$value->description);
                $feaures['properties']= $properties;
                array_push($dataMap['features'],$feaures);

       }
        return View('layouts.mapsumkm')->with('dataArray',json_encode($dataMap));
   
        
    }
    public function store(FormMapRequest $request)
    {
       $validated = $request->validated();
       Boxmap::create($request->all());
       return redirect('/admin/mapsumkm')->with('success',"Add map success!");

    }
}
