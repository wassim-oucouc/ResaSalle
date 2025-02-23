<html lang="fr">
 <head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
  <title>
   Suivi des Réservations
  </title>
  <script src="https://cdn.tailwindcss.com">
  </script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet"/>
  <script>
   tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#2A4365',
                        secondary: '#4A5568',
                        accent: '#ED8936',
                    },
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    },
                }
            }
        }
  </script>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet"/>
 </head>
 <body class="min-h-screen bg-gradient-to-br from-gray-50 to-gray-100">
  <header class="bg-white shadow-lg">
   <div class="container mx-auto">
    <div class="flex justify-between items-center py-4 px-6">
     <div class="flex items-center space-x-8">
      <h1 class="text-3xl font-bold text-primary">
       <i class="fas fa-building mr-2">
       </i>
       Réservation
      </h1>
      <nav class="hidden md:flex space-x-1">
       <a class="px-4 py-2 rounded-full text-gray-600 hover:bg-gray-100 transition-all" href="#">
        <i class="fas fa-home mr-2">
        </i>
        Accueil
       </a>
       <a class="px-4 py-2 rounded-full text-gray-600 hover:bg-gray-100 transition-all" href="#">
        <i class="fas fa-door-open mr-2">
        </i>
        Salles
       </a>
       <a class="px-4 py-2 rounded-full text-gray-600 hover:bg-gray-100 transition-all" href="#">
        <i class="fas fa-calendar-alt mr-2">
        </i>
        Réservations
       </a>
       <a class="px-4 py-2 rounded-full text-gray-600 hover:bg-gray-100 transition-all" href="#">
        <i class="fas fa-envelope mr-2">
        </i>
        Contact
       </a>
      </nav>
     </div>
     <button class="md:hidden text-gray-600">
      <i class="fas fa-bars text-2xl">
      </i>
     </button>
    </div>
   </div>
  </header>
  <main class="container mx-auto px-4 py-8">
   <section class="mb-12">
    <div class="flex items-center justify-between mb-8">
     <h2 class="text-2xl font-bold text-primary">
      <i class="fas fa-calendar-check mr-2">
      </i>
      Suivi des Réservations
     </h2>
    </div>
    <div class="bg-white rounded-2xl shadow-xl p-8 border border-gray-100">
     <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
      <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
       <div class="relative">
        <img alt="Image d'une salle de réunion moderne" class="w-full h-56 object-cover" height="400" src="https://storage.googleapis.com/a1aa/image/AdjxV5dtzNChM7-xE3tA7d8QmVYQ6tCggjrAMvzcbUM.jpg" width="600"/>
        <div class="absolute top-4 right-4 bg-white rounded-full px-4 py-1 text-sm font-semibold text-primary shadow">
         Salle de réunion
        </div>
       </div>
       <div class="p-6">
        <h3 class="text-xl font-bold text-gray-800 mb-2">
         Salle A
        </h3>
        <div class="flex items-center text-gray-600 mb-4">
         <i class="fas fa-users mr-2">
         </i>
         <span>
          20 personnes
         </span>
        </div>
        <div class="flex items-center text-gray-600 mb-4">
         <i class="fas fa-calendar-alt mr-2">
         </i>
         <span>
          Réservé pour le 2023-10-15
         </span>
        </div>
        <div class="flex items-center text-gray-600 mb-4">
         <i class="fas fa-info-circle mr-2">
         </i>
         <span>
          Status: Confirmé
         </span>
        </div>
        <button class="w-full bg-red-500 text-white text-center py-3 rounded-xl hover:bg-red-600 transform hover:scale-[1.02] transition-all duration-200">
         <i class="fas fa-times mr-2">
         </i>
         Annuler
        </button>
       </div>
      </div>
      <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
       <div class="relative">
        <img alt="Image d'une salle de conférence moderne" class="w-full h-56 object-cover" height="400" src="https://storage.googleapis.com/a1aa/image/gfSgtMRVU4blEUB0aenTqeIA_bxuaAQjOxJuMZ6u_VA.jpg" width="600"/>
        <div class="absolute top-4 right-4 bg-white rounded-full px-4 py-1 text-sm font-semibold text-primary shadow">
         Salle de conférence
        </div>
       </div>
       <div class="p-6">
        <h3 class="text-xl font-bold text-gray-800 mb-2">
         Salle B
        </h3>
        <div class="flex items-center text-gray-600 mb-4">
         <i class="fas fa-users mr-2">
         </i>
         <span>
          50 personnes
         </span>
        </div>
        <div class="flex items-center text-gray-600 mb-4">
         <i class="fas fa-calendar-alt mr-2">
         </i>
         <span>
          Réservé pour le 2023-10-20
         </span>
        </div>
        <div class="flex items-center text-gray-600 mb-4">
         <i class="fas fa-info-circle mr-2">
         </i>
         <span>
          Status: En attente
         </span>
        </div>
        <button class="w-full bg-red-500 text-white text-center py-3 rounded-xl hover:bg-red-600 transform hover:scale-[1.02] transition-all duration-200">
         <i class="fas fa-times mr-2">
         </i>
         Annuler
        </button>
       </div>
      </div>
      <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
       <div class="relative">
        <img alt="Image d'une salle de formation moderne" class="w-full h-56 object-cover" height="400" src="https://storage.googleapis.com/a1aa/image/AWqHNTgYBwcPR_EjgqggEbfnF4L_0oUHWB2uYtsb3QQ.jpg" width="600"/>
        <div class="absolute top-4 right-4 bg-white rounded-full px-4 py-1 text-sm font-semibold text-primary shadow">
         Salle de formation
        </div>
       </div>
       <div class="p-6">
        <h3 class="text-xl font-bold text-gray-800 mb-2">
         Salle C
        </h3>
        <div class="flex items-center text-gray-600 mb-4">
         <i class="fas fa-users mr-2">
         </i>
         <span>
          30 personnes
         </span>
        </div>
        <div class="flex items-center text-gray-600 mb-4">
         <i class="fas fa-calendar-alt mr-2">
         </i>
         <span>
          Réservé pour le 2023-10-25
         </span>
        </div>
        <div class="flex items-center text-gray-600 mb-4">
         <i class="fas fa-info-circle mr-2">
         </i>
         <span>
          Status: Confirmé
         </span>
        </div>
        <button class="w-full bg-red-500 text-white text-center py-3 rounded-xl hover:bg-red-600 transform hover:scale-[1.02] transition-all duration-200">
         <i class="fas fa-times mr-2">
         </i>
         Annuler
        </button>
       </div>
      </div>
      <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
       <div class="relative">
        <img alt="Image d'une salle de réunion moderne" class="w-full h-56 object-cover" height="400" src="https://storage.googleapis.com/a1aa/image/AdjxV5dtzNChM7-xE3tA7d8QmVYQ6tCggjrAMvzcbUM.jpg" width="600"/>
        <div class="absolute top-4 right-4 bg-white rounded-full px-4 py-1 text-sm font-semibold text-primary shadow">
         Salle de réunion
        </div>
       </div>
       <div class="p-6">
        <h3 class="text-xl font-bold text-gray-800 mb-2">
         Salle D
        </h3>
        <div class="flex items-center text-gray-600 mb-4">
         <i class="fas fa-users mr-2">
         </i>
         <span>
          15 personnes
         </span>
        </div>
        <div class="flex items-center text-gray-600 mb-4">
         <i class="fas fa-calendar-alt mr-2">
         </i>
         <span>
          Réservé pour le 2023-10-30
         </span>
        </div>
        <div class="flex items-center text-gray-600 mb-4">
         <i class="fas fa-info-circle mr-2">
         </i>
         <span>
          Status: Confirmé
         </span>
        </div>
        <button class="w-full bg-red-500 text-white text-center py-3 rounded-xl hover:bg-red-600 transform hover:scale-[1.02] transition-all duration-200">
         <i class="fas fa-times mr-2">
         </i>
         Annuler
        </button>
       </div>
      </div>
      <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
       <div class="relative">
        <img alt="Image d'une salle de conférence moderne" class="w-full h-56 object-cover" height="400" src="https://storage.googleapis.com/a1aa/image/gfSgtMRVU4blEUB0aenTqeIA_bxuaAQjOxJuMZ6u_VA.jpg" width="600"/>
        <div class="absolute top-4 right-4 bg-white rounded-full px-4 py-1 text-sm font-semibold text-primary shadow">
         Salle de conférence
        </div>
       </div>
       <div class="p-6">
        <h3 class="text-xl font-bold text-gray-800 mb-2">
         Salle E
        </h3>
        <div class="flex items-center text-gray-600 mb-4">
         <i class="fas fa-users mr-2">
         </i>
         <span>
          40 personnes
         </span>
        </div>
        <div class="flex items-center text-gray-600 mb-4">
         <i class="fas fa-calendar-alt mr-2">
         </i>
         <span>
          Réservé pour le 2023-11-05
         </span>
        </div>
        <div class="flex items-center text-gray-600 mb-4">
         <i class="fas fa-info-circle mr-2">
         </i>
         <span>
          Status: En attente
         </span>
        </div>
        <button class="w-full bg-red-500 text-white text-center py-3 rounded-xl hover:bg-red-600 transform hover:scale-[1.02] transition-all duration-200">
         <i class="fas fa-times mr-2">
         </i>
         Annuler
        </button>
       </div>
      </div>
      <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
       <div class="relative">
        <img alt="Image d'une salle de formation moderne" class="w-full h-56 object-cover" height="400" src="https://storage.googleapis.com/a1aa/image/AWqHNTgYBwcPR_EjgqggEbfnF4L_0oUHWB2uYtsb3QQ.jpg" width="600"/>
        <div class="absolute top-4 right-4 bg-white rounded-full px-4 py-1 text-sm font-semibold text-primary shadow">
         Salle de formation
        </div>
       </div>
       <div class="p-6">
        <h3 class="text-xl font-bold text-gray-800 mb-2">
         Salle F
        </h3>
        <div class="flex items-center text-gray-600 mb-4">
         <i class="fas fa-users mr-2">
         </i>
         <span>
          25 personnes
         </span>
        </div>
        <div class="flex items-center text-gray-600 mb-4">
         <i class="fas fa-calendar-alt mr-2">
         </i>
         <span>
          Réservé pour le 2023-11-10
         </span>
        </div>
        <div class="flex items-center text-gray-600 mb-4">
         <i class="fas fa-info-circle mr-2">
         </i>
         <span>
          Status: Confirmé
         </span>
        </div>
        <button class="w-full bg-red-500 text-white text-center py-3 rounded-xl hover:bg-red-600 transform hover:scale-[1.02] transition-all duration-200">
         <i class="fas fa-times mr-2">
         </i>
         Annuler
        </button>
       </div>
      </div>
     </div>
    </div>
   </section>
  </main>
  <footer class="bg-primary text-white mt-16">
   <div class="container mx-auto px-6 py-8">
    <div class="text-center">
     <p class="text-sm">
      © 2023 Réservation de Salles. Tous droits réservés.
     </p>
    </div>
   </div>
  </footer>
 </body>
</html>
