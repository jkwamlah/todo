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
            'tasks' => Task::query()->orderBy('created_at', 'asc')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|Response|View
     */
    public function create()
    {
        return view('todo.content');
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
            'label' => ['required', 'string', 'min:3'],
            'deadline' => ['required', 'date'],
            'priority' => ['required', 'string']
        ]);

        if ($validator->fails()) {
            return redirect('/tasks')->withInput()->withErrors($validator);
        }

        $task = Task::query()->create($validator->validated());
        if ($task){
            session()->flash('success', $request->title.' added' );
            return redirect()->route('todo.index');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param Task $task
     * @return Task
     */
    public function show(Task $task)
    {
        return $task;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Task $task
     * @return Application|RedirectResponse|Redirector
     */
    public function update(Request $request, Task $task)
    {
        $validator = Validator::make($request->all(), [
            'title' => ['required', 'string', 'min:5', 'unique:tasks,title'],
            'label' => ['required', 'string', 'min:3'],
            'deadline' => ['required', 'date'],
            'priority' => ['required', 'string'],
            'description' => ['nullable', 'string']
        ]);

        try {
            $task->update($validator->validated());
        } catch (\Exception $exception) {
            report($exception);

            return redirect('/tasks')->withInput()->withErrors($validator);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Task $task
     * @return string
     */
    public function destroy(Task $task)
    {
        try {
            $task->delete();
        } catch (\Exception $e) {
            report($e);
            return ('Something went wrong! Try Again');
        }
    }
}