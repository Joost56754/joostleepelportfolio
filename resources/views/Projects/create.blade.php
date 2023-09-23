<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Project syteem</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
    <!-- Voeg de stijlen van edit.blade.php toe -->
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
<div class="container mt-2">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left mb-2">
                <h2>Add Project</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('Projects.index') }}"> Back</a>
            </div>
        </div>
    </div>
    @if(session('status'))
        <div class="alert alert-success mb-1 mt-1">
            {{ session('status') }}
        </div>
    @endif
    <form action="{{ route('Projects.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Titel:</strong>
                    <input type="text" name="title" class="form-control" placeholder="Titel">
                    @error('title')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Beschrijving:</strong>
                    <input type="text" name="description" class="form-control" placeholder="Beschrijving">
                    @error('description')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Afbeelding/image path:</strong>
                    <input type="text" name="image" class="form-control" placeholder="image path">
                    @error('image')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Categorie:</strong>
                    <select name="category_id" id="1">
                        <option value="" selected>Selecteer een categorie</option> 
                        @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                    @error('category_id')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <button type="submit" class="btn btn-primary ml-3">Submit</button>
        </div>
    </form>
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
