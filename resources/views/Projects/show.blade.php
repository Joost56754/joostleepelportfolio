<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mijn Laravel Applicatie</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        /* Voeg hier je eigen aangepaste CSS-stijlen toe */
    </style>
</head>
<body>
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
