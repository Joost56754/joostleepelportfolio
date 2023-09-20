<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
                <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
        header {
            background-color: #3490dc;
            color: white;
            padding: 16px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        header h1 {
            font-size: 24px;
            font-weight: bold;
        }
        header a {
            color: white;
            text-decoration: none;
            margin-left: 20px;
            font-weight: bold;
        }
        header a:hover {
            text-decoration: underline;
        }
   
        </style>

    </head>
<body>
    <header class="bg-gray-100 max-w-7xl mx-auto sm:px-6 lg:px-8 flex items-center sm:justify-between">
        <h1>Mijn projecten</h1>
        <div class="flex sm:justify-between">
            <a href="/">Home</a>
        </div>
    </header>
<div class="container mt-2">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Projecten</h2>
                <div class="pull-right mb-2">
                    <a class="btn btn-success" href="{{ route('Projects.create') }}">Nieuw project</a>
                </div>
            </div>
        </div>
    </div>

    <table class="table table-bordered">
        <thead>
        <tr>
            <th>Project</th>
            <th>Titel</th>
            <th>Beschrijving</th>
            <th>Afbeelding</th>
            <th>Categorie</th>
            <th>Bewerk</th>
        </thead>
        <tbody>
            @foreach ($projects as $project)
            <tr>
                <td>{{ $project->id }}</td>
                <td>{{ $project->title }}</td>
                <td>{{ $project->description }}</td>
                <td><img src="{{ $project->image }}" alt="Project Image" width=100px></td>
                <td>{{ $project->category->name }}</td>
                    <td>
                        <form action="{{ route('Projects.destroy',$project->id) }}" method="Post">
                            <a class="btn btn-primary" href="{{ route('Projects.edit',$project->id) }}">Bewerk</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Verwijder</button>
                        </form>
                    </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

</body>
</html> 