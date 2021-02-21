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
                            Washington Santos
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Sair</a>
                        </div>
                    </li>

                    <!-- Menu premium -->

                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <strong>PREMIUM</strong> <small>até 20/03/2021</small>
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Sair</a>
                      </div>
                  </li>

                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disable</a>
                    </li>
                    </ul>
                </div>

                <div class="collapse navbar-collapse pb-3" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto mt-2 mb-2">
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
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disable</a>
                    </li>
                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar..." aria-label="Search">
                    <button class="btn btn-outline-violet my-2 my-sm-0" type="submit">
                      <i class="fas fa-search"></i>
                    </button>
                    </form>
                </div>

                <div class="collapse navbar-collapse" id="navbell">
                    <div class="list-group my-3">
                        <a href="#" class="list-group-item list-group-item-action">
                          <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">Novo pedido!</h5>
                            <small>18/02/2021 - 20:57</small>
                          </div>
                          <p class="mb-1">Pedido finalizado com sucesso, pagamento realizado via PICPAY, realize a consulta antes de enviar os produtos.</p>
                          <small>Alguma informação vem aqui</small>
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

                <a href="#d" class="text-violet text-decoration-none"><strong><i class="fas fa-arrow-left mr-1"></i> Voltar</strong></a>

                <div class="card mb-3 mt-3">
                    <div class="card-body">
                      <div class="d-flex w-100 justify-content-between">
                        <h5 class="card-title">Loja do Washington</h5>
                        <small><i class="fas fa-medal text-violet fa-2x"></i></small>
                      </div>
                      <h6 class="card-subtitle mb-3 text-muted">@washingtons2 <i class="fas fa-check ml-1 text-success"></i></h6>
                      <p class="card-text">

                        <div class="alert alert-secondary" role="alert">
                            Loja do tipo <a href="#" class="alert-link">vitrine</a>.
                        </div>
                        <!-- formulário -->
                        <form class="mt-2">
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Fotos do produto</label>
                                <input type="file" class="form-control-file" id="exampleFormControlFile1">
                                <small id="emailHelp" class="form-text text-muted">A primeira foto será considerada foto principal da exibição do produto.</small>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Nome do Produto</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="1"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Valor</label>
                                <input type="text" class="form-control" id="exampleFormControlFile1">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Promoção</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                      <div class="input-group-text">
                                        <input type="checkbox" aria-label="Checkbox for following text input">
                                      </div>
                                    </div>
                                    <input type="text" class="form-control" aria-label="Text input with checkbox">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Descrição</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="4"></textarea>
                            </div>
                            <div class="form-group">
                              <label for="exampleFormControlSelect1">Variações</label>
                              <button class="btn btn-outline-violet btn-block mb-3">Adicionar</button>
                              <select class="form-control" id="exampleFormControlSelect1">
                                <option>Tamanhos</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                              </select>
                            </div>
                            <div class="form-group">
                                <div class="list-group">
                                    <div class="list-group-item list-group-item-action">
                                      <div class="d-flex w-100 justify-content-between">
                                        <h5 class="mb-1">Tamanho</h5>
                                      </div>
                                      <p class="mb-1">P ,M, G, GG, XG</p>
                                      <small>Tamanhos de roupas disponives na loja.</small>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Controle de estoque</label>
                                <button type="button" class="btn btn-secondary btn-block" disabled>Controle de estoque</button>
                                <small>Laçamento em breve.</small>
                            </div>

                        </form>
                        <!-- formulário -->




                {{-- @include('components.swipe') --}}
            </div>

        </div>
    </div>
@endsection
