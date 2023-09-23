<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        body {
            font-family: 'Nunito', sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
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
            margin: 0;
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
        .container {
            background-color: #fff;
            padding: 20px;
            margin-top: 20px;
            border-radius: 5px;
        }
        h2 {
            font-size: 24px;
            font-weight: bold;
        }
        .btn-success {
            background-color: #28a745;
            color: white;
        }
        .btn-success:hover {
            background-color: #218838;
        }
        .form-group {
            margin-bottom: 20px;
        }
        .input-group {
            width: 100%;
        }
        .form-control {
            width: 70%;
        }
        .btn-primary {
            margin-left: 10px;
        }
        .table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        .table th, .table td {
            padding: 10px;
            text-align: left;
        }
        .table th {
            background-color: #f2f2f2;
        }
        .table tbody tr:nth-child(odd) {
            background-color: #f9f9f9;
        }
        .table tbody tr:hover {
            background-color: #e0e0e0;
        }
        footer {
            background-color: #3490dc;
            color: black;
            padding: 16px;
        }
        footer h3 {
            font-size: 18px;
            font-weight: bold;
        }
        footer p {
            font-size: 16px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
<header>
    <h1>Mijn projecten</h1>
    <div>
        <a href="/">Home</a>
        <a href="dashboard">Dashboard</a>
    </div>
</header>
<div class="container">
    <div>
        <h2>Projecten</h2>
        <div>
            <a class="btn btn-success" href="{{ route('Projects.create') }}">Nieuw project</a>
        </div>
    </div>
    <div class="form-group">
        <form method="get" action="/locate">
            <div class="input-group">
                <input class="form-control" name="locate" placeholder="locate..." value="{{ isset($locate) ? $locate : ''}}">
                <button type="submit" class="btn btn-primary">locate</button>
            </div>
        </form>
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
        </tr>
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
                        <a class="btn btn-info" href="{{ route('Projects.show',$project->id) }}">Project verwijderen?</a>
                        @csrf
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
</div>
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h3>Contactgegevens</h3>
                <p>Naam: [/]</p>
                <p>E-mail: [/]</p>
                <p>Telefoon: [/]</p>
            </div>
            <div class="col-md-6">
                <h3>Adres</h3>
                <p>Straat: [/]</p>
                <p>Stad: [/]</p>
                <p>Postcode: [/]</p>
            </div>
        </div>
    </div>
</footer>
</body>
</html>
