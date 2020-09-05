@extends('layout.layout')

@section('index')
    <div class="row">
        @if(session()->has('success'))
            <div class="alert alert-success container">
                Success
            </div>
        @endif
    </div>
    <div class="card card-body app-content-body">
        <div class="app-lists">

            <div class="table-responsive ">
                <table class="table text-center">
                    <thead class="">
                    <tr>
                        <th scope="row">
                        </th>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Date Created</th>
                        <th scope="col">Label</th>
                        <th class="text-center" scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($tasks as $task)
                        <tr>
                            <td>
                                <div class="custom-control custom-checkbox custom-checkbox-success">
                                    <input type="checkbox" class="custom-control-input" id="{{ $task->id }} ">
                                    <label class="custom-control-label" for="{{ $task->id }} "></label>
                                </div>
                            </td>
                            <td>{{ $task->id }} </td>
                            <td>{{ $task->title }}</td>
                            <td>{{ date_format($task->created_at, 'D, Y-m-d') }}</td>
                            <td><span class="badge badge-info"> {{ $task->label }} </span></td>
                            <td class="text-center">
                                <div class="dropdown">
                                    <a href="#" class="btn btn-sm"
                                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right ">
                                        <form action="" method="POST">
                                            @csrf
                                            <a href="/tasks/{{ $task->id }}/edit" class="dropdown-item" >Edit</a>
                                        </form>
                                        <form action="/tasks/{{ $task->id }}" method="POST">
                                            @csrf
                                            <button class="dropdown-item " type="submit">Completed</button>
                                        </form>
                                        <form action="/tasks/{{ $task->id }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button class="dropdown-item " type="submit">Delete</button>
                                        </form>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <div class="card-title">
                    @if(count($tasks)===0)
                        <h4 class="text-center d-flex justify-content-center">No data found</h4>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <!-- end::app-lists -->

    <div class="modal fade" id="newTaskModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">New Task</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i class="ti-close"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form autocomplete="off" method="POST" action="/tasks">
                        @csrf
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Task title</label>
                            <div class="col-sm-9">
                                <input type="text" name="title" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Label</label>
                            <div class="col-sm-9">
                                <input type="text" name="label" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Priority</label>
                            <div class="col-sm-9">
                                <select class="form-control" name="priority" id="priority">
                                    <option value="urgent">urgent</option>
                                    <option value="important">important</option>
                                    <option value="medium" selected>medium</option>
                                    <option value="low">low</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3"></label>
                            <div class="col-sm-9">
                                <button type="submit" class="btn btn-primary">Create</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- end::main -->
@endsection
