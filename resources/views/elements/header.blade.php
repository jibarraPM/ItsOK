<div class="chatbox">

</div>
<!--**********************************
            Chat box End
        ***********************************-->

<!--**********************************
            Header start
        ***********************************-->
<div class="header">
    <div class="header-content">
        <nav class="navbar navbar-expand">
            <div class="collapse navbar-collapse justify-content-between">
                <div class="header-left">

                </div>

                <ul class="navbar-nav header-right">



                    <li class="nav-item dropdown header-profile">

                        <a href="#" role="button" data-toggle="dropdown" id="dropdown1"
                            class="btn btn-primary shadow btn  mr-1 "><i class="fa fa-shopping-bag"></i></a>
                        <div class="dropdown-menu dropdown-menu-right">

                            <div class="row dropdown-item ai-icon">
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-12 order-md-12 mb-12">
                                                        <h4
                                                            class="d-flex justify-content-between align-items-center mb-4">
                                                            <span class="text-muted">Tu Pedido</span>
                                                            <span class="badge badge-primary badge-pill">3</span>
                                                        </h4>
                                                        <ul class="list-group mb-12">
                                                            {{-- }}
                                            @foreach ($data['carts'] as $item)
                                            <li class="list-group-item d-flex justify-content-between lh-condensed">
                                                <div>
                                                    <h6 class="my-0">{{$item->name}}</h6>
                                                    <small class="text-muted">{{$item->associatedModel->descripcion}}</small> <br>
                                                    <small class="text-muted">Cantidad: {{$item->quantity}}</small>
                                                    <a href="{!! url('/desarrollador/atencionD/show'); !!}" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                                    <a href="{!! url('/desarrollador/atencionD/show'); !!}" class="btn btn-danger shadow btn-xs sharp mr-1"><i class="fa fa-trash"></i></a>
                                                </div>
                                                <span class="text-muted">${{$item->price}}</span>
                                            </li>
                                            @endforeach
                                            {{ --}}

                                                            <li class="list-group-item d-flex justify-content-between">
                                                                <span>Sub Total</span>
                                                                <strong>$29.970</strong>
                                                            </li>

                                                            <li class="list-group-item d-flex justify-content-between">
                                                                <span>Cobro por servicio</span>
                                                                <strong>$1.499</strong>
                                                            </li>

                                                            <li class="list-group-item d-flex justify-content-between">
                                                                <span>Total (CLP)</span>
                                                                <strong>$31.469</strong>
                                                            </li>
                                                            <a class="btn btn-primary"
                                                                href="https://www.transbankdevelopers.cl/">Pagar</a>
                                                            <hr class="mb-1">

                                                        </ul>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>


                        <a class="nav-link" href="#" role="button" data-toggle="dropdown" id="dropdown2">
                            <div class="header-info">
                                <span>Bienvenido, <strong>{{ Auth::user()->name }}</strong></span>
                            </div>
                            @if (Auth::user()->foto == null)
                                <img src="https://upload.wikimedia.org/wikipedia/commons/9/99/Sample_User_Icon.png"
                                    width="20" alt="" />
                            @else
                                <img src="{{ Auth::user()->foto }}" width="20" alt="" />
                            @endif
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="{!! url('/app-profile') !!}" class="dropdown-item ai-icon">
                                <svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" class="text-primary" width="18"
                                    height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="12" cy="7" r="4"></circle>
                                </svg>
                                <span class="ml-2">Perfil </span>
                            </a>
                            <a href="{!! url('/email-inbox') !!}" class="dropdown-item ai-icon">
                                <svg id="icon-inbox" xmlns="http://www.w3.org/2000/svg" class="text-success" width="18"
                                    height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path
                                        d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z">
                                    </path>
                                    <polyline points="22,6 12,13 2,6"></polyline>
                                </svg>
                                <span class="ml-2">Historial </span>
                            </a>
                            <a href="" class="dropdown-item ai-icon">
                                <!-- <span class="ml-2">Salir </span> -->
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger"
                                        width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                        <polyline points="16 17 21 12 16 7"></polyline>
                                        <line x1="21" y1="12" x2="9" y2="12"></line>
                                    </svg>
                                    <span :href="route('logout')" onclick="event.preventDefault();
                                                                this.closest('form').submit();">
                                        Salir
                                    </span>
                                </form>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>
<!--**********************************
            Header end ti-comment-alt
        ***********************************-->
