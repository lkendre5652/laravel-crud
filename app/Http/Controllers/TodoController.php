<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{

    public function index()
    {
        //
       

    }    
    public function create()
    {
        
        return view('common.header').view('create').view('common.footer');

    }    
    public function store(Request $request)
    {
        return $request->input();
    }    
    public function show(Todo $todo)
    {
        //
        return view('common.header').view('todo')->with('Arr',Todo::all() ).view('common/footer');
    }    
    public function edit(Todo $todo)
    {
        //
    }
    public function update(Request $request, Todo $todo,$id)
    {              
       
        $data = Todo::where('id',$id)->get();         
        return view('common.header').view('update')->with('data',$data).view('common.footer');

    }
    function create_action(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        if( $request->method() == "POST"){
            $email = $request->input('email');
            $password = $request->input('password');
            $res = new Todo;
            $res->name =  $email;
            $res->password = $password;
            $res->save();
            return redirect('todo-show/');
        }

    }

    function update_action(Todo $todo, Request $request){
        $res = $request->validate([           
            'email' => 'required|min:5|max:100|email',           
        ]);               
        //return $request->all();  
        if($request->method() == "POST" ){
            $c = $request->input('email');
            $password = $request->input('password');
            $id = $request->input('id');
            $res = Todo::find( $id );
            $res->name = $c;
            $res->save();
            return redirect('todo-show');

            // Todo::where('id',$id)->update(array(
            //     'name' => 11
            // ));
        }                       
    }
    public function destroy(Todo $todo,$id)
    {

        Todo::destroy(array('id',$id));
        return redirect('todo-show/');
        //return view('common.header').view('common.footer');

    }
}
