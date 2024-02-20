@extends('layouts.app')
@section('title','Accueil')
@section('content')

<header class="bg-dark py-5">
    <div class="container px-4 px-lg-5 my-5">
        <div class="text-center text-white">
            <h1 class="display-4 fw-bolder">Pédalez dans l'Excellence </h1>
            <h2></h2>
            <p class="lead fw-normal text-white-50 mb-0"></p>
        </div>
    </div>
</header>
<!-- Section-->
<section class="py-5">
    <div class="container px-4 px-lg-5 mt-5">
        <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">

            <div class="row justify-content-center my-5"></div>
            <p><a class="btn bg-info text-center py-5" href="{{ route('velo.index')}}">Découvrez les Vélos
                    Haut de Gamme de notre Catalogue.</a></p>



        </div>
    </div>
    </div>
</section>

@endsection('content')