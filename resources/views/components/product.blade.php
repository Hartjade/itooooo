<div class="card h-100">
    <!-- Product image-->
    <img class="card-img-top" src="{{ $image }}" alt="{{ $name }}" />
    <!-- Product details-->
    <div class="card-body p-4">
        <div class="text-center">
            <!-- Product name-->
            <h5 class="fw-bolder">{{ $name }}</h5>
            <!-- Product price-->
            {{ $price }}
            <p class="text-start">
                {{ $description }}
            </p>
        </div>
    </div>
    <!-- Product actions-->
    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
        <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="/products/{{ $id }}">View options</a></div>
    </div>
</div>