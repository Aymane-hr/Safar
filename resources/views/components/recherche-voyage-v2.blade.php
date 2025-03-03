<section class="container mx-auto mt-10 p-6 bg-white shadow-lg rounded-lg">
    <h2 class="text-center text-gray-900 font-bold text-2xl">Partez à l’aventure <span class="text-red-500">en quelques clics !</span></h2>
<p class="text-center text-gray-600">Trouvez le meilleur trajet, comparez les offres et réservez votre place parmi +60 compagnies de transport.</p>


    <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mt-6">
        <div>
            <label class="block font-medium text-gray-700">Départ</label>
            <select class="w-full p-2 border rounded-md text-gray-900 !important" id="depart">
                <option>Ville de départ</option>
            </select>
        </div>
        <div>
            <label class="block font-medium text-gray-700">Arrivée</label>
            <select class="w-full p-2 border rounded-md text-gray-900 !important" id="arrivee">
                <option>Ville d'arrivée</option>
            </select>
        </div>
        <div>
            <label class="block font-medium text-gray-700">Date de voyage</label>
            <input type="date" class="w-full p-2 border rounded-md text-gray-900 !important" id="date">
        </div>
        <div>
            <label class="block font-medium text-gray-700 !important">Voyageurs</label>
            <select class="w-full p-2 border rounded-md text-gray-900 !important" id="voyageurs">
                <option>1 personne</option>
                <option>2 personnes</option>
                <option>3 personnes</option>
            </select>
        </div>
    </div>

    <div class="text-center mt-6">
        <button class="bg-red-500 text-white px-6 py-2 rounded-md text-lg hover:bg-red-700 transition">Rechercher</button>
    </div>
</section>

<script>
    document.addEventListener("DOMContentLoaded", () => {
        const cities = ["Paris", "Lyon", "Marseille", "Toulouse", "Bordeaux"];
        let departSelect = document.getElementById("depart");
        let arriveeSelect = document.getElementById("arrivee");

        cities.forEach(city => {
            let option1 = new Option(city, city);
            let option2 = new Option(city, city);
            departSelect.add(option1);
            arriveeSelect.add(option2);
        });
    });
</script>
