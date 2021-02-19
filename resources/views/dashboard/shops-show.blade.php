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
                        <button type="button" class="btn btn-outline-violet btn-block">Adicionar produto</button>

                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Pesquisar produtos" aria-label="Recipient's username" aria-describedby="button-addon2">
                            <div class="input-group-append">
                              <button class="btn btn-outline-secondary" type="button" id="button-addon2">
                                <i class="fas fa-search"></i>
                              </button>
                            </div>
                        </div>

                        <!-- teste -->
                        <div class="accordion" id="accordionExample">

                            {{-- //inicio --}}
                            @for ($i = 0; $i < 5; $i++)

                            <div class="card">
                                <div class="card-header bg-white" id="heading{{ $i }}">
                                    <h5 class="mb-0">
                                        <button class="btn btn-transparent shadow-none py-0 my-0 text-dark font-weight-bold btn-block text-left" type="button" data-toggle="collapse" data-target="#collapse{{ $i }}" aria-expanded="true" aria-controls="collapse{{ $i }}">
                                            VESTIDO T-SHIRT SOLTINHO COM EFEITO METALIZADO
                                        </button>
                                    </h5>
                                </div>

                                <div id="collapse{{ $i }}" class="collapse" aria-labelledby="heading{{ $i }}" data-parent="#accordionExample">

                                    <!-- body do produto -->
                                    <div class="card-body">
                                        <div id="carouselExampleIndicators" class="carousel slide mb-2" data-ride="carousel">
                                            <ol class="carousel-indicators">
                                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                                                <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                                                <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
                                            </ol>
                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <img src="{{ asset('img/37766.jpg') }}" class="d-block w-100" alt="...">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="{{ asset('img/37767.jpg') }}" class="d-block w-100" alt="...">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="{{ asset('img/37768.jpg') }}" class="d-block w-100" alt="...">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="{{ asset('img/37769.jpg') }}" class="d-block w-100" alt="...">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="{{ asset('img/37770.jpg') }}" class="d-block w-100" alt="...">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="{{ asset('img/37771.jpg') }}" class="d-block w-100" alt="...">
                                                </div>
                                            </div>
                                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Next</span>
                                            </a>
                                        </div>
                                        <p class="my-0"><del>R$: 190,00</del></p>
                                        <p class="card-text h4 mb-2">R$: 150,00</p>
                                        <div class="clearfix my-3">
                                            <h5 class="float-left text-success"><i class="far fa-thumbs-up"></i> <span class="">1000000</span></h5>
                                            <h5 class="float-right text-danger"><i class="far fa-thumbs-down"></i> <span class="">3000</span></h5>
                                        </div>
                                        <p class="card-text my-0">
                                            <p class="my-0">
                                                O vestido t-shirt soltinho com efeito metalizado é a peça perfeita para looks charmosos sem muito esforço.
                                                <br>
                                                O comprimento mais curto possibilita diferentes combinações, tanto para o inverno quanto para o verão, mas sempre te deixando confortável para curtir o dia sem preocupação.
                                            </p>
                                            <br>
                                            <p class="my-0"><strong>Detalhes:</strong> asdasdasfasgaosfoasfo</p>
                                            <p class="my-0"><strong>Composição:</strong> 96% Poliéster e 4% Elastano.</p>
                                            <br>
                                            <p class="my-0"><strong>Cuidados na lavagem:</strong> Não usar água quente no processo de lavagem, não utilize cloro, lave somente com sabão neutro, secar a sombra.</p>
                                            <p class="my-0"><strong>Observação:</strong> A cor pode variar de tonalidade nas imagens dependendo da tela que você está utilizando, por se tratar de foto externa e foto de estúdio.</p>
                                        </p>
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">
                                                <p class="my-0"><strong>Tamanhos:</strong> PP, P, M, G, GG ,XG</p>
                                            </li>
                                            <li class="list-group-item">
                                                <p class="my-0"><strong>Cores:</strong> Azul, Verde, Vermelho, Roxo, Laranja , Amarelo</p>
                                            </li>
                                            <li class="list-group-item">
                                                <p class="mt-0 mb-2 text-center"><strong>Estoque</strong></p>
                                                <ul class="list-group list-group-flush">
                                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                                        <strong>PP</strong>
                                                            Azul
                                                        <span class="badge badge-transparent badge-pill">4000</span>
                                                    </li>
                                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                                        <strong>P</strong>
                                                        Azul
                                                        <span class="badge badge-transparent badge-pill">4000</span>
                                                    </li>
                                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                                        <strong>M</strong>
                                                        Azul
                                                        <span class="badge badge-transparent badge-pill">4000</span>
                                                    </li>
                                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                                        <strong>G</strong>
                                                        Azul
                                                        <span class="badge badge-transparent badge-pill">4000</span>
                                                    </li>
                                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                                        <strong>GG</strong>
                                                        Azul
                                                        <span class="badge badge-transparent badge-pill">4000</span>
                                                    </li>
                                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                                        <strong>XG</strong>
                                                        Azul
                                                        <span class="badge badge-transparent badge-pill">4000</span>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                        <div class="btn-group btn-group-sm d-flex justify-content-center" role="group" aria-label="Basic example">
                                            <button type="button" class="btn btn-success">Editar</button>
                                            <button type="button" class="btn btn-outline-danger">Remover</button>
                                            <button type="button" class="btn btn-outline-secondary">Ocultar</button>
                                        </div>
                                    </div>
                                    <!-- body do produto -->


                                </div>

                            </div>

                            @endfor
                            {{-- //final --}}

                            <nav class="mt-3 d-flex justify-content-center" aria-label="Page navigation example">
                                <ul class="pagination">
                                  <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Previous">
                                      <span aria-hidden="true">&laquo;</span>
                                    </a>
                                  </li>
                                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                                  <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Next">
                                      <span aria-hidden="true">&raquo;</span>
                                    </a>
                                  </li>
                                </ul>
                              </nav>

                        </div>
                        <!-- teste -->


                {{-- @include('components.swipe') --}}
            </div>

        </div>
    </div>
@endsection
