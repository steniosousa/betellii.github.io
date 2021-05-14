<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Betel II</title>
    <link rel="shortcut icon" href="{{ asset('/assets/logo.svg') }}"> <!-- link -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Unicase:wght@300&family=Tangerine&display=swap"
          rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&display=swap" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/welcome.css') }}" rel="stylesheet">

    <script src="{{ asset('/js/app.js') }}"></script>
    <script src="{{ asset('/js/welcome.js') }}"></script>
</head>
<body>
<div id="rod" class="modal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <div>
                    <h5 class="modal-title">Rodízio</h5>
                    <label for="nome">Nome:</label>
                    <input id="nome" type="text" class="form-control" name="nome"/>
                    <label for="data">Data:</label>
                    <input id="data" type="date" class="form-control" name="data"/>
                </div>
            </div>
            <div class="modal-body">
                <textarea class="form-control" id="avisos" rows="3" disabled></textarea>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" onclick="adicionarRodizio()">Adicionar</button>
            </div>
        </div>
    </div>
</div>

<div id="sobre" class="modal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1> sobre a igreja </h1>
            </div>
            <div class="modal-body">
                <textarea class="form-control" id="avisos" rows="3" disabled> pastoreado pelo pastor</textarea>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">fechar</button>
            </div>
        </div>
    </div>
</div>

<div id="vdc" class="modal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1> Avisos </h1>
            </div>
            <div class="modal-body">
                <textarea class="form-control" id="avisos" rows="3"
                          disabled> igrejas fechadas até uma segunda ordem</textarea>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">fechar</button>
            </div>
        </div>
    </div>
</div>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">

        <a class="navbar-brand" href="#">Betel II</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a onclick="coronavirus()" class="nav-link active" aria-current="page"
                       href="#">Coronavírus</a>
                </li>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
                <a class="nav-link active" data-bs-toggle="modal" data-bs-target="#vdc">
                    avisos
                </a>
                <a class="nav-link active" data-bs-toggle="modal" data-bs-target="#sobre">
                    sobre a igreja
                </a>
                <li class="nav-item">
                    <a class="nav-link" href="#"></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" data-bs-toggle="modal" data-bs-target="#rod">
                        Rodízio
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdownMenuLink" role="button"
                       data-bs-toggle="dropdown" aria-expanded="false">
                        Livros
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li>
                            <a class="dropdown-item" href="https://www.bibliaon.com/">Bíblia Sagrada</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="https://escola-ebd.com.br/revista-adulto-1-trimestre-2021/">Revista
                                EBD</a>
                        </li>
                        <li>
                            <a class="dropdown-item"
                               href="https://docs.google.com/viewer?a=v&pid=sites&srcid=ZGVmYXVsdGRvbWFpbnxhcGFsYXZyYWRlZGV1c3ByYXZvY2V8Z3g6MmI5NTMyN2ViMmE4Yzk1OA">Herois
                                da fé</a>
                        </li>
                    </ul>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdownMenuLink" role="button"
                       data-bs-toggle="dropdown" aria-expanded="false">
                        Contato
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li>
                            <a class="dropdown-item" href="https://www.instagram.com/juvbetel2/?hl=pt-br">Instagram</a>
                        </li>
                        <li>
                            <a class="dropdown-item"
                               href="https://www.google.com/maps/@-3.8220881,-38.4736048,3a,75y,97.06h,84.6t/data=!3m6!1e1!3m4!1sDDie-owJ7f5G_Ji-D_0ZCw!2e0!7i13312!8i6656">Localização</a>
                        </li>
                        <li>
                            <a class="dropdown-item"
                               href="https://api.whatsapp.com/send?phone=+85997722934&text=%20Paz do senhor!">whatsapp</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img
                src="https://images.unsplash.com/photo-1510590337019-5ef8d3d32116?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80"
                class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>1 joao 2:6</h5>
                <p>Aquele que afirma que permanece nEle, deve andar como Ele andou.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img
                src="https://images.unsplash.com/photo-1614607421391-8d1228bae188?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=1051&q=80"
                class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Eclesiastes 9:11</h5>
                <p>Os velozes nem sempre vencem a corrida;</p>
            </div>
        </div>
        <div class="carousel-item">
            <img
                src="https://images.unsplash.com/photo-1607641722994-27557903d9de?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80"
                class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>João 9:5</h5>
                <p>Enquanto estou no mundo, sou a luz do mundo.</p>
            </div>
        </div>
    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
