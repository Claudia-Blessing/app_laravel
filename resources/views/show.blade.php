<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détails de l'Étudiant</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-slate-50 font-sans antialiased">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-12">

        <!-- Header Section -->
        <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-10">
            <div>
                <h1 class="text-4xl font-extrabold text-slate-900 tracking-tight">
                    Détails de l'<span class="text-gradient">Étudiant</span>
                </h1>
                <p class="mt-2 text-slate-600 text-lg">Informations complètes sur l'étudiant sélectionné.</p>
            </div>
            <div class="mt-6 md:mt-0 flex space-x-4">
                <a href="{{ route('edit', $student->id) }}"
                    class="inline-flex items-center px-6 py-3 border border-slate-300 text-base font-semibold rounded-xl shadow-sm text-slate-700 bg-white hover:bg-slate-50 transition-all duration-200 hover:-translate-y-0.5">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z">
                        </path>
                    </svg>
                    Modifier
                </a>
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

        <div class="card-modern p-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="space-y-6">
                    <div class="flex items-center">
                        <div class="flex-shrink-0">
                            <div class="w-12 h-12 bg-indigo-100 rounded-xl flex items-center justify-center">
                                <svg class="w-6 h-6 text-indigo-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                </svg>
                            </div>
                        </div>
                        <div class="ml-4">
                            <dt class="text-sm font-semibold text-slate-700">Nom complet</dt>
                            <dd class="text-lg font-medium text-slate-900">{{ $student->name }}</dd>
                        </div>
                    </div>

                    <div class="flex items-center">
                        <div class="flex-shrink-0">
                            <div class="w-12 h-12 bg-indigo-100 rounded-xl flex items-center justify-center">
                                <svg class="w-6 h-6 text-indigo-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                    </path>
                                </svg>
                            </div>
                        </div>
                        <div class="ml-4">
                            <dt class="text-sm font-semibold text-slate-700">Adresse email</dt>
                            <dd class="text-lg font-medium text-slate-900">{{ $student->email }}</dd>
                        </div>
                    </div>
                </div>

                <div class="bg-slate-50 rounded-xl p-6">
                    <h3 class="text-lg font-semibold text-slate-900 mb-4">Actions disponibles</h3>
                    <div class="space-y-3">
                        <a href="{{ route('edit', $student->id) }}"
                            class="block w-full text-left px-4 py-3 bg-white border border-slate-200 rounded-lg hover:bg-slate-50 transition-all duration-200 hover:shadow-sm">
                            <div class="flex items-center">
                                <svg class="w-5 h-5 mr-3 text-indigo-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z">
                                    </path>
                                </svg>
                                Modifier les informations
                            </div>
                        </a>
                        <form action="{{ route('destroy', $student->id) }}" method="POST" class="block"
                            onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer cet étudiant ?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                class="w-full text-left px-4 py-3 bg-red-50 border border-red-200 rounded-lg hover:bg-red-100 transition-all duration-200 hover:shadow-sm">
                                <div class="flex items-center">
                                    <svg class="w-5 h-5 mr-3 text-red-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16">
                                        </path>
                                    </svg>
                                    Supprimer l'étudiant
                                </div>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
