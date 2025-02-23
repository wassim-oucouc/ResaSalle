<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <title>Dashboard Admin - Salle</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet" />
  <style>
    body {
      font-family: 'Inter', sans-serif;
      background-color: #f3f4f6;
    }
    .nav-item {
      position: relative;
    }
    .nav-item::after {
      content: '';
      position: absolute;
      width: 0;
      height: 2px;
      bottom: -5px;
      left: 0;
      background-color: white;
      transition: width 0.3s;
    }
    .nav-item:hover::after {
      width: 100%;
    }
    .form-input:focus {
      border-color: #1e40af;
      box-shadow: 0 0 0 2px rgba(30, 64, 175, 0.2);
    }
    .card-hover:hover {
      transform: translateY(-5px);
      transition: transform 0.3s ease;
    }
  </style>
</head>
<body class="bg-gray-50 min-h-screen">
  <div class="flex h-screen">
    <!-- Sidebar -->
    <div class="hidden md:flex md:flex-col w-64 bg-gray-900 text-white">
      <div class="p-6">
        <h1 class="text-2xl font-bold">Admin Panel</h1>
      </div>
      <nav class="flex-1 px-4 py-2">
        <ul class="space-y-2">
          <li>
            <a href="#" class="flex items-center p-3 text-gray-300 rounded hover:bg-gray-800 hover:text-white transition-colors">
              <i class="fas fa-home mr-3 w-6"></i>
              <span>Home</span>
            </a>
          </li>
          <li>
            <a href="#" class="flex items-center p-3 text-white bg-blue-600 rounded">
              <i class="fas fa-door-open mr-3 w-6"></i>
              <span>Salles</span>
            </a>
          </li>
          <li>
            <a href="#" class="flex items-center p-3 text-gray-300 rounded hover:bg-gray-800 hover:text-white transition-colors">
              <i class="fas fa-calendar-check mr-3 w-6"></i>
              <span>Reservations</span>
            </a>
          </li>
          <li>
            <a href="#" class="flex items-center p-3 text-gray-300 rounded hover:bg-gray-800 hover:text-white transition-colors">
              <i class="fas fa-users mr-3 w-6"></i>
              <span>Users</span>
            </a>
          </li>
          <li class="mt-8">
            <a href="#" class="flex items-center p-3 text-gray-300 rounded hover:bg-red-600 hover:text-white transition-colors">
              <i class="fas fa-sign-out-alt mr-3 w-6"></i>
              <span>Logout</span>
            </a>
          </li>
        </ul>
      </nav>
    </div>

    <!-- Main Content -->
    <div class="flex-1 flex flex-col overflow-hidden">
      <!-- Top Navbar -->
      <header class="bg-white shadow-sm">
        <div class="flex items-center justify-between p-4">
          <div class="flex items-center md:hidden">
            <button class="text-gray-700 focus:outline-none">
              <i class="fas fa-bars text-xl"></i>
            </button>
          </div>
          <div class="hidden md:flex md:items-center">
            <h2 class="text-xl font-semibold text-gray-800">Dashboard Admin</h2>
          </div>
          <div class="flex items-center space-x-4">
            <div class="relative">
              <input type="text" placeholder="Search..." class="pl-10 pr-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent" />
              <i class="fas fa-search absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
            </div>
            <div class="flex items-center">
              <div class="w-10 h-10 rounded-full bg-blue-600 flex items-center justify-center text-white">
                <i class="fas fa-user"></i>
              </div>
            </div>
          </div>
        </div>
      </header>

      <!-- Main Content -->
      <main class="flex-1 overflow-y-auto p-6">
        <div class="mb-8">
          <h1 class="text-2xl font-bold text-gray-800">Gestion des Salles</h1>
          <p class="text-gray-600">Créez et gérez vos espaces disponibles</p>
        </div>

        <!-- Form Card -->
        <div class="bg-white rounded-xl shadow-md p-6 mb-8 transition-all duration-300 card-hover">
          <h2 class="text-xl font-bold mb-6 text-gray-800 border-b pb-3">Ajouter une Salle</h2>
          <form action="/admin/salle" method="POST">
            @csrf
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
              <div>
                <label class="block text-gray-700 font-medium mb-2" for="name">Nom</label>
                <input class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none form-input bg-gray-50" id="name" name="name" type="text" />
              </div>
              <div>
                <label class="block text-gray-700 font-medium mb-2" for="description">Description</label>
                <input class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none form-input bg-gray-50" id="description" name="Description" type="text" />
              </div>
              <div>
                <label class="block text-gray-700 font-medium mb-2" for="picture">Image</label>
                <input class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none form-input bg-gray-50" id="picture" name="Picture" type="text" />
              </div>
              <div>
                <label class="block text-gray-700 font-medium mb-2" for="capacite">Capacité</label>
                <input class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none form-input bg-gray-50" id="capacite" name="capacité" type="text" />
              </div>
              <div>
                <label class="block text-gray-700 font-medium mb-2" for="type">Type</label>
                <input class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none form-input bg-gray-50" id="type" name="Type" type="text" />
              </div>
              <div class="flex items-end">
                <button class="px-6 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 transition-all duration-300 flex items-center" type="submit">
                  <i class="fas fa-plus-circle mr-2"></i> Ajouter la salle
                </button>
              </div>
            </div>
          </form>
        </div>

        <!-- Table Card -->
        <div class="bg-white rounded-xl shadow-md p-6 transition-all duration-300 card-hover">
          <div class="flex justify-between items-center mb-6 border-b pb-3">
            <h2 class="text-xl font-bold text-gray-800">Liste des Salles</h2>
            <div class="flex space-x-2">
              <button class="px-4 py-2 bg-gray-100 text-gray-700 rounded-lg hover:bg-gray-200 focus:outline-none transition-colors">
                <i class="fas fa-filter mr-2"></i> Filtrer
              </button>
              <button class="px-4 py-2 bg-blue-50 text-blue-600 rounded-lg hover:bg-blue-100 focus:outline-none transition-colors">
                <i class="fas fa-download mr-2"></i> Exporter
              </button>
            </div>
          </div>

          <div class="overflow-x-auto">
            <table class="min-w-full bg-white rounded-lg overflow-hidden">
              <thead class="bg-gray-50">
                <tr>
                  <th class="py-3 px-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nom</th>
                  <th class="py-3 px-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Description</th>
                  <th class="py-3 px-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Image</th>
                  <th class="py-3 px-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Capacité</th>
                  <th class="py-3 px-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Type</th>
                  <th class="py-3 px-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                </tr>
              </thead>
              <tbody class="divide-y divide-gray-200">
                @foreach($salles as $salle)
                <tr class="hover:bg-gray-50 transition-colors">
                  <td class="py-4 px-4 whitespace-nowrap">
                    <div class="font-medium text-gray-900">{{$salle->name}}</div>
                  </td>
                  <td class="py-4 px-4 whitespace-nowrap">
                    <div class="text-gray-600 truncate max-w-xs">{{$salle->Description}}</div>
                  </td> 
                  <td class="py-4 px-4 whitespace-nowrap">
                    <img alt="Image de la salle" class="w-16 h-16 object-cover rounded" src="{{$salle->Picture}}" />
                  </td>
                  <td class="py-4 px-4 whitespace-nowrap">
                    <div class="text-gray-600">{{$salle->capacité}} personnes</div>
                  </td>
                  <td class="py-4 px-4 whitespace-nowrap">
                    <span class="px-3 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-blue-100 text-blue-800">
                      {{$salle->Type}}
                    </span>
                  </td>
                  <td class="py-4 px-4 whitespace-nowrap text-sm">
                    <div class="flex space-x-4">
                            @csrf
                    <button type = "submit" name = "update">
                      <a href="/admin/salle/update/{{$salle->id}}" class="text-blue-600 hover:text-blue-900">
                      <input type="hidden" name="id_update" value ="{{$salle->id}}">
                        <i class="fas fa-edit"></i> 
                    </a>
                </button>
            </form>
        </div>
                      <!-- </a> -->
                       <form action="/admin/delete/salle" method = "POST">
                        @csrf
                        <button type = "submit" name = "delete">
                      <a href="/admin/delete/salle" class="text-red-600 hover:text-red-900">
                      <input type="hidden" name="id_delete" value ="{{$salle->id}}">
                        <i class="fas fa-trash"></i>
                      </a>
                      </button>
                      </form>
                    </div>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </main>
    </div>
  </div>
</body>
</html>