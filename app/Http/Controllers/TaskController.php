<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;
use Illuminate\View\View;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        return view('todo.index', [
            'tasks' => Task::query()->orderBy('created_at', 'desc')->get()->where('status','active')
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|Response|View
     */
    public function create()
    {
        return view('todo.createOrEdit', ['todo' => new Task()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Application|RedirectResponse|Response|Redirector
     * @throws ValidationException
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => ['required', 'string', 'min:5', 'unique:tasks,title'],
            'date' => ['required', 'date_format:Y-m-d'],
            'time' => ['required', 'date_format:H:i'],
            'label' => ['required', 'string', 'min:3'],
            'priority' => ['required', 'in:urgent,important,medium,low']
        ]);

        if ($validator->fails()) {
            session()->flash('Error', 'Something went wrong!');
            return redirect('/tasks');
        }

        $data = $request->only('task', 'status');
        $data['schedule'] = implode(' ', $request->only('date', 'time'));
        Task::query()->create($data);
        Task::query()->create($validator->validated());
        session()->flash('success', 'Task Added!');

        return redirect()->route('todo.index');
    }

    /**
     * Display the specified resource.
     *
     * @param Task $task
     * @return Task
     */
    public function show(Task $task)
    {
        return $task ;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Task $todo
     * @return Application|Factory|Response|View
     */
    public function edit(Task $todo)
    {
        return view('todo.createOrEdit', ['todo' => $todo]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Task $task
     * @return Application|RedirectResponse|Redirector
     */
    public function update(Request $request, Task $task): RedirectResponse
    {
        $request->validate([
            'title' => ['required', 'string', 'min:5', 'unique:tasks,title'],
            'date' => ['required', 'date_format:Y-m-d'],
            'time' => ['required', 'date_format:H:i'],
            'label' => ['required', 'string', 'min:3'],
            'priority' => ['required', 'in:urgent,important,medium,low']
        ]);

        try {
            $data = $request->only('task', 'status');
            $data['schedule'] = implode(' ', $request->only('date', 'time'));

            $task->update($data);
            session()->flash('success', 'Task Updated!');

            return redirect()->route('todo.index');
        } catch (\Exception $exception) {
            report($exception);

            return redirect('/tasks')->withInput()->withErrors($validator);
        }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param Task $task
     * @return RedirectResponse|string
     */
    public function destroy(Task $task)
    {
        try {
            $task->delete();
            session()->flash('success', "$task->title deleted!");
            return redirect()->route('todo.index');
        } catch (\Exception $e) {
            report($e);
            return ('Something went wrong! Try Again');
        }
    }
}
