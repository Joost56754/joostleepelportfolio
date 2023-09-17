<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mijn Portfolio</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.7/dist/tailwind.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #8BC6EC;

            background-size: cover;
            background-repeat: no-repeat;
        }
    </style>
</head>
<body class="font-sans">
    <header class="bg-black-600 text-black py-4">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-2xl font-semibold">Joost Leepel</h1>
            <nav>
                <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>
                <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
            </nav>
        </div>
    </header>

    <main class="container mx-auto py-8 text-center">
        <section class="bg-white p-8 shadow-md rounded-lg">
            <h2 class="text-2xl font-semibold mb-4">Over Mij</h2>
            <div class="flex flex-col md:flex-row items-center">
                <img src="img/afbeelding2.jpg" alt="Jouw afbeelding" class="w-64 h-64 md:w-96 md:h-auto mb-4 md:mb-0 mr-0 md:mr-4 rounded-lg">
                <p class="text-gray-700">Van jongs af aan vind ik het al leuk om creatief bezig te zijn. Op het 
moment dat ik een computer kreeg, vond ik het interessant om te gaan 
ontwerpen op de computer. Momenteel ben ik bezig met leerjaar 2 van 
de opleiding Software Developer Mbo 4. Binnenkort moet ik gaan stage 
lopen. Ik heb daar erg veel zin in.
Ik ben een leergierige student met een hoge motivatie en veel 
doorzettingsvermogen. Op de opleiding vind ik het vooral leuk om mooie/ 
professionele websites te bouwen. In mijn vrije tijd oefen ik vaak verder
met html en CSS.
</p>
            </div>
        </section>
    

    
    <footer class="bg-black-600 text-black py-4">
        <div class="container mx-auto text-center">
            &copy; <?php echo date("Y"); ?> Mijn Portfolio.
        </div>
    </footer>
</body>
</html>
