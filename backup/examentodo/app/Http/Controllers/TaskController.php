<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Repositories\TaskRepository;
class TaskController extends Controller
{
    protected $tasks;
       /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        
          $this->tasks = $tasks;
    }
    
    public function index(Request $request)
{
    $tasks = Task::where('user_id', $request->user()->id)->get();
     return view('tasks.index', [
        'tasks' => $this->tasks->forUser($request->user()),
    ]);
        
}
    
    public function store(Request $request)
{
    $this->validate($request, [
        'name' => 'required|max:255',
    ]);

    // Create The Task...
}
    
    /**
 * Create a new task.
 *
 * @param  Request  $request
 * @return Response
 */
public function store(Request $request)
{
    $this->validate($request, [
        'name' => 'required|max:255',
    ]);

    $request->user()->tasks()->create([
        'name' => $request->name,
    ]);

    return redirect('/tasks');
}
    
    public function destroy(Request $request, Task $task)
{
  $this->authorize('destroy', $task);
}
    
    public function destroy(Request $request, Task $task)
{
    $this->authorize('destroy', $task);

    $task->delete();

    return redirect('/tasks');
}
}
