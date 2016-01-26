<?php

namespace App\Http\Controllers;

use App\Task;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\TaskRepository;
use App\Http\Controllers\Auth;
class TaskController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
     protected $tasks;
    public function __construct(TaskRepository $tasks)
    {
        $this->middleware('auth');
        
          $this->tasks = $tasks;
    }
    
    public function index(Request $request)
{
        // $user_id = Auth::id();
     return view('tasks.index', [
            'tasks' => $this->tasks->forUser($request->user()),
        ]);
    }
    
    public function store(Request $request)
{
    $this->validate($request, [
        'name' => 'required|max:255',
    ]);

       $request->user()->tasks()->create([
        'name' => $request->name,'notdoneordone' => 0
    ]);
  

    return redirect('/tasks');
}
        public function destroy(Request $request, Task $task)
{
   $this->authorize('destroy', $task);
            
    $task->delete();

    return redirect('/tasks');
}
    
    public function done(Request $request,  $task){
        
            $request->user()->tasks()->where('id', $task)->update(array('notdoneordone' => 1));
            return redirect('/tasks');
    }
    
        public function undone(Request $request,  $task){
        
            $request->user()->tasks()->where('id', $task)->update(array('notdoneordone' => 0));
            return redirect('/tasks');
    }
}