@extends('layouts.web')

@section('title', 'Page Title')

@section('content')
    <div class="container">
        <div class="card bg-transparent border-0 mx-auto d-block py-4 col-sm-12 col-md-8 col-lg-6 col-xl-4">

            <nav class="navbar navbars navbar-light bg-white rounded-sm shadow" style="font-family: 'Barlow', sans-serif;">
                <a class="navbar-brand" type="button" data-toggle="collapse" data-target="#navbarname" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <img class="rounded-circle" src="{{ asset('img/perfil.jpg') }}" width="30" height="30" alt="" loading="lazy">
                </a>
                <div>
                <button class="navbar-toggler border-0 shadow-none text-violet" type="button" data-toggle="collapse" data-target="#navbell" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    {{-- <span class="navbar-toggler-icon"></span> --}}
                    <span class="far fa-bell"></span>
                </button>
                <button class="navbar-toggler border-0 shadow-none text-violet" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    {{-- <span class="navbar-toggler-icon"></span> --}}
                    <span class="fas fa-bars"></span>
                </button>
                </div>

                <div class="collapse navbar-collapse" id="navbarname">
                    <ul class="navbar-nav mr-auto mt-2">
                    {{-- <li class="nav-item active">
                        <a class="nav-link text-violet" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li> --}}
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="mr-2 rounded-sm" src="{{ asset('img/perfil.jpg') }}" width="30" height="30" alt="" loading="lazy"> Washington Santos
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                    </li>
                    </ul>
                </div>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto mt-2">
                    <li class="nav-item active">
                        <a class="nav-link text-violet" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Dropdown
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                    </li>
                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </form>
                </div>

                <div class="collapse navbar-collapse" id="navbell">
                    <div class="list-group my-3">
                        <a href="#" class="list-group-item list-group-item-action">
                          <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">List group item heading</h5>
                            <small>3 days ago</small>
                          </div>
                          <p class="mb-1">Some placeholder content in a paragraph.</p>
                          <small>And some small print.</small>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">
                          <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">List group item heading</h5>
                            <small class="text-muted">3 days ago</small>
                          </div>
                          <p class="mb-1">Some placeholder content in a paragraph.</p>
                          <small class="text-muted">And some muted small print.</small>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">
                          <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">List group item heading</h5>
                            <small class="text-muted">3 days ago</small>
                          </div>
                          <p class="mb-1">Some placeholder content in a paragraph.</p>
                          <small class="text-muted">And some muted small print.</small>
                        </a>
                      </div>
                </div>
            </nav>

            <div class="card-body px-0">
                <div class="card">
                    <div class="card-body">
                      <div class="d-flex w-100 justify-content-between">
                        <h5 class="card-title">@washingtons2 <i class="fas fa-check ml-1 text-success"></i></h5>
                        <small><i class="fas fa-medal text-violet fa-2x"></i></small>
                      </div>
                      <h6 class="card-subtitle mb-2 text-muted">Loja do Washington</h6>
                      <p class="card-text">
                        <div class="progress mb-2">
                            <div class="progress-bar bg-violet w-25" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <p class="mt-0 mb-2"><small>Para sua loja esta ativa na nossa plataforma é necessário realizar as tarefas descritas.</small></p>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Seguir nosso <a href="#" class="text-link text-violet">perfil</a> Instagram.</li>
                            <li class="list-group-item">Adionar o primeiro <a href="#" class="text-link text-violet">produto</a>.</li>
                            <li class="list-group-item">Copiar <a href="#" class="text-link text-violet">link</a> de compartilhamento.</li>
                          </ul>
                      </p>
                      <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                        <button type="button" class="btn btn-outline-violet">Compartilhar</button>
                        <button type="button" class="btn btn-violet">Editar</button>
                        <button type="button" class="btn btn-outline-violet">Ver</button>
                      </div>
                    </div>
                  </div>
                {{-- @include('components.swipe') --}}
            </div>

        </div>
    </div>
@endsection
