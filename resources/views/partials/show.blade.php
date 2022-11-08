<section>
    <button type="button" class="btn btn-warning my-3"><a style="text-decoration: none; color: black;" href="{{ route('home') }}"> &#x21A9;
        STEP BACK</a></button>
    
    <div class="mt-5">
    
        <div class="container w-50 border d-flex flex-column justify-content-cente bg-warning mb-3">
            <h4> Article n° {{ $ingredient->id }}</h4>
        </div>
        <div class="container w-50 border d-flex flex-column align-items-center align-middle gap-3">
            <h2 class="my-3"> {{ $ingredient->aliment }}</h2> 
            <img src="{{ asset($ingredient['img']) }}" alt="" class="img-fluid">
            <p class="d-flex justify-content-center" style= "text-align: center" > Quantité: {{ $ingredient['quantité'] }}</p>
        </div>
    </div>
</section>