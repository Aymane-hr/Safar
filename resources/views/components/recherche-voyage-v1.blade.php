<section class="container mt-5 p-4 bg-white shadow rounded">
    <h2 class="text-center fw-bold">Réservez vos tickets d'autocar <span class="text-warning">en moins de 2 minutes</span></h2>
    <p class="text-center text-muted">Rechercher, comparer et acheter votre ticket d’autocar parmi +60 sociétés de transport.</p>

    <div class="row mt-4">
        <div class="col-md-3">
            <label class="form-label">Départ</label>
            <select class="form-select" id="depart">
                <option>Ville de départ</option>
            </select>
        </div>
        <div class="col-md-3">
            <label class="form-label">Arrivée</label>
            <select class="form-select" id="arrivee">
                <option>Ville d'arrivée</option>
            </select>
        </div>
        <div class="col-md-3">
            <label class="form-label">Date de voyage</label>
            <input type="date" class="form-control" id="date">
        </div>
        <div class="col-md-3">
            <label class="form-label">Voyageurs</label>
            <select class="form-select" id="voyageurs">
                <option>1 personne</option>
                <option>2 personnes</option>
                <option>3 personnes</option>
            </select>
        </div>
    </div>

    <div class="text-center mt-4">
        <button class="btn btn-warning btn-lg">Rechercher</button>
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
