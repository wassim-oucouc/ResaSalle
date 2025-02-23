<html lang="fr">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Se connecter</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
</head>
<body class="bg-white">
    <div class="flex flex-col lg:flex-row min-h-screen">
        <!-- Left Image Section -->
        <div class="lg:w-1/2 flex items-center justify-center p-4">
            <img alt="Image de connexion avec des personnes utilisant des ordinateurs" class="rounded-lg" height="800" src="https://storage.googleapis.com/a1aa/image/tvdFei836HEbyFy-BD2RKE4UfF90C-efVzrepWHeZ9o.jpg" width="600"/>
        </div>
        <!-- Right Form Section -->
        <div class="lg:w-1/2 flex flex-col justify-center p-8">
            <div class="flex justify-end mb-4">
                <a class="text-sm text-gray-600" href="#">
                    Vous n'avez pas de compte ?
                    <span class="text-black font-semibold">Créer un compte</span>
                </a>
            </div>
            <div class="max-w-md mx-auto">
                <h1 class="text-2xl font-bold mb-4">Se connecter</h1>
                @foreach($errors->all() as $error)
                <li style="color:red">{{$error}}</li>
                @endforeach
                <form id="loginForm" action="/login" method="POST">
                    @csrf
                    <input class="w-full py-2 px-4 mb-4 border border-gray-300 rounded" placeholder="Adresse e-mail" type="email" id="email" name="Email" required/>
                    <div class="relative mb-4">
                        <input class="w-full py-2 px-4 border border-gray-300 rounded" placeholder="Mot de passe" type="password" id="password" name="Password" required/>
                        <i class="fas fa-eye absolute right-4 top-3 text-gray-500"></i>
                    </div>
                    <div class="flex justify-between mb-4">
                        <div>
                            <input type="checkbox" id="remember" name="remember" class="mr-2"/>
                            <label for="remember" class="text-sm text-gray-600">Se souvenir de moi</label>
                        </div>
                        <a href="#" class="text-sm text-blue-600 hover:underline">Mot de passe oublié ?</a>
                    </div>
                    <button type="submit" class="w-full py-2 px-4 bg-blue-800 text-white font-semibold rounded-md shadow-sm hover:bg-blue-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">Se connecter</button>
                    <div class="text-center text-sm text-gray-500 mt-4">
                        <p>En vous connectant, vous acceptez nos <a href="#" class="text-blue-600 hover:underline">Conditions d'utilisation</a> et notre <a href="#" class="text-blue-600 hover:underline">Politique de confidentialité</a></p>
                    </div>
                </form>
                <div class="text-center text-gray-600 mb-4">
                    ou continuez avec
                </div>
                <div class="flex justify-center space-x-4">
                    <button class="flex items-center space-x-2 py-2 px-4 border border-gray-300 rounded-full">
                        <img alt="Google logo" class="h-5" height="20" src="https://storage.googleapis.com/a1aa/image/bm0sTmE8tm6K13NM469DDoPfzYswz6t5FN8k3z6Yj0E.jpg" width="20"/>
                        <span>Google</span>
                    </button>
                    <button class="flex items-center space-x-2 py-2 px-4 border border-gray-300 rounded-full">
                        <img alt="Facebook logo" class="h-5" height="20" src="https://storage.googleapis.com/a1aa/image/vDuytLGBc_MTfphtUIvTUSqPVmyKEQNrotg2HloqEYo.jpg" width="20"/>
                        <span>Facebook</span>
                    </button>
                    <button class="flex items-center space-x-2 py-2 px-4 border border-gray-300 rounded-full">
                        <img alt="Apple logo" class="h-5" height="20" src="https://storage.googleapis.com/a1aa/image/lKMTsRRLTJL3M73w74MexYP_zildIeGwB89OtCFcmys.jpg" width="20"/>
                        <span>Apple</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>