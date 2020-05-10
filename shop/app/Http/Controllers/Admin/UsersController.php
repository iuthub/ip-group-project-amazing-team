<?php

namespace App\Http\Controllers\Admin;
use Gate;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Role;
use App\role_user;
use Auth;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
  
  
      

        
            return view('admin.users.index',[
                'users'=>User::paginate(10),

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
        return view('admin.users.create',[
            'users'=>[],
            'roles'=>Role::get()
             
        ]);
    }}

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request , User $user)
    {
        
        if (Gate::allows('Admin')) {
       
        $datas= new User;
        $datas->name=$request->name;
        $datas->email=$request->email;
        $datas->role=$request->role;
        $datas->password=Hash::make($request['password']);

        $datas->save();
        

        if ($request->role) {
            $role=Role::where('name',$request->role)->first('id');
            $user=User::where('name',$request->name)->first('id');
            $role_user= new role_user();
            $role_user->user_id = $user->id;
            $role_user->role_id = $role->id;
            $role_user->save();
        }
        return redirect()->route('admin.users.index');
        
    }}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // return view('admin.items.show',[
        //     'item'=>$item
        // ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {

         if (Gate::denies('Admin')) {
                return redirect()->back()->with(['errors'=>' You do not have administrator rights!!! ']);
        }

        if (Gate::allows('Admin')) {
        return view('admin.users.edit',[
            'user'=> $user,
            'roles'=>Role::get()
        ]);
    }}

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        if (Gate::allows('Admin')) {
        $datas=$user;
        $datas->name=$request->name;
        $datas->email=$request->email;
        $datas->role=$request->role;
        $datas->password=Hash::make($request['password']);
        $datas->save();
        
        if ($request->role) {
            
            $role=Role::where('name',$request->role)->first('id');
            $user=User::where('name',$request->name)->first('id');
            $role_user= role_user::where('user_id',$user->id)->first();
            $role_user->user_id = $user->id;
            $role_user->role_id = $role->id;
            $role_user->save();
        }
        return redirect()->route('admin.users.index');
    }}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
             
        if (Gate::denies('Admin')) {
            return redirect()->back()->with(['errors'=>' You do not have administrator rights!!! ']);
    }

      
        if (Gate::allows('Admin')) {
            
             
            if($user->roles()){
               $role_user=role_user::where('user_id',$user->id)->first();
               $role_user->delete();
      
           }
   
               $user->delete();
           
          return redirect()->route('admin.users.index');
   
       
    }
}}
