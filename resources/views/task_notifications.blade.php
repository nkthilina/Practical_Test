{{--

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Notification</title>
</head>

<body>
    <p>Hi</p>
    <p>Test mail</p>
    <strong>Thanks & regards</strong>
</body>

</html> --}}

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


{{-- Hello Friend <br>

<div>
    Message: {{ $data['text'] }}
</div> --}}
