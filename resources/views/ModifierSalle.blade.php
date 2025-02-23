<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <title>Modifier une Salle - Dashboard Admin</title>
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
        <div class="flex items-center mb-8">
          <a href="#" class="mr-4 text-blue-600 hover:text-blue-800">
            <i class="fas fa-arrow-left"></i>
          </a>
          <div>
            <h1 class="text-2xl font-bold text-gray-800">Modifier une Salle</h1>
            <p class="text-gray-600">Mise à jour des informations de la salle</p>
          </div>
        </div>

        <!-- Edit Form Card -->
        <div class="bg-white rounded-xl shadow-md p-6 mb-8 transition-all duration-300 card-hover">
          <div class="border-b pb-4 mb-6 flex justify-between items-center">
            <h2 class="text-xl font-bold text-gray-800">Informations de la Salle</h2>
            <span class="px-3 py-1 text-xs font-semibold rounded-full bg-blue-100 text-blue-800">
              ID: 123
            </span>
          </div>

          <form action="/admin/salle/update/{{$salle->id}}" method="post">
            @csrf
            @method('PUT')
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
              <div>
                <label class="block text-gray-700 font-medium mb-2" for="name">Nom</label>
                <input class="nametitle w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none form-input bg-gray-50" 
                       id="name" 
                       name="name" 
                       type="text"
                       value = "{{$salle->name}}"/>
              </div>
              
              <div>
                <label class="block text-gray-700 font-medium mb-2" for="description">Description</label>
                <input class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none form-input bg-gray-50" 
                       id="description" 
                       name="Description" 
                       type="text" 
                       value = "{{$salle->Description}}"/>
                       >
              </div>
              
              <div class="md:col-span-2">
                <label class="block text-gray-700 font-medium mb-2" for="picture">Image</label>
                <div class="flex items-center space-x-4">
                  <div class="flex-shrink-0">
                    <img src="/api/placeholder/400/320" alt="Aperçu de l'image" class="w-16 h-16 object-cover rounded-lg border border-gray-200" />
                  </div>
                  <input class="flex-1 px-4 py-3 border border-gray-300 rounded-lg focus:outline-none form-input bg-gray-50" 
                         id="picture" 
                         name="Picture" 
                         type="text"
                         value = "{{$salle->Picture}}"/>
                </div>
              </div>
              
              <div>
                <label class="block text-gray-700 font-medium mb-2" for="capacite">Capacité</label>
                <input class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none form-input bg-gray-50" 
                       id="capacite" 
                       name="capacité" 
                       type="text"
                        value = "{{$salle->capacité}}"
                       />
              </div>
              
              <div>
                <label class="block text-gray-700 font-medium mb-2" for="type">Type</label>
                <input class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none form-input bg-gray-50" 
                       id="type" 
                       name="Type" 
                       type="text"
                        value = "{{$salle->Type}}"
                       />
              </div>
            </div>
            <div class="mt-8 border-t pt-6 flex justify-between">      
              <div class="flex space-x-3">
              <button type="submit" name ="send" class="px-6 py-3 bg-blue-600 text-white rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 transition-all duration-300 flex items-center" value="send">Enregistrer
              </div>
            </div>
          </form>
        </div>
        
        <!-- Preview Card -->
        <div class="bg-white rounded-xl shadow-md p-6 transition-all duration-300 card-hover">
          <h2 class="text-xl font-bold mb-6 text-gray-800 border-b pb-3">Aperçu de la Salle</h2>
          
          <div class="flex flex-col md:flex-row">
            <div class="md:w-1/3 p-4">
              <img src="/api/placeholder/400/320" alt="Aperçu de la salle" class="w-full h-64 object-cover rounded-xl shadow-md mb-4" />
            </div>
            
            <div class="md:w-2/3 p-4">
              <h3 id = "title"class="title text-2xl font-bold text-gray-800 mb-2">Salle de Conférence A</h3>
              <div class="flex items-center mb-4">
                <span class="px-3 py-1 inline-flex text-sm leading-5 font-semibold rounded-full bg-blue-100 text-blue-800 mr-2">
                  Conférence
                </span>
                <span class="flex items-center text-gray-600">
                  <i class="fas fa-users mr-1"></i> 50 personnes
                </span>
              </div>
              
              <p class="text-gray-600 mb-6">Grande salle équipée de matériel audiovisuel moderne pour conférences et présentations.</p>
              
              <div class="bg-gray-50 p-4 rounded-lg">
                <h4 class="font-medium text-gray-700 mb-2">Disponibilité récente</h4>
                <div class="grid grid-cols-7 gap-2">
                  <div class="text-center p-2 rounded bg-green-100 text-green-800">Lun</div>
                  <div class="text-center p-2 rounded bg-green-100 text-green-800">Mar</div>
                  <div class="text-center p-2 rounded bg-red-100 text-red-800">Mer</div>
                  <div class="text-center p-2 rounded bg-red-100 text-red-800">Jeu</div>
                  <div class="text-center p-2 rounded bg-green-100 text-green-800">Ven</div>
                  <div class="text-center p-2 rounded bg-green-100 text-green-800">Sam</div>
                  <div class="text-center p-2 rounded bg-green-100 text-green-800">Dim</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </main>
    </div>
  </div>
</body>
<script>
let title = document.querySelector('.nametitle');
let affect = document.getElementById('title');
console.log(affect);

title.addEventListener("input", function () {
  affect.textContent = title.value;
});



</script>
</html>