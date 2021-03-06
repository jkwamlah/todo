@extends('layout.layout')

@section('title')
    @if($task->id)
        Edit Task
    @else
        New Task
    @endif
@endsection

@section('header')
    @if($task->id)
        Edit Task
    @else
        New Task
    @endif
@endsection

@section('content')

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
                <form autocomplete="off">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Task title</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Tags</label>
                        <div class="col-sm-9">
                            <select class="js-example-basic-single" multiple>
                                <option value="Theme Support">Theme Support</option>
                                <option value="Freelance">Freelance</option>
                                <option selected value="Social">Social</option>
                                <option selected value="Friends">Friends</option>
                                <option value="Coding">Coding</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row row-sm">
                        <label class="col-sm-3 col-form-label">Deadline</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control create-event-datepicker"
                                   placeholder="Date">
                        </div>
                        <div class="col-sm-4">
                            <input type="text" class="form-control create-event-demo"
                                   placeholder="Time">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Participate</label>
                        <div class="col-sm-9">
                            <div class="avatar-group">
                                <figure class="avatar avatar-sm">
                                    <img src="media/image/user/women_avatar3.jpg" class="rounded-circle"
                                         alt="image">
                                </figure>
                                <figure class="avatar avatar-sm">
                                    <span class="avatar-title bg-danger rounded-circle">S</span>
                                </figure>
                                <figure class="avatar avatar-sm">
                                    <img src="media/image/user/women_avatar5.jpg" class="rounded-circle"
                                         alt="image">
                                </figure>
                            </div>
                            <button type="button" class="btn btn-outline-light btn-sm btn-floating" title="Add User"
                                    data-toggle="dropdown">
                                <i class="ti-plus"></i>
                            </button>
                            <div class="dropdown-menu p-0">
                                <div class="p-3">
                                    <h6 class="text-uppercase font-size-11 mb-3">Add User</h6>
                                    <div class="input-group input-group-sm">
                                        <input type="text" class="form-control" placeholder="Search User"
                                               aria-describedby="button-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-outline-light" type="button" id="button-addon2">
                                                <i class="ti-search"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <ul class="list-group list-group-flush mt-2">
                                        <li class="list-group-item d-flex align-items-center pl-0 pr-0">
                                            <div class="mr-2">
                                                <figure class="avatar avatar-sm">
                                                    <span class="avatar-title bg-primary rounded-circle">V</span>
                                                </figure>
                                            </div>
                                            <div>
                                                <h6 class="mb-0">Valentine Maton</h6>
                                            </div>
                                            <div class="dropdown ml-auto">
                                                <a href="#" data-toggle="dropdown" class="btn btn-outline-light btn-sm"
                                                   aria-haspopup="true" aria-expanded="false">
                                                    <i data-feather="plus"></i>
                                                </a>
                                            </div>
                                        </li>
                                        <li class="list-group-item d-flex align-items-center pl-0 pr-0">
                                            <div class="mr-2">
                                                <figure class="avatar avatar-sm">
                                                    <img src="media/image/user/women_avatar3.jpg"
                                                         class="rounded-circle" alt="image">
                                                </figure>
                                            </div>
                                            <div>
                                                <h6 class="mb-0">Valentine Maton</h6>
                                            </div>
                                            <div class="dropdown ml-auto">
                                                <a href="#" data-toggle="dropdown" class="btn btn-outline-light btn-sm"
                                                   aria-haspopup="true" aria-expanded="false">
                                                    <i data-feather="plus"></i>
                                                </a>
                                            </div>
                                        </li>
                                        <li class="list-group-item d-flex align-items-center pl-0 pr-0">
                                            <div class="mr-2">
                                                <figure class="avatar avatar-sm">
                                                    <img src="media/image/user/women_avatar2.jpg"
                                                         class="rounded-circle" alt="image">
                                                </figure>
                                            </div>
                                            <div>
                                                <h6 class="mb-0">Valentine Maton</h6>
                                            </div>
                                            <div class="dropdown ml-auto">
                                                <a href="#" data-toggle="dropdown"
                                                   class="btn btn-outline-light btn-sm ml-3" aria-haspopup="true"
                                                   aria-expanded="false">
                                                    <i data-feather="plus"></i>
                                                </a>
                                            </div>
                                        </li>
                                        <li class="list-group-item d-flex align-items-center pl-0 pr-0">
                                            <div class="mr-2">
                                                <figure class="avatar avatar-sm">
                                                    <img src="media/image/user/man_avatar2.jpg"
                                                         class="rounded-circle" alt="image">
                                                </figure>
                                            </div>
                                            <div>
                                                <h6 class="mb-0">Valentine Maton</h6>
                                            </div>
                                            <div class="dropdown ml-auto">
                                                <a href="#" data-toggle="dropdown"
                                                   class="btn btn-outline-light btn-sm ml-3" aria-haspopup="true"
                                                   aria-expanded="false">
                                                    <i data-feather="plus"></i>
                                                </a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Description</label>
                        <div class="col-sm-9">
                            <textarea class="form-control" rows="6"></textarea>
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

