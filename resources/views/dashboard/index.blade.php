@extends('layouts.web')

@section('title', 'Page Title')

@section('content')
    <div class="container" style="background-color: #F7F8FC;">
        <div class="card bg-transparent border-0 mx-auto d-block py-5 col-sm-12 col-md-8 col-lg-6 col-xl-4">
            <a href="https://sac.digital/" target="_blank">
                <img src="{{ asset('img/pro.png') }}" class="img-fluid" alt="...">
            </a>
            <h3 class="card-title pt-5 text-center text-cadet font-weight-bold" id="spinner">
                <div class="spinner-border text-violet" role="status">
                    <span class="sr-only">Loading...</span>
                </div>
            </h3>
            <div class="card-body d-none">
                <h3 class="card-title pt-2 text-center text-cadet font-weight-bold">
                    Welcome to SAC DIGITAL
                </h3>
                <p class="card-text text-manatee text-center pb-2">Some quick example text to build on the card title and make up the title and make up the bulk of the card's content.</p>
                <a class="btn btn-violet btn-lg btn-block rounded-lg" href="{{ route('dashboard.startlogin') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    Continuar
                </a>

                <form id="logout-form" action="{{ route('dashboard.startlogin') }}" method="POST" class="d-none">
                    @csrf
                </form>

            </div>
        </div>
        <script>
            setTimeout(function(){
                $('#spinner').addClass('d-none');
                $('.card-body').removeClass('d-none');
            }, 6000);
        </script>
    </div>
@endsection
