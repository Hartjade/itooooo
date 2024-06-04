<section class="py-5">
    <div class="container px-4 px-lg-5 mt-5">
        @if (request()->path() == '/')
        <h2 class="mb-2">New Products</h2>
        @endif


        <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
            @foreach ($products as $prod)

            <div class="col mb-5">
                <x-product :id="$prod->id" :name="$prod->name" :description="$prod->description" :price="$prod->price" :image="asset('images/'. $prod->image_url)" />
            </div>
            @endforeach
        </div>
    </div>
</section>