<div class="row row-cols-1 row-cols-md-3 g-4">
    <div class="col">
        <div class="card bg-white h-100">
            <img id="sss" src="/assets/imagem-doutrina.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Culto De Doutrina</h5>
                <p class="card-text">O ensino que ofereço a vocês é bom;
                    por isso não abandonem
                    a minha instrução.
                    Provérbios 4:2.</p>
            </div>
            <div class="card-footer">
                <small class="meio" onclick="doutrina()" class="text-muted">Acessar</small>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card bg-white h-100">
            <img id="sss" src="/assets/imagem-ceia.jpg" class="card-img-top" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Culto De Santa Ceia</h5>
                <p class="card-text"> "Desejei ansiosamente comer esta Páscoa com vocês antes de sofrer. Pois eu digo:
                    Não comerei dela novamente até que se cumpra no Reino de Deus".
                    Lucas 22:14-16</p>
            </div>
            <div class="card-footer">
                <small class="meio" onclick="santaceia()" class="text-muted">Acessar</small>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card bg-white h-100">
            <img id="sss"
                 src="https://scontent-for1-1.cdninstagram.com/v/t51.2885-15/e35/93794406_2982641671758587_4233241954461141753_n.jpg?tp=1&_nc_ht=scontent-for1-1.cdninstagram.com&_nc_cat=111&_nc_ohc=ItrrAxt56q8AX86rRVN&ccb=7-4&oh=6c4bfa304390a4f44c4cc2925b3def44&oe=60814004&_nc_sid=4f375e"
                 class="card-img-top" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Culto De Senhora</h5>
                <p class="card-text"> “Confie no Senhor e faça o bem; assim você habitará na terra e desfrutará
                    segurança. Deleite-se no Senhor, e ele atenderá aos desejos do seu coração”. Salmos 37:3,4 –</p>
            </div>
            <div class="card-footer">
                <small class="meio" onclick="senhoras()" class="text-muted">Acessar</small>
            </div>
        </div>
    </div>
</div>
<div class="row row-cols-1 row-cols-md-3 g-4">
    <div class="col">
        <div class="card bg-white h-100">
            <img id="sss" src="https://www.admmembros.com.br/uploads/site/blog/chamadas/ebd/ebd-participe.jpg"
                 class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Escola Biblica Dominical</h5>
                <p class="card-text">Discípulo é aquele que estuda e segue os mandamentos do Mestre, Jesus, e que vive
                    da maneira como Ele viveu (1 Jo 2:6).</p>
            </div>
            <div class="card-footer">
                <small class="meio" onclick="ebd()" class="text-muted()">Acessar</small>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card bg-white h-100">
            <img id="sss" src="{{ asset('/assets/imagem-missoes.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Missões</h5>
                <p class="card-text">Hoje, queremos te encontrar para cultuarmos juntos ao Senhor em seu Santo
                    Templo.</p>
            </div>
            <div class="card-footer">
                <small class="meio" onclick="missoes()" class="text-muted">Acessar</small>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card bg-white h-100">
            <img id="sss"
                 src="https://scontent-for1-1.cdninstagram.com/v/t51.2885-15/e35/s1080x1080/97367534_3166426116730492_7999848383068461090_n.jpg?tp=1&_nc_ht=scontent-for1-1.cdninstagram.com&_nc_cat=104&_nc_ohc=wN7_AEk8LkIAX_XJc9G&ccb=7-4&oh=7b15a5dade98cc472d4a15530a85ffe1&oe=60843611&_nc_sid=4f375e"
                 class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Culto Juv</h5>
                <p class="card-text">Ele não os deixará, nem abandonará. Pois os olhos do Senhor estão atentos sobre
                    toda a terra para fortalecer aqueles que lhe dedicam totalmente o coração.</p>
            </div>
            <div class="card-footer">
                <small class="meio" onclick="juv()" class="text-muted">Acessar</small>
            </div>
        </div>
    </div>
</div>
<footer>
    <div class="footer-develup">
        <div class="footer-develup-siga-nos">
            <a href="www.develupdesenvolvimento@gmail.com"> <img src="{{asset('/assets/logo.jpeg')}}"> </a>
            <p> Desenvolvido por Develup Desenvolvimento.</p>
            <h3> Siga-nós </h3>
            <span>
                <a href="https://www.instagram.com/develup_desenvolvimento/">
                    <img src="{{asset('assets/icons/instagram.svg')}}">
                </a>
                <a href="#"><img src="{{asset('assets/icons/email.svg')}}"></a>
                <a href="#"><img src="{{asset('assets/icons/whatsapp.svg')}}"></a>
                <a href="#"><img src="{{asset('assets/icons/facebook.svg')}}"></a>
            </span>
            <div class="btn bg-white" id="login-develup">
                @guest
                    <a class="nav-link active" href="/login">Login</a>
                @else
                    <a class="nav-link active" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                       document.getElementById('logout-form').submit();"
                    >
                        {{ __('Logout') }}
                    </a>
                @endguest
            </div>
        </div>
        <div class="footer-login-usuario">
            <div id="login">
                @guest
                    <a class="nav-link active" href="/login">Login</a>
                @else
                    <a class="nav-link active" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();"
                    >
                        {{ __('Logout') }}
                    </a>
                @endguest
            </div>
        </div>
    </div>
</footer>
</body>
</html>
