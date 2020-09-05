@extends('layout.layout')

@section('edit')

    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Task</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="ti-close"></i>
                </button>
            </div>
            <div class="modal-body">
                <form autocomplete="off" method="POST" action="/tasks/{{ $task->id }}">
                    @csrf
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Task title</label>
                        <div class="col-sm-9">
                            <input type="text" name="title" value=" {{ $task->title }}" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Label</label>
                        <div class="col-sm-9">
                            <input type="text" name="label" value=" {{ $task->title }}"  class="form-control" required>
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
@endsection
