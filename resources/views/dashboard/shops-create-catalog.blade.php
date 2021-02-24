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
                            Loja do tipo <a href="#" class="alert-link">catálogo</a>.
                        </div>
                        <!-- formulário -->
                        <form class="mt-2">
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Fotos do produto</label>

                                <img src="{{ asset("img/no-product-image.svg") }}" class="img-thumbnail d-block mb-3" alt="...">

                                <input type="file" class="form-control-file" id="exampleFormControlFile1">
                                <small id="emailHelp" class="form-text text-muted">A primeira foto será considerada foto principal da exibição do produto.</small>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Nome do Produto</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="1"></textarea>
                            </div>
                            {{-- <div class="form-group">
                                <label for="exampleFormControlInput1">Valor</label>
                                <input type="text" class="form-control" id="exampleFormControlFile1">
                            </div> --}}
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Categoria do produto</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                      <button class="btn btn-outline-secondary" type="button">Nova</button>
                                    </div>
                                    <select class="custom-select" id="inputGroupSelect03" aria-label="Example select with button addon">
                                      <option selected>Categoria do produto</option>
                                      <option value="1">One</option>
                                      <option value="2">Two</option>
                                      <option value="3">Three</option>
                                    </select>
                                  </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Ingredientes</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="4"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Variações e preços</label>
                                <button class="btn btn-outline-violet btn-block mt-2 mb-3">Criar nova variação</button>

                                <table class="table table-bordered">
                                    <thead>
                                      <tr>
                                        <th colspan="2">Variação</th>
                                        <th scope="col">Valor</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <td colspan="2">Pequena</td>
                                        <td>R$: 29,90</td>
                                      </tr>
                                      <tr>
                                        <td colspan="2">Média</td>
                                        <td>R$: 36,90</td>
                                      </tr>
                                      <tr>
                                        <td colspan="2">Grande</td>
                                        <td>R$: 50,90</td>
                                      </tr>
                                    </tbody>
                                  </table>

                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Lista de adicionais</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                      <button class="btn btn-outline-secondary" type="button">Novo</button>
                                    </div>
                                    <select class="custom-select" id="inputGroupSelect03" aria-label="Example select with button addon">
                                      <option selected>Lista de adicionais</option>
                                      <option value="1">One</option>
                                      <option value="2">Two</option>
                                      <option value="3">Three</option>
                                    </select>
                                  </div>
                            </div>

                            <div class="form-group">
                                <button class="btn btn-violet btn-lg btn-block mt-5">Criar produto</button>
                            </div>


                        </form>
                        <!-- formulário -->




                {{-- @include('components.swipe') --}}
            </div>

        </div>
    </div>
@endsection
