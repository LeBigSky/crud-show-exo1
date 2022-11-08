<section>
    <section>
        <h1> ajouter aliment</h1>
            <div class="container d-flex justify-content-center gap-2">
                
                <form class="d-flex gap-2" action="{{ route('store.ingredient') }}" method="POST">
                @csrf
                <div>
                    <label for="nom">Aliment</label>
                    <input type="text" name="aliment" id="aliment">
                </div>
             
                <div>
                    <label for="quantité">Quantité</label>
                    <input type="number" name="quantité" id="quantité">
                </div>
                <div>
                    <label for="img">Image</label>
                    <select name="img" id="img">
                        <option value="img/sel.jpg">Sel</option>
                        <option value="img/poivre.jpg">Poivre</option>
                        <option value="img/rom.jpg">Romarin</option>
                        <option value="img/persil.jpeg">Persil</option>
                        <option value="img/cor.jpg">Coriandre</option>
                    </select>
                </div>
                <button type="submit">Ajouter l'aliment</button> 
                </form>
        </div>
        </section>
</section>