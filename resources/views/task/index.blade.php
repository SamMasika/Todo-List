@extends('task.master')

@section('content')



    <div class="container">
    <h3>
        <div class="align-center">
            <a href="/create" class="btn btn-primary float px-5"><i class="fa fa-plus"></i>Create Task</a>
        </div>
         </h3>
    

   
   
        <table class="table table-bordered">
            <thead><strong>Running Tasks</strong></thead>
            <tr>
                <th>Task</th>
                <th>Action</th>
            </tr>
            @foreach ($tasks as $task)
                <tr>
                    
                    <td>
                              {{ $task->task}}
                    </td>
                    <td class="text-right">
                        <a href="{{asset('/' . $task->id . '/edit')}}" ><i class="fa fa-edit">Edit</i></a>
                        <a href="{{asset('/' . $task->id . '/iscompleted')}}" >Complete</a>
                        <a href="{{asset('/' . $task->id . '/delete')}}"><i class="fa fa-trash">Delete</i></a>
                       
                    </td>
                </tr>
            @endforeach

        </table>



    
            <table class="table table-bordered">
                <thead><strong>Completed Tasks</strong></thead>
                <tr>
                    <th>Task</th>
                    <th>Action</th>
                </tr>
                
                @foreach ($completed_tasks as $c_task)
                    <tr>
                        <td>
                                  {{ $c_task->task}}
                        </td>
                        <td>
                            <a href="{{asset('/' . $c_task->id . '/delete')}}"><i class="fa fa-trash"></i></a>
                        </td>
                       
                    </tr>
                @endforeach
                
            </table>
        
    </div>
</div>
<a href="/dashboard" class="btn btn-primary float px-4"><i class="fa fa-arrow-left"></i>Back</a>
</div>
@endsection