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
class ItemsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.items.index',[
            'items'=>Items::paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { 
        
        if (Gate::denies('Admin')) {
            return redirect()->back()->with(['errors'=>' You do not have administrator rights!!! ']);
    }

        if (Gate::allows('Admin')) {
        
        return view('admin.items.create',[
            'item'=>[],
            'statuses'=>Status::get(),
            'Types'=>Type::get(),
            'Groups'=>Group::get()
        ]);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (Gate::denies('Admin')) {
            return redirect()->back();
        }                                      
        
        $items= new Items();
       if ($request->has('foto1')) {
        $path1=$request->file('foto1')->store('store','public');
       }
       if ($request->has('foto2')) {
        $path2=$request->file('foto2')->store('store','public');
       }
       if ($request->has('foto3')) {
        $path3=$request->file('foto3')->store('store','public');
       }
       if ($request->has('foto4')) {
        $path4=$request->file('foto4')->store('store','public');
       }
       if ($request->has('foto5')) {
        $path5=$request->file('foto5')->store('store','public');
       }
        
      
        
        
       
      
        
        $items->p_id = $request->p_id;
        $items->Name = $request->Name;
        $items->Rtype = $request->Rtype;
        $items->Acr = $request->Acr;
        $items->Status = $request->Status;
        $items->Group = $request->Group;
        $items->Type = $request->Type;
        $items->Desciption = $request->Desciption;
        $items->Stype = $request->Stype;
        $items->Oplan = $request->Oplan;
        $items->Fplan = $request->Fplan;
        $items->Bowner = $request->Bowner;
        $items->ABowner = $request->ABowner;
        $items->Oowner = $request->Oowner;
        $items->AOowner = $request->AOowner;
        $items->Innovation = $request->Innovation;
        $items->AIowner = $request->AIowner;
        $items->Hostedb = $request->Hostedb;
        $items->Region = $request->Region;
        $items->Owninc = $request->Owninc;
        $items->Countryu = $request->Countryu;
        $items->Launchd = $request->Launchd;
        $items->Inactived = $request->Inactived;
        $items->Retired = $request->Retired;
        $items->Canceld = $request->Canceld;
        $items->help = $request->help;
        $items->foto1 = $path1 ?? '';
        $items->foto2 = $path2  ?? '';
        $items->foto3 = $path3  ?? '';
        $items->foto4 = $path4  ?? '';
        $items->foto5 = $path5  ?? '';
        $items->save();
      
     
        
        if ($request->Status) {
            $status=Status::where('name',$request->Status)->first('id');
            $item=Items::where('p_id',$request->p_id)->first('id');
            $item_status= new item_status();
            $item_status->item_id = $item->id;
            $item_status->status_id = $status->id;
            $item_status->save();
        }
        if ($request->Group) {
            $group=Group::where('name',$request->Group)->first('id');
            $item=Items::where('p_id',$request->p_id)->first('id');
            $item_group= new item_group();
            $item_group->item_id = $item->id;
            $item_group->group_id = $group->id;
            $item_group->save();
        }
        if ($request->Type) {
            $type=Type::where('name',$request->Type)->first('id');
            $item=Items::where('p_id',$request->p_id)->first('id');
            $item_type= new item_type();
            $item_type->item_id = $item->id;
            $item_type->type_id = $type->id;
            $item_type->save();
        }
        return redirect()->route('admin.items.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Items $item)
    {
      
        return view('admin.items.show',[
            'item'=>$item
        ]);
     
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Items $item)
    {
        
        if (Gate::denies('Admin')) {
            return redirect()->back()->with(['errors'=>' You do not have administrator rights!!! ']);
    }

        if (Gate::allows('Admin')) {
        
        return view('admin.items.edit',[
            'item'=>$item,
            'statuses'=>Status::get(),
            'Types'=>Type::get(),
            'Groups'=>Group::get()
        ]);
    }}

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Items $item)
    {

        if (Gate::denies('Admin')) {
            return redirect()->back()->with(['errors'=>' You do not have administrator rights!!! ']);
    }
        
       
      
       
       
        
      
        
        
        
        
      
        $items=$item;
        $items->p_id = $request->p_id;
        $items->Name = $request->Name;
        $items->Rtype = $request->Rtype;
        $items->Acr = $request->Acr;
        $items->Status = $request->Status;
        $items->Group = $request->Group;
        $items->Type = $request->Type;
        $items->Desciption = $request->Desciption;
        $items->Stype = $request->Stype;
        $items->Oplan = $request->Oplan;
        $items->Fplan = $request->Fplan;
        $items->Bowner = $request->Bowner;
        $items->ABowner = $request->ABowner;
        $items->Oowner = $request->Oowner;
        $items->AOowner = $request->AOowner;
        $items->Innovation = $request->Innovation;
        $items->AIowner = $request->AIowner;
        $items->Hostedb = $request->Hostedb;
        $items->Region = $request->Region;
        $items->Owninc = $request->Owninc;
        $items->Countryu = $request->Countryu;
        $items->Launchd = $request->Launchd;
        $items->Inactived = $request->Inactived;
        $items->Retired = $request->Retired;
        $items->Canceld = $request->Canceld;
        $items->help = $request->help;
        if ($request->has('foto1')) {
            $path1=$request->file('foto1')->store('store','public');
            $items->foto1 = $path1;
        }
        if ($request->has('foto2')) {
            $path2=$request->file('foto2')->store('store','public');
            $items->foto2 = $path2;
        }
        if ($request->has('foto3')) {
            $path3=$request->file('foto3')->store('store','public');
            $items->foto3 = $path3;
        }
        if ($request->has('foto4')) {
            $path4=$request->file('foto4')->store('store','public');
            $items->foto4 = $path4;
        }
        if ($request->has('foto5')) {
            $path5=$request->file('foto5')->store('store','public');
            $items->foto5 = $path5;
        }
        
       

        $items->save();
      
     
        
        if ($request->Status) {
            $status=Status::where('name',$request->Status)->first('id');
            $item=Items::where('p_id',$request->p_id)->first('id');
            $item_status=item_status::where('item_id',$item->id)->first();
            $item_status->item_id = $item->id;
            $item_status->status_id = $status->id;
            $item_status->save();
        }
        if ($request->Group) {
            $group=Group::where('name',$request->Group)->first('id');
            $item=Items::where('p_id',$request->p_id)->first('id');
            $item_group=item_group::where('item_id',$item->id)->first();
            $item_group->item_id = $item->id;
            $item_group->group_id = $group->id;
            $item_group->save();
        }
        if ($request->Type) {
            $type=Type::where('name',$request->Type)->first('id');
            $item=Items::where('p_id',$request->p_id)->first('id');
            $item_type=item_type::where('item_id',$item->id)->first();
            $item_type->item_id = $item->id;
            $item_type->type_id = $type->id;
            $item_type->save();
        }
        return redirect()->route('admin.items.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Items $item)
    
    {      

        
      
      
        if (Gate::denies('Admin')) {
            return redirect()->back()->with(['errors'=>' You do not have administrator rights!!! ']);
    }

        if (Gate::allows('Admin')) {
           
            
             
         if($item->status()){
            $item_status=item_status::where('item_id',$item->id)->first();
             if (isset( $item_status)) {
              
                $item_status->delete();
             }
          
   
        }

         if($item->group()){
            $item_group=item_group::where('item_id',$item->id)->first();
             if (isset( $item_group)) {
                $item_group->delete();
             }
          
           
   
        }
       
            
      
            if($item->type()){
                $item_type=item_type::where('item_id',$item->id)->first();
                if (isset($item_type)) {
                    $item_type->delete();
                }
            
   
            }
       
            $item->delete();
        
       return redirect()->route('admin.items.index');

    }}
}
