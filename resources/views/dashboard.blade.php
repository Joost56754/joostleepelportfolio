<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight"></h2>
      <style>
          .menu {
              display: flex;
              list-style: none;
              margin: 0;
              padding: 0;
          }
          .menu li {
              margin-right: 20px;
          }
          .menu li:last-child {
              margin-right: 0;
          }
          .menu a {
              text-decoration: none;
              color: #333;
              font-weight: bold;
              font-size: 18px;
          }
          .menu a:hover {
              color: #555;
          }
      </style>
      <ul class="menu">
          <li><a href="Projects">Mijn projecten</a></li>
          <!-- Voeg meer menu-items toe indien nodig -->
      </ul>
  </x-slot>
  <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
              <div class="p-6 text-gray-900">
                  {{ __("You're logged in!") }}
              </div>
          </div>
      </div>
  </div>
</x-app-layout>
