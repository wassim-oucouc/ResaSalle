<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Réservation de Salles</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
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
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet" />
</head>
<body class="min-h-screen bg-gradient-to-br from-gray-50 to-gray-100">
    <header class="bg-white shadow-lg">
        <div class="container mx-auto">
            <div class="flex justify-between items-center py-4 px-6">
                <div class="flex items-center space-x-8">
                    <h1 class="text-3xl font-bold text-primary">
                        <i class="fas fa-building mr-2"></i>
                        Réservation
                    </h1>
                    <nav class="hidden md:flex space-x-1">
                        <a href="#" class="px-4 py-2 rounded-full text-gray-600 hover:bg-gray-100 transition-all">
                            <i class="fas fa-home mr-2"></i>Accueil
                        </a>
                        <a href="#" class="px-4 py-2 rounded-full text-gray-600 hover:bg-gray-100 transition-all">
                            <i class="fas fa-door-open mr-2"></i>Salles
                        </a>
                        <a href="#" class="px-4 py-2 rounded-full text-gray-600 hover:bg-gray-100 transition-all">
                            <i class="fas fa-calendar-alt mr-2"></i>Réservations
                        </a>
                        <a href="#" class="px-4 py-2 rounded-full text-gray-600 hover:bg-gray-100 transition-all">
                            <i class="fas fa-envelope mr-2"></i>Contact
                        </a>
                    </nav>
                </div>
                <button class="md:hidden text-gray-600">
                    <i class="fas fa-bars text-2xl"></i>
                </button>
            </div>
        </div>
    </header>

    <main class="container mx-auto px-4 py-8">
        <section class="mb-12">
            <div class="flex items-center justify-between mb-8">
                <h2 class="text-2xl font-bold text-primary">
                    <i class="fas fa-search mr-2"></i>Rechercher une Salle
                </h2>
            </div>
            <form class="bg-white rounded-2xl shadow-xl p-8 border border-gray-100">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div class="space-y-2">
                        <label for="location" class="block text-sm font-medium text-gray-700">
                            <i class="fas fa-map-marker-alt mr-2"></i>Lieu
                        </label>
                        <div class="relative">
                            <input type="text" id="location" placeholder="Entrez le lieu" 
                                class="w-full pl-4 pr-10 py-3 border-2 border-gray-200 rounded-xl focus:ring-2 focus:ring-primary focus:border-transparent transition-all" />
                            <i class="fas fa-search absolute right-4 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
                        </div>
                    </div>
                    <div class="space-y-2">
                        <label for="date" class="block text-sm font-medium text-gray-700">
                            <i class="fas fa-calendar mr-2"></i>Date
                        </label>
                        <input type="date" id="date" 
                            class="w-full pl-4 pr-10 py-3 border-2 border-gray-200 rounded-xl focus:ring-2 focus:ring-primary focus:border-transparent transition-all" />
                    </div>
                    <div class="space-y-2">
                        <label for="capacity" class="block text-sm font-medium text-gray-700">
                            <i class="fas fa-users mr-2"></i>Capacité
                        </label>
                        <input type="number" id="capacity" placeholder="Nombre de personnes"
                            class="w-full pl-4 pr-10 py-3 border-2 border-gray-200 rounded-xl focus:ring-2 focus:ring-primary focus:border-transparent transition-all" />
                    </div>
                    <div class="space-y-2">
                        <label for="type" class="block text-sm font-medium text-gray-700">
                            <i class="fas fa-door-closed mr-2"></i>Type de Salle
                        </label>
                        <select id="type" 
                            class="w-full pl-4 pr-10 py-3 border-2 border-gray-200 rounded-xl focus:ring-2 focus:ring-primary focus:border-transparent transition-all">
                            <option>Salle de réunion</option>
                            <option>Salle de conférence</option>
                            <option>Salle de formation</option>
                        </select>
                    </div>
                </div>
                <div class="mt-8">
                    <button type="submit" 
                        class="w-full bg-primary text-white py-4 rounded-xl hover:bg-primary/90 transform hover:scale-[1.02] transition-all duration-200 shadow-lg hover:shadow-xl">
                        <i class="fas fa-search mr-2"></i>Rechercher
                    </button>
                </div>
            </form>
        </section>

        <section>
            <div class="flex items-center justify-between mb-8">
                <h2 class="text-2xl font-bold text-primary">
                    <i class="fas fa-building mr-2"></i>Salles Disponibles
                </h2>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($salles as $salle)
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
                    <div class="relative">
                        <img src="https://storage.googleapis.com/a1aa/image/VWz5TBrVGgz51ftppUtSR0jsTT-wci7-sgRFF8WOZUQ.jpg" 
                            alt="Image d'une salle de réunion moderne" 
                            class="w-full h-56 object-cover" />
                        <div class="absolute top-4 right-4 bg-white rounded-full px-4 py-1 text-sm font-semibold text-primary shadow">
                            {{$salle->Type}}
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-2">{{$salle->name}}</h3>
                        <div class="flex items-center text-gray-600 mb-4">
                            <i class="fas fa-users mr-2"></i>
                            <span>{{$salle->capacité}} personnes</span>
                        </div>
                        <a href="/confirmation/reservation/{{$salle->id}}" 
                            class="block w-full bg-primary text-white text-center py-3 rounded-xl hover:bg-primary/90 transform hover:scale-[1.02] transition-all duration-200">
                            <i class="fas fa-calendar-check mr-2"></i>Réserver
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </section>
    </main>

    <footer class="bg-primary text-white mt-16">
        <div class="container mx-auto px-6 py-8">
            <div class="text-center">
                <p class="text-sm">© 2023 Réservation de Salles. Tous droits réservés.</p>
            </div>
        </div>
    </footer>
</body>
</html>