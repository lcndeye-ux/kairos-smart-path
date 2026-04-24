<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            🎓 Kairos Smart Path — Tableau de Bord
        </h2>
    </x-slot>

    <div class="py-6 px-4">

        {{-- Score de Réussite --}}
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
            <div class="bg-white rounded-xl shadow p-6 text-center">
                <h3 class="text-gray-500 text-sm mb-2">Score de Réussite Global</h3>
                <div class="text-5xl font-bold text-green-500">78%</div>
                <p class="text-green-400 text-sm mt-1">↗ En hausse</p>
            </div>
            <div class="bg-white rounded-xl shadow p-6 text-center">
                <h3 class="text-gray-500 text-sm mb-2">Moyenne Générale</h3>
                <div class="text-5xl font-bold text-blue-500">13.5</div>
                <p class="text-gray-400 text-sm mt-1">sur 20</p>
            </div>
            <div class="bg-white rounded-xl shadow p-6 text-center">
                <h3 class="text-gray-500 text-sm mb-2">Alertes</h3>
                <div class="text-5xl font-bold text-red-500">2</div>
                <p class="text-red-400 text-sm mt-1">matières en danger</p>
            </div>
        </div>

        {{-- Alertes et Tutorat --}}
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
            <div class="bg-white rounded-xl shadow p-6">
                <h3 class="font-bold text-gray-700 mb-4">🚨 Alertes Récentes</h3>
                <div class="flex items-center gap-2 text-red-500">
                    <span>●</span>
                    <span>Moyenne en Comptabilité &lt; 10/20</span>
                </div>
                <div class="flex items-center gap-2 text-orange-500 mt-2">
                    <span>●</span>
                    <span>3 absences en Statistiques</span>
                </div>
            </div>
            <div class="bg-white rounded-xl shadow p-6">
                <h3 class="font-bold text-gray-700 mb-4">👥 Groupes de Tutorat Suggérés</h3>
                <div class="flex justify-between items-center mb-2">
                    <span class="text-gray-600">PHP/Laravel — Jeu 14h</span>
                    <a href="#" class="bg-blue-500 text-white px-3 py-1 rounded text-sm">Rejoindre</a>
                </div>
                <div class="flex justify-between items-center">
                    <span class="text-gray-600">Statistiques — Mer 10h</span>
                    <a href="#" class="bg-blue-500 text-white px-3 py-1 rounded text-sm">Rejoindre</a>
                </div>
            </div>
        </div>

        {{-- Ressources --}}
        <div class="bg-white rounded-xl shadow p-6">
            <h3 class="font-bold text-gray-700 mb-4">📁 Ressources à Consulter</h3>
            <div class="flex gap-4">
                <a href="#" class="text-blue-500 underline">Annales PHP 2023 ↗</a>
                <a href="#" class="text-blue-500 underline">Support Cours Compta L2 ↗</a>
            </div>
        </div>

    </div>
</x-app-layout>