<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demande en cours</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body class="bg-gray-50">
    <div class="container mx-auto px-4 py-8 max-w-2xl">
        <div class="text-center mb-8">
            <h1 class="text-3xl font-bold mb-2">Demande en cours de traitement</h1>
            <p class="text-gray-600">Nous examinons votre demande de réservation</p>
        </div>

        <div class="bg-white rounded-lg shadow-lg p-8">
            <div class="flex justify-center mb-6">
                <div class="text-blue-500">
                    <i class="fas fa-hourglass-half text-6xl"></i>
                </div>
            </div>

            <h2 class="text-2xl font-semibold text-center mb-6">
                Votre demande a été envoyée avec succès
            </h2>

            <div class="bg-blue-50 rounded-lg p-6 mb-8">
                <div class="flex items-center mb-4">
                    <i class="fas fa-info-circle text-blue-500 mr-2"></i>
                    <h3 class="text-xl font-medium">Prochaines étapes</h3>
                </div>
                <p class="text-gray-700 mb-3">
                    Un administrateur examinera votre demande dans les plus brefs délais.
                </p>
                <p class="text-gray-700">
                    Vous recevrez une notification par email dès validation de votre réservation.
                </p>
            </div>

            <div class="text-center">
                <a href="/salles/home" class="inline-flex items-center px-6 py-3 bg-blue-500 text-white font-medium rounded-lg hover:bg-blue-600 transition-colors">
                    <i class="fas fa-home mr-2"></i>
                    Retour à l'accueil
                </a>
            </div>
        </div>
    </div>
</body>
</html>