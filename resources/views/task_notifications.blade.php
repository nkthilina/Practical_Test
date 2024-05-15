{{--
@component('mail::message')
# New Task Notification

A new task has been created or updated.

**Title:** {{ $task->title }}

**Description:** {{ $task->description }}

@component('mail::button', ['url' => route('task.show', $task)])
View Task
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent --}}


{{ $body }}
