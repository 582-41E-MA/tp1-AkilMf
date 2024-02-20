@extends('layouts.app')
@section('title','Nos Vélos')
@section('content')

<header class="bg-dark py-5">
    <div class="container px-4 px-lg-5 my-5">
        <div class="text-center text-white">
            <h1 class="display-4 fw-bolder">L'Émotion de la Vitesse, le Confort de la Qualité - Explorez ..!</h1>
            <p class="lead fw-normal text-white-50 mb-0"></p>
        </div>
    </div>
</header>
<!-- Section-->
<section class="py-5">
    <div class="container px-4 px-lg-5 mt-5">
        <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">

            <!-- ma bike -->
            @forelse($velos as $velo)

            <div class="col mb-5">
                <div class="card h-100">
                    <!-- Product image-->
                    <img class="card-img-top" src="{{ route('home').'/images/'.$velo->image }}" alt="..." />
                    <!-- Product details-->
                    <div class="card-body p-4">
                        <div class="text-center">
                            <!-- Product name-->
                            <h5 class="fw-bolder">Vélo {{ $velo->titre }} pour {{ $velo->sexe }}
                                <strong>{{ $velo->marque }}<strong>
                            </h5>
                            <!-- Product reviews-->
                            <div class="d-flex justify-content-center small text-warning mb-2">
                                <div class="bi-star-fill"></div>
                                <div class="bi-star-fill"></div>
                                <div class="bi-star-fill"></div>
                                <div class="bi-star-fill"></div>
                                <div class="bi-star-fill"></div>
                            </div>
                            <!-- Product price-->
                            ${{ $velo->prix }}
                        </div>
                    </div>
                    @empty
                    <div class="alert alert-danger">No Bikes !</div>
                    @endforelse
                    <!-- Product actions-->
                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                        <!--                         <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a>
 -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>

@endsection('content')