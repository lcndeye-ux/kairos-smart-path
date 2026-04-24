<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            👥 Groupes de Tutorat
        </h2>
    </x-slot>

    <div class="py-6 px-4">

        {{-- Formulaire création groupe --}}
        <div class="bg-white rounded-xl shadow p-6 mb-6">
            <h3 class="font-bold text-gray-700 mb-4">➕ Créer un groupe</h3>
            <form method="POST" action="/groups">
                @csrf
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="text-gray-600 text-sm">Nom du groupe</label>
                        <input type="text" name="name" placeholder="Ex: Laravel Experts"
                            class="w-full border rounded px-3 py-2 mt-1">
                    </div>
                    <div>
                        <label class="text-gray-600 text-sm">Matière</label>
                        <input type="text" name="subject" placeholder="Ex: PHP/Laravel"
                            class="w-full border rounded px-3 py-2 mt-1">
                    </div>
                    <div>
                        <label class="text-gray-600 text-sm">Horaire</label>
                        <input type="text" name="schedule" placeholder="Ex: Jeudi 14h"
                            class="w-full border rounded px-3 py-2 mt-1">
                    </div>
                    <div>
                        <label class="text-gray-600 text-sm">Type</label>
                        <select name="type" class="w-full border rounded px-3 py-2 mt-1">
                            <option value="tutorat">Tutorat</option>
                            <option value="revision">Révision</option>
                        </select>
                    </div>
                </div>
                <button type="submit"
                    class="mt-4 bg-blue-500 text-white px-6 py-2 rounded hover:bg-blue-600">
                    Créer le groupe
                </button>
            </form>
        </div>

        {{-- Liste des groupes --}}
        <div class="bg-white rounded-xl shadow p-6">
            <h3 class="font-bold text-gray-700 mb-4">📋 Groupes disponibles</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                @forelse($groups as $group)
                <div class="border rounded-xl p-4">
                    <h4 class="font-bold text-gray-700">{{ $group->name }}</h4>
                    <p class="text-gray-500 text-sm">📚 {{ $group->subject }}</p>
                    <p class="text-gray-500 text-sm">🕐 {{ $group->schedule }}</p>
                    <span class="text-xs bg-blue-100 text-blue-600 px-2 py-1 rounded mt-2 inline-block">
                        {{ $group->type }}
                    </span>
                </div>
                @empty
                <p class="text-gray-400 col-span-2 text-center py-4">
                    Aucun groupe créé pour l'instant
                </p>
                @endforelse
            </div>
        </div>

    </div>
</x-app-layout>