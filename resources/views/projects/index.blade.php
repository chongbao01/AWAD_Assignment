<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Projects</h1>
    <ul>
        @foreach($projects as $project)
            <li>
                <a href="{{ route('projects.show', $project->id) }}">
                    {{ $project->title }} - ${{ number_format($project->budget, 2) }}
                </a>
            </li>
        @endforeach
    </ul>

</body>
</html>