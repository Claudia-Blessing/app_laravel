<!DOCTYPE html>
<html>

<head>
    <title>Annuaire des Étudiants</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-slate-50 font-sans antialiased">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">

        <!-- Header Section -->
        <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-10">
            <div>
                <h1 class="text-4xl font-extrabold text-slate-900 tracking-tight">
                    Annuaire des <span class="text-gradient">Étudiants</span>
                </h1>
                <p class="mt-2 text-slate-600 text-lg">Gérez efficacement les inscriptions et le suivi académique.</p>
            </div>
            <div class="mt-6 md:mt-0">
                <a href="{{ route('create') }}"
                    class="inline-flex items-center px-6 py-3 border border-transparent text-base font-semibold rounded-xl shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 transition-all duration-200 hover:-translate-y-0.5">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                    </svg>
                    Nouvel Étudiant
                </a>
            </div>
        </div>

        @if ($message = Session::get('success'))
            <div
                class="mb-6 p-4 bg-emerald-50 border border-emerald-200 text-emerald-700 rounded-xl flex items-center shadow-sm">
                <svg class="w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd"
                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                        clip-rule="evenodd"></path>
                </svg>
                {{ $message }}
            </div>
        @endif

        <div class="card-modern overflow-hidden">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="bg-slate-50 border-b border-slate-200">
                        <th class="px-6 py-4 text-sm font-semibold text-slate-700 uppercase tracking-wider">Nom</th>
                        <th class="px-6 py-4 text-sm font-semibold text-slate-700 uppercase tracking-wider">Email</th>
                        <th class="px-6 py-4 text-sm font-semibold text-slate-700 uppercase tracking-wider text-right">
                            Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100">
                    @foreach ($students as $student)
                        <tr class="hover:bg-slate-50/50 transition-colors">
                            <td class="px-6 py-4 text-slate-900 font-medium">{{ $student->name }}</td>
                            <td class="px-6 py-4 text-slate-600">{{ $student->email }}</td>
                            <td class="px-6 py-4 text-right space-x-2">
                                <form action="{{ route('destroy', $student->id) }}" method="POST"
                                    class="inline-flex items-center space-x-2">
                                    <a class="text-indigo-600 hover:text-indigo-900 font-medium px-3 py-1 rounded-lg hover:bg-indigo-50 transition-colors"
                                        href="{{ route('show', $student->id) }}">Voir</a>
                                    <a class="text-amber-600 hover:text-amber-900 font-medium px-3 py-1 rounded-lg hover:bg-amber-50 transition-colors"
                                        href="{{ route('edit', $student->id) }}">Modifier</a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="text-rose-600 hover:text-rose-900 font-medium px-3 py-1 rounded-lg hover:bg-rose-50 transition-colors">Supprimer</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>
