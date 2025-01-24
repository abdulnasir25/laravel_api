<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\TaskRequest;
use App\Http\Resources\TaskResource;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends  Controller
{
    public function index()
    {
        return TaskResource::collection(Task::all());
    }

    public function show(Task $task)
    {
        return TaskResource::make($task);
    }

    public function store(TaskRequest $request)
    {
        return Task::create($request->validated());
    }

    public function update(TaskRequest $request, Task $task)
    {
        $task->update($request->validated());
        return TaskResource::make($task);
    }
}
