
    <section class="mt-5 mb-5">
        <div class="container">
         
           
            <h4>voici le contenu de votre armoir</h4>
             <button type="button" class="btn btn-success my-3"><a style="text-decoration: none; color: white;" href="{{ route('create') }}">CREER  &#10133;</a></button>
        
            <table class="table align-middle mb-0 bg-white">
                <thead class="bg-light">
                  <tr>
                    <th>IMAGE</th>
                    <th>ALIMENT</th>
                    <th>QUANTITE</th>
                    <th>AFFICHER</th>
                    <th>SUPPRIMER</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($aliments as $aliment ) 
                  <tr>
                    <td>
                      <div class="d-flex align-items-center">
                        <img src="{{ asset($aliment['img']) }}" style="max-width:100px;" alt="">
                      </div>
                    </td>
                    <td>
                        <p style="font-weight:bold;">{{ $aliment['aliment'] }}</p>
                    </td>
                    <td><p>{{ $aliment['quantité'] }}kg</p></td>
                    <td><a class="text-white" style="text-decoration: none" href={{ "ingredient/".$aliment['id'] }}>
                      <button type="button" class="btn btn-info">
                        SHOW
                      </button></a>
                    </td>
                    <td><a class="text-white" style="text-decoration: none" href={{ "delete/".$aliment['id'] }}>
                      <button type="button" class="btn btn-danger">
                        DELETE
                      </button></a>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
        </div>
    </section>