<div class="modal fade" id="editTaskModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Task</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="ti-close"></i>
                </button>
            </div>
            <div class="modal-body">
                <form autocomplete="off">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Task title</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" placeholder="Title"
                                   value="Draw design and presentation for customers.">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Tags</label>
                        <div class="col-sm-9">
                            <select class="js-example-basic-single" multiple>
                                <option selected value="Theme Support">Theme Support</option>
                                <option value="Freelance">Freelance</option>
                                <option value="Social">Social</option>
                                <option value="Friends">Friends</option>
                                <option value="Coding">Coding</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row row-sm">
                        <label class="col-sm-3 col-form-label">Deadline</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control create-event-datepicker"
                                   placeholder="Date" value="10/31/2019">
                        </div>
                        <div class="col-sm-4">
                            <input type="text" class="form-control create-event-demo" value="11:57"
                                   placeholder="Time">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Participate</label>
                        <div class="col-sm-9">
                            <div class="avatar-group">
                                <figure class="avatar avatar-sm">
                                    <img src="../../assets/media/image/user/women_avatar3.jpg" class="rounded-circle"
                                         alt="image">
                                </figure>
                                <figure class="avatar avatar-sm">
                                    <span class="avatar-title bg-danger rounded-circle">S</span>
                                </figure>
                                <figure class="avatar avatar-sm">
                                    <img src="../../assets/media/image/user/women_avatar5.jpg" class="rounded-circle"
                                         alt="image">
                                </figure>
                            </div>
                            <button type="button" class="btn btn-outline-light btn-sm btn-floating" title="Add User"
                                    data-toggle="dropdown">
                                <i class="ti-plus"></i>
                            </button>
                            <div class="dropdown-menu p-0">
                                <div class="p-3">
                                    <h6 class="text-uppercase font-size-11 mb-3">Add User</h6>
                                    <div class="input-group input-group-sm">
                                        <input type="text" class="form-control" placeholder="Search User"
                                               aria-describedby="button-addon3">
                                        <div class="input-group-append">
                                            <button class="btn btn-outline-light" type="button" id="button-addon3">
                                                <i class="ti-search"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <ul class="list-group list-group-flush mt-2">
                                        <li class="list-group-item d-flex align-items-center pl-0 pr-0">
                                            <div class="mr-2">
                                                <figure class="avatar avatar-sm">
                                                    <span class="avatar-title bg-primary rounded-circle">V</span>
                                                </figure>
                                            </div>
                                            <div>
                                                <h6 class="mb-0">Valentine Maton</h6>
                                            </div>
                                            <div class="dropdown ml-auto">
                                                <a href="#" data-toggle="dropdown" class="btn btn-outline-light btn-sm"
                                                   aria-haspopup="true" aria-expanded="false">
                                                    <i data-feather="plus"></i>
                                                </a>
                                            </div>
                                        </li>
                                        <li class="list-group-item d-flex align-items-center pl-0 pr-0">
                                            <div class="mr-2">
                                                <figure class="avatar avatar-sm">
                                                    <img src="../../assets/media/image/user/women_avatar3.jpg"
                                                         class="rounded-circle" alt="image">
                                                </figure>
                                            </div>
                                            <div>
                                                <h6 class="mb-0">Valentine Maton</h6>
                                            </div>
                                            <div class="dropdown ml-auto">
                                                <a href="#" data-toggle="dropdown" class="btn btn-outline-light btn-sm"
                                                   aria-haspopup="true" aria-expanded="false">
                                                    <i data-feather="plus"></i>
                                                </a>
                                            </div>
                                        </li>
                                        <li class="list-group-item d-flex align-items-center pl-0 pr-0">
                                            <div class="mr-2">
                                                <figure class="avatar avatar-sm">
                                                    <img src="../../assets/media/image/user/women_avatar2.jpg"
                                                         class="rounded-circle" alt="image">
                                                </figure>
                                            </div>
                                            <div>
                                                <h6 class="mb-0">Valentine Maton</h6>
                                            </div>
                                            <div class="dropdown ml-auto">
                                                <a href="#" data-toggle="dropdown"
                                                   class="btn btn-outline-light btn-sm ml-3" aria-haspopup="true"
                                                   aria-expanded="false">
                                                    <i data-feather="plus"></i>
                                                </a>
                                            </div>
                                        </li>
                                        <li class="list-group-item d-flex align-items-center pl-0 pr-0">
                                            <div class="mr-2">
                                                <figure class="avatar avatar-sm">
                                                    <img src="../../assets/media/image/user/man_avatar2.jpg"
                                                         class="rounded-circle" alt="image">
                                                </figure>
                                            </div>
                                            <div>
                                                <h6 class="mb-0">Valentine Maton</h6>
                                            </div>
                                            <div class="dropdown ml-auto">
                                                <a href="#" data-toggle="dropdown"
                                                   class="btn btn-outline-light btn-sm ml-3" aria-haspopup="true"
                                                   aria-expanded="false">
                                                    <i data-feather="plus"></i>
                                                </a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Description</label>
                        <div class="col-sm-9">
                            <textarea class="form-control" rows="6">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur corporis incidunt labore modi numquam omnis pariatur possimus suscipit vitae voluptas?</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3"></label>
                        <div class="col-sm-9">
                            <button type="submit" class="btn btn-success">
                                <i data-feather="check" class="mr-2"></i>
                                Save
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
