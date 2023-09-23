<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Welkom!') }}
            </h2>
            <div class="dropdown">
                <div class="dropdown-content">
                    <a href="Projects">Mijn projecten</a>
                </div>
            </div>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1 class="text-2xl font-semibold mb-6">Projecten</h1>
                    <table class="w-full border-collapse border border-gray-300">
                        <thead>
                            <tr>
                                <th class="py-2 px-3 bg-gray-200">Titel</th>
                                <th class="py-2 px-3 bg-gray-200">Beschrijving</th>
                                <th class="py-2 px-3 bg-gray-200">Afbeelding</th>
                                <th class="py-2 px-3 bg-gray-200">Categorie</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($projects as $project)
                            <tr class="border border-gray-300">
                                <td class="py-2 px-3">{{ $project->title }}</td>
                                <td class="py-2 px-3">{{ $project->description }}</td>
                                <td class="py-2 px-3"><img src="{{ $project->image }}" alt="Project Image" class="w-20 h-20"></td>
                                <td class="py-2 px-3">{{ $project->category->name }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

