<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            📝 Mes Notes
        </h2>
    </x-slot>

    <div class="py-6 px-4">

        {{-- Formulaire ajout note --}}
        <div class="bg-white rounded-xl shadow p-6 mb-6">
            <h3 class="font-bold text-gray-700 mb-4">➕ Ajouter une note</h3>
            <form method="POST" action="/grades">
                @csrf
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="text-gray-600 text-sm">Matière</label>
                        <input type="text" name="subject" placeholder="Ex: PHP/Laravel"
                            class="w-full border rounded px-3 py-2 mt-1">
                    </div>
                    <div>
                        <label class="text-gray-600 text-sm">Note /20</label>
                        <input type="number" name="note" min="0" max="20" step="0.5"
                            class="w-full border rounded px-3 py-2 mt-1">
                    </div>
                    <div>
                        <label class="text-gray-600 text-sm">Coefficient</label>
                        <input type="number" name="coefficient" min="1" max="5"
                            class="w-full border rounded px-3 py-2 mt-1">
                    </div>
                    <div>
                        <label class="text-gray-600 text-sm">Absences</label>
                        <input type="number" name="absences" min="0"
                            class="w-full border rounded px-3 py-2 mt-1">
                    </div>
                </div>
                <button type="submit"
                    class="mt-4 bg-blue-500 text-white px-6 py-2 rounded hover:bg-blue-600">
                    Enregistrer
                </button>
            </form>
        </div>

        {{-- Liste des notes --}}
        <div class="bg-white rounded-xl shadow p-6">
            <h3 class="font-bold text-gray-700 mb-4">📊 Mes Notes</h3>
            <table class="w-full text-left">
                <thead>
                    <tr class="text-gray-500 text-sm border-b">
                        <th class="pb-2">Matière</th>
                        <th class="pb-2">Note</th>
                        <th class="pb-2">Coefficient</th>
                        <th class="pb-2">Absences</th>
                        <th class="pb-2">Statut</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($grades as $grade)
                    <tr class="border-b text-gray-700">
                        <td class="py-2">{{ $grade->subject }}</td>
                        <td class="py-2">{{ $grade->note }}/20</td>
                        <td class="py-2">{{ $grade->coefficient }}</td>
                        <td class="py-2">{{ $grade->absences }}</td>
                        <td class="py-2">
                            @if($grade->note >= 10)
                                <span class="text-green-500">✅ Admis</span>
                            @else
                                <span class="text-red-500">❌ En danger</span>
                            @endif
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5" class="py-4 text-center text-gray-400">
                            Aucune note enregistrée
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

    </div>
</x-app-layout>