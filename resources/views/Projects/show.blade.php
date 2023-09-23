<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mijn Laravel Applicatie</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    
    <!-- Voeg de stijlen van edit.blade.php toe -->
    <style>
        /* Voeg hier je eigen aangepaste CSS-stijlen toe */
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

<div class="container mt-4">
    <div class="row">
        <div class="col-8">
            <h2>Verwijder Project</h2>
        </div>
        <div class="col-4 text-right">
            <a class="btn btn-primary" href="{{ route('Projects.index') }}">Terug naar Overzicht</a>
        </div>
    </div>

    <table class="table table-bordered mt-3">
        <thead>
            <tr>
                <th>Projecttitel</th>
                <th>Verwijderen</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td id="project-title">{{ $Project->title }}</td>
                <td>
                    <button id="show-delete" class="btn btn-danger">Verwijder Project</button>
                    <form id="delete-form" style="display: none;" action="{{ route('Projects.destroy', $Project->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Weet je zeker dat je dit project wilt verwijderen?')" class="btn btn-danger">Ja, Verwijder</button>
                    </form>
                </td>
            </tr>
        </tbody>
    </table>
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

<script>
    document.getElementById('show-delete').addEventListener('click', function () {
        let projectTitle = document.getElementById('project-title').textContent;
        let userInput = prompt('Typ de projecttitel om te bevestigen');
        
        if (userInput === projectTitle) {
            document.getElementById('delete-form').style.display = "block";
            document.getElementById('show-delete').style.display = "none";
        } else {
            alert('Foutieve projecttitel. Probeer opnieuw.');
        }
    });
</script>
</body>
</html>
