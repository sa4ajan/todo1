<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Task;
use Auth;

class todoController extends Controller
{
    
   

  /* To Create a Task */
    public function create(Request $request){

    //create the instace of task
    $task = new Task();
   

    //get the json_object and retrive the specific vaule
    $task->title = $request['title'];
    $task->dateline = $request['date'];
  	$task->description = $request['description'];
    $task->user_id = Auth::user()->id;


    //save the data
  	$task->save();


  	
  }

  //To show all the view
    public function index(){
    $id = Auth::user()->id; 

    $flight = Task::where('user_id', $id)->get();
  

    //$info = Task::all();
    //$info =  DB::table('tasks')->select('title' , 'dateline')->get();
    return response()->json($flight);
    }



  /*To fetch data from database and send to the request */
    public function read(){

    if(Request::ajax()){

    $info = Task::all();
    //$info =  DB::table('tasks')->select('title' , 'dateline')->get();
    return response()->json($info);
   

    }
}

    /* For Update the data */
    public function update(Request $request , $id){

      //get the json file and decode into object
    $data = $request->all();//
    var_dump($data);
    
      //find the data into database using id
     $task = Task::find($id);
     
    

      //update the data
      $task->title = $data['title'];
      $task->dateline = $data['date'];
      $task->description = $data['description'];

    //save the data
    $task->save();
    
    
    }


    /* To show the data with specific id.*/
    public function show($id){

      $task = Task::find($id);
      
      return response()->json($task);
      
    }



    public function delete(Request $request , $id){

      //find the data with id
      $task = Task::find($id);

      //delete the task with the help of id
      $task->delete();

      //delete response method
      $delete_message = array('d_message' => 'Successfully Delete');
      
      //return the response
      return response()->json($delete_message);

    }
}

