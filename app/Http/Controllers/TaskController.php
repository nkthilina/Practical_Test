<?php

namespace App\Http\Controllers;

use App\Jobs\SendTaskNotification;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::all();
        return view('tasks.index', ['tasks' => $tasks]);
    }

    public function create()
    {
        return view('tasks.create');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
        ]);

        $mail_data = [
            'recipient' => 'nkthilinamadhusanka@gmail.com',
            'subject' => 'Task created',
            'body' => 'Task created successfully.'
        ];

        Mail::send('task_notifications', $mail_data, function ($message) use ($mail_data) {
            $message->to($mail_data['recipient'])
                ->subject($mail_data['subject']);
        });

        // dispatch(new SendTaskNotification([ 'message' => 'Done']));

        $task = Task::create($request->all());
        return redirect(route('task.index'))
            ->with('success', 'Task created successfully.');
    }

    public function show(Task $task)
    {
        return view('tasks.show', ['task' => $task]);
    }

    public function edit(Task $task)
    {
        return view('tasks.edit', ['task' => $task]);
    }

    public function update(Request $request, Task $task)
    {
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'status' => 'required',
        ]);

        $mail_data = [
            'recipient' => 'nkthilinamadhusanka@gmail.com',
            'subject' => 'Task updated',
            'body' => 'Task updated successfully.'
        ];

        Mail::send('task_notifications', $mail_data, function ($message) use ($mail_data) {
            $message->to($mail_data['recipient'])
                ->subject($mail_data['subject']);
        });

        $task->update($request->all());
        return redirect(route('task.index'))
            ->with('success', 'Task updated successfully.');
    }

    public function destroy(Task $task)
    {
        $task->delete();
        return redirect(route('task.index'))
            ->with('success', 'Task deleted successfully.');
    }
}
