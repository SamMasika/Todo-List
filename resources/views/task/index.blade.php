@extends('task.master')

@section('content')



    <div class="container">
    <h1>Tasks</h1>
    <h3>
        <div class="align-center">
            <a href="/create" class="btn btn-primary float px-5"><i class="fa fa-plus"></i>Create Task</a>
        </div>
         </h3>
    
<div class="card">
    <div class="card-header">Tasks</div>

    <div class="card-body">
        <table class="table table-striped">
            @foreach ($tasks as $task)
                <tr>
                    <td>
                        @if ($task->iscompleted)
                        <span style="text-decoration:line-through">{{$task->task}}</span>
                        @else
                            {{ $task->task}}
                        @endif
                    </td>
                    <td class="text-right">
                        <a href="{{asset('/' . $task->id . '/edit')}}" class="text-warning">Edit</a>
                        <a href="{{asset('/' . $task->id . '/iscompleted')}}" class="text-success">iscompleted</a>
                        <a href="{{asset('/' . $task->id . '/delete')}}" class="text-danger">Delete</a>
                    </td>
                </tr>
            @endforeach
        </table>

    </div>
</div>
</div>
</div>
</div>
@endsection