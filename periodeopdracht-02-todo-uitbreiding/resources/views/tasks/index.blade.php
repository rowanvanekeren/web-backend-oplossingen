

@extends('layouts.app')

@section('content')

   
<div class="container">
    <div>
        <form action="{{ url('task') }}" method="POST">
            {!! csrf_field() !!}

        
            <div>
                <label for="task-name">Todo</label>

            
                    <input type="text" name="name">
            
            </div>

           
       
                <div>
                    <button type="submit">
                       Add Todo
                    </button>
                </div>
           
        </form>
    </div>


    
        @if (count($tasks) > 0)
        <div>
            <div>
                Current Todo's
            </div>

            <div>
                <table class="notdone">

                 
                    <thead>
                        <th>Not Done</th>
                        <th>&nbsp;</th>
                    </thead>

                    <!-- Table Body -->
                    <tbody>
                        @foreach ($tasks as $task)
                              @if($task->notdoneordone == 0)
                            <tr>
                               <!-- Task Name -->
                                   
                                <td>
                         
                                 
                                    <div><a href="{{ url('done/'.$task->id) }}">{{ $task->name }}</a></div>
                                   
                                </td>
                                           
                                     
                                <td>
                                        <form action="{{ url('task/'.$task->id) }}" method="POST">
            {!! csrf_field() !!}
            {!! method_field('DELETE') !!}

            <button>Delete Task</button>
        </form>
                                </td>
                            </tr>
                            @endif
                        @endforeach
                    </tbody>
                </table>
                                <table class="done">

                    <!-- Table Headings -->
                    <thead>
                        <th>Done</th>
                        <th>&nbsp;</th>
                    </thead>

                    <!-- Table Body -->
                    <tbody>
                        @foreach ($tasks as $task)
                              @if($task->notdoneordone ==1)
                            <tr>
                               <!-- Task Name -->
                                   
                                <td class="table-text">
                         
                                 
                                    <div><a href="{{ url('undone/'.$task->id) }}">{{ $task->name }}</a></div>
                                   
                                </td>
                                           
                                     
                                <td>
                                        <form action="{{ url('task/'.$task->id) }}" method="POST">
            {!! csrf_field() !!}
            {!! method_field('DELETE') !!}

            <button>Delete Task</button>
        </form>
                                </td>
                            </tr>
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endif
</div>
@endsection