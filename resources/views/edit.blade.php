<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier un Étudiant</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-slate-50 font-sans antialiased">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-12">

        <!-- Header Section -->
        <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-10">
            <div>
                <h1 class="text-4xl font-extrabold text-slate-900 tracking-tight">
                    Modifier un <span class="text-gradient">Étudiant</span>
                </h1>
                <p class="mt-2 text-slate-600 text-lg">Mettez à jour les informations de l'étudiant.</p>
            </div>
            <div class="mt-6 md:mt-0">
                <a href="{{ route('index') }}"
                    class="inline-flex items-center px-6 py-3 border border-slate-300 text-base font-semibold rounded-xl shadow-sm text-slate-700 bg-white hover:bg-slate-50 transition-all duration-200 hover:-translate-y-0.5">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                    </svg>
                    Retour à la Liste
                </a>
            </div>
        </div>

        @if ($errors->any())
            <div class="mb-6 p-4 bg-red-50 border border-red-200 text-red-700 rounded-xl flex items-center shadow-sm">
                <svg class="w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd"
                        d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z"
                        clip-rule="evenodd"></path>
                </svg>
                <ul class="list-disc list-inside">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="card-modern p-8">
            <form action="{{ route('update', $student->id) }}" method="POST" class="space-y-6">
                @csrf
                @method('PUT')

                <div>
                    <label for="name" class="block text-sm font-semibold text-slate-700 mb-2 flex items-center">
                        <svg class="w-5 h-5 mr-2 text-indigo-600" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                        Nom complet
                    </label>
                    <input type="text"
                        class="w-full px-4 py-3 border border-slate-300 rounded-xl focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition-all duration-200 placeholder-slate-400"
                        id="name" name="name" value="{{ $student->name }}"
                        placeholder="Entrez le nom de l'étudiant" required>
                </div>

                <div>
                    <label for="email" class="block text-sm font-semibold text-slate-700 mb-2 flex items-center">
                        <svg class="w-5 h-5 mr-2 text-indigo-600" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                            </path>
                        </svg>
                        Adresse email
                    </label>
                    <input type="email"
                        class="w-full px-4 py-3 border border-slate-300 rounded-xl focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition-all duration-200 placeholder-slate-400"
                        id="email" name="email" value="{{ $student->email }}" placeholder="exemple@universite.com"
                        required>
                </div>

                <div class="flex justify-end space-x-4">
                    <a href="{{ route('index') }}"
                        class="px-6 py-3 border border-slate-300 text-slate-700 font-semibold rounded-xl hover:bg-slate-50 transition-all duration-200">
                        Annuler
                    </a>
                    <button type="submit"
                        class="inline-flex items-center px-6 py-3 border border-transparent text-base font-semibold rounded-xl shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 transition-all duration-200 hover:-translate-y-0.5">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                            </path>
                        </svg>
                        Mettre à Jour
                    </button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
