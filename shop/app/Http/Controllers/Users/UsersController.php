<?php

namespace App\Http\Controllers\Users;
use Auth;
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
class UsersController extends Controller
{

  public function index(){
    // if (Auth::user()) {
    // $name=Auth::user()->name;
    // }
    // else
    // $name=[];
    
    return view('users.index',[
      // 'name'=>$name,
      'link'=>'link',
      'items'=>Items::where('Status','active')->paginate(10),
      'Groups'=>Group::get(),
      'statuses'=>Status::get(),
      'Types'=>Type::get()
     
    ]);
}
public function show($id){
  
  return view('users.show',[
  
    'item'=>Items::find($id),
    'statuses'=>Status::get(),
    'Types'=>Type::get(),
    'Groups'=>Group::get()
]);
}

  
    public function search(Request $request){
   
      // if($request->name && $request->status && $request->group  && $request->type){
      //   $items=Items::where('name','like','%'.$request->name. '%')->where('Group', $request->group)->where('Type', $request->type)->where('Status',$request->status)->get();
      // }

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
    // if($request->status){
    //     $items=Items::where('Status',$request->status)->get();
    //   }
    //   if($request->group){
    //     $items=Items::where('Group', $request->group)->get();
    //   }
    //   if($request->type){
    //     $items=Items::where('Type', $request->type)->get();
    //   }

     




    return view('users.search',[
        'p'=>$request->name,
        'items'=> $items,
        'statuses'=>Status::get(),
        'Types'=>Type::get(),
        'Groups'=>Group::get()
    
    ]);
    
  }

  
  public function category(Request $request ){
 
    
          if ($request->status) {
           $items=Items::where('Status',$request->status)->get();
           $p=$request->status;
          }
          if ($request->group) {
            $items=Items::where('Group',$request->group)->get();
            $p=$request->group;
           }
           if ($request->type) {
            $items=Items::where('Type',$request->type)->get();
            $p=$request->type;
           }
           if ($request->owner) {
            $items=Items::where('Bowner',$request->owner)->get();
            $p=$request->owner;
           }
           
    return view('users.index',[
      'p'=>$p,
      'items'=> $items,
      'statuses'=>Status::get(),
      'Types'=>Type::get(),
      'Groups'=>Group::get()
     
    ]);
}
}
