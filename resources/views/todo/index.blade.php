@extends('layout.layout')

@section('index')
<div class="card card-body app-content-body">
    <div class="app-lists">
        <div class="row">
        @if(session()->has('success'))
        <div class="alert alert-success container">
            Success
        </div>
        @endif
</div>
<ul class="list-group list-group-flush">
<li class="list-group-item task-list">
    <div class="mr-3">
        <a href="#" class="app-sortable-handle">
            <i data-feather="move" class="width-15 height-15"></i>
        </a>
    </div>
    <div>
        <div class="custom-control custom-checkbox custom-checkbox-success mr-2">
            <input type="checkbox" class="custom-control-input" id="customCheck3">
            <label class="custom-control-label" for="customCheck3"></label>
        </div>
    </div>
    <div>
        <a href="#" class="add-star mr-3" title="Add stars">
            <i class="fa fa-star font-size-16 text-warning"></i>
        </a>
    </div>
    <div class="flex-grow-1 min-width-0">
        <div class="mb-1 d-flex align-items-center justify-content-between">
            <div class="app-list-title text-truncate">{{ 'title' }}
            </div>
            <div class="pl-3 d-flex align-items-center">
                <div class="mr-3 d-sm-inline d-none">
                    <div class="badge badge-info">{{ 'friends' }}</div>
                </div>
                <a href="#" title="Delete" data-toggle="tooltip">
                    <i class="fa fa-trash-o" aria-hidden="true"></i>
                </a>
            </div>
        </div>
    </div>
</li>
<li class="list-group-item task-list active">
    <div class="mr-3">
        <a href="#" class="app-sortable-handle">
            <i data-feather="move" class="width-15 height-15"></i>
        </a>
    </div>
    <div>
        <div class="custom-control custom-checkbox custom-checkbox-success mr-2">
            <input type="checkbox" class="custom-control-input" id="customCheck4" checked>
            <label class="custom-control-label" for="customCheck4"></label>
        </div>
    </div>
    <div>
        <a href="#" class="add-star mr-3" title="Add stars">
            <i class="fa fa-star-o font-size-16"></i>
        </a>
    </div>
    <div class="flex-grow-1 min-width-0">
        <div class="mb-1 d-flex align-items-center justify-content-between">
            <div class="app-list-title text-truncate">{{'To do List - laravel'}}
            </div>
            <div class="pl-3 d-flex align-items-center">
                <div class="mr-3 d-sm-inline d-none">
                    <div class="badge badge-warning">{{'Coding'}}</div>
                </div>
                <a href="#" title="Delete" data-toggle="tooltip">
                    <i data-feather="trash-2" class="width-15 height-15"></i>
                </a>
            </div>
        </div>
    </div>
</li>
</ul>
</div>
<!-- end::app-lists -->
</div>

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
                <input type="text" class="form-control" required>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-3 col-form-label">Label</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" required>
            </div>
        </div>
        <div class="form-group row row-sm">
            <label class="col-sm-3 col-form-label">Due Date</label>
            <div class="col-sm-5">
                <input type="text" name="deadline" class="form-control create-event-datepicker" placeholder="{{ date('D, d M Y' ) }}">
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
