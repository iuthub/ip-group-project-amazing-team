<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Items;
use App\Status;
use App\Group;
use App\Type;
use App\item_status;
use App\item_group;
use App\item_type;
use Gate;
class StatusController extends Controller
{
    public function index(){

        return view('admin.items.status',[
            'statuses'=>Status::get(),
            'Types'=>Type::get(),
            'Groups'=>Group::get()
        ]);
    }

    public function search(Request $request){

        

        if($request->name){ 
          $items =   Items::query()
          ->where('Name','like','%'.$request->name. '%')
          ->orWhere('Group', 'like', '%' . $request->name . '%') 
          ->orWhere('Type', 'like', '%' . $request->name . '%') 
          ->orWhere('Status', 'like', '%' . $request->name . '%') 
          ->orWhere('Rtype', 'like', '%' . $request->name . '%') 
          ->orWhere('Acr', 'like', '%' . $request->name . '%') 
          ->orWhere('Desciption', 'like', '%' . $request->name . '%') 
          ->orWhere('Oplan', 'like', '%' . $request->name . '%') 
          ->orWhere('Fplan', 'like', '%' . $request->name . '%') 
          ->orWhere('Bowner', 'like', '%' . $request->name . '%') 
          ->orWhere('ABowner', 'like', '%' . $request->name . '%') 
          ->orWhere('Oowner', 'like', '%' . $request->name . '%') 
          ->orWhere('AOowner', 'like', '%' . $request->name . '%') 
          ->orWhere('Innovation', 'like', '%' . $request->name . '%') 
          ->orWhere('AIowner', 'like', '%' . $request->name . '%') 
          ->orWhere('Hostedb', 'like', '%' . $request->name . '%') 
          ->orWhere('Region', 'like', '%' . $request->name . '%') 
          ->orWhere('Owninc', 'like', '%' . $request->name . '%') 
          ->orWhere('Countryu', 'like', '%' . $request->name . '%') 
          ->orWhere('Launchd', 'like', '%' . $request->name . '%') 
          ->orWhere('Inactived', 'like', '%' . $request->name . '%') 
          ->orWhere('Retired', 'like', '%' . $request->name . '%') 
          ->orWhere('Canceld', 'like', '%' . $request->name . '%') 
          ->orWhere('help', 'like', '%' . $request->name . '%') 


          ->get();
        
          
        }
        if($request->status){
            $items=Items::where('Status',$request->status)->get();
          }
          if($request->group){
            $items=Items::where('Group', $request->group)->get();
          }
          if($request->type){
            $items=Items::where('Type', $request->type)->get();
          }

         
   



        return view('admin.items.status',[
            'items'=> $items,
            'statuses'=>Status::get(),
            'Types'=>Type::get(),
            'Groups'=>Group::get()
        
        ]);
        
    }
    
}
