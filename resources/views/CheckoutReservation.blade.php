<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Réservation de Salle</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/js/all.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>
<body class="min-h-screen bg-gradient-to-br from-purple-50 to-purple-200 py-12 px-4">
    <div class="max-w-2xl mx-auto">
        <!-- Card Container -->
        <div class="bg-white rounded-2xl shadow-2xl overflow-hidden">
            <!-- Header -->
            <div class="bg-gradient-to-r from-purple-700 to-purple-900 p-8 text-center">
                <h1 class="text-4xl font-bold text-white">Demande de Réservation</h1>
                <p class="text-purple-100 mt-2">Sélectionnez la date et l'heure de votre réservation</p>
            </div>

            <!-- Form Content -->
            <div class="p-8 space-y-8">
                @if(session('error'))
                <li style="color:red;font-size:160%">{{session('error')}}</li>
                @endif
                <form id="reservationForm" action="/confirmation/reservation/{{$infos->id}}" method="POST" class="space-y-8">
                    @csrf
                    <!-- Date et heure de début -->
                    <div class="space-y-2">
                        <label class="flex items-center text-sm font-medium text-gray-700">
                            <i class="fas fa-calendar mr-2"></i>
                            Date et heure de début
                        </label>
                        <input name="datetime" type="datetime-local" id="startTime" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-purple-500 focus:border-purple-500 transition duration-150" required>
                    </div>

                    <!-- Durée -->
                    <div class="space-y-2">
                        <label class="flex items-center text-sm font-medium text-gray-700">
                            <i class="fas fa-clock mr-2"></i>
                            Durée
                        </label>
                        <select name="selecttime" id="duration" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-purple-500 focus:border-purple-500 transition duration-150">
                            <option value="00:30:00">30 minutes</option>
                            <option value="01:00:00">1 heure</option>
                            <option value="01:30:00">1 heure 30</option>
                            <option value="02:00:00" selected>2 heures</option>
                            <option value="03:00:00">3 heures</option>
                            <option value="04:00:00">4 heures</option>
                        </select>
                    </div>

                    <!-- Heure de fin (calculée) -->
                    <div class="bg-gray-50 rounded-lg p-4">
                        <div class="flex items-center justify-between text-sm">
                            <span class="flex items-center text-gray-600">
                                <i class="fas fa-clock mr-2"></i>
                                Heure de fin
                            </span>
                            <span id="endTime" class="font-medium text-gray-900">-</span>
                        </div>
                    </div>

                    <!-- Note -->
                    <div class="space-y-2">
                        <label class="flex items-center text-sm font-medium text-gray-700">
                            <i class="fas fa-comment-alt mr-2"></i>
                            Note (optionnel)
                        </label>
                        <textarea name="note" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-purple-500 focus:border-purple-500 transition duration-150" rows="4" placeholder="Ajoutez des informations complémentaires pour votre réservation..."></textarea>
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" class="w-full bg-purple-600 hover:bg-purple-700 text-white font-medium py-3 px-4 rounded-lg transition duration-150 flex items-center justify-center">
                        <i class="fas fa-paper-plane mr-2"></i>
                        Envoyer la demande
                    </button>
                </form>
            </div>

            <!-- Footer -->
            <div class="bg-gray-50 px-6 py-4 text-center text-sm text-gray-600">
                <p>Pour toute assistance, contactez le support au 01 23 45 67 89</p>
            </div>
        </div>
    </div>

    <script>
        function updateEndTime() {
            const startTimeInput = document.getElementById('startTime');
            const durationSelect = document.getElementById('duration');
            const endTimeDisplay = document.getElementById('endTime');

            startTimeInput.addEventListener('input', calculateEndTime);
            durationSelect.addEventListener('change', calculateEndTime);

            function calculateEndTime() {
                const startTime = new Date(startTimeInput.value);
                const duration = durationSelect.value.split(':');
                const endTime = new Date(startTime.getTime() + (parseInt(duration[0]) * 60 * 60 * 1000) + (parseInt(duration[1]) * 60 * 1000));
                endTimeDisplay.textContent = endTime.toLocaleTimeString([], { hour: '2-digit', minute: '2-digit' });
            }
        }

        document.addEventListener('DOMContentLoaded', updateEndTime);
    </script>
</body>
</html>