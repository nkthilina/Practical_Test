<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Tasks Create</h1>

    <div>
        @if ($errors->any())
            <div>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
    <form action="{{ route('task.store') }}" method="post">
        @csrf
        @method('POST')
        <div>
            <label for="title">Title </label>
            <input type="text" name="title" placeholder="Enter Title" />
        </div>
        <div>
            <label for="description">Description </label>
            <input type="text" name="description" placeholder="Enter description" />
        </div>
        <div>
            <label for="status">Status </label>
            <select name="status" id="status">
                <option value="pending">Pending</option>
                <option value="completed">Completed</option>
            </select>
        </div>
        <div>
            <button type="submit">Submit</button>
        </div>
    </form>
</body>

</html>
