<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\TaskResource;
use App\Models\Task;
use Illuminate\Http\Request;

class CompleteTaskController extends Controller
{
    public function __invoke(Request $request, Task $task)
    {
        $task->update($request->only('completed'));
        return TaskResource::make($task);
    }
}
