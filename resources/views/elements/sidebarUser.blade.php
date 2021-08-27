<div class="deznav">
    <div class="deznav-scroll">
        <ul class="metismenu" id="menu">

           
            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-381-television"></i>
                    <span class="nav-text">Usuario</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{!! url('/usuario'); !!}">Inicio</a></li>
                    <li><a href="{!! url('/usuario/restaurante'); !!}">Restaurantes</a></li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Categorías Local</a>
                        <ul aria-expanded="false">
                            <li><a href="{!! url('/desarrollador/menu'); !!}">Categorías del Local</a></li>
                            <li><a href="{!! url('/desarrollador/categoria_local/create'); !!}">Agregar Categoría Local</a></li>
                        </ul>
                    </li>



                </ul>
            </li>
            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                <i class="flaticon-381-television"></i>
                <span class="nav-text">Pedidos</span>
            </a>
            <ul aria-expanded="false">
                <li><a href="{!! url('/usuario/cart'); !!}">Carrito</a></li>
                <li><a href="{!! url('/usuario/restaurante'); !!}">Restaurantes</a></li>
                <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Categorías Local</a>
                    <ul aria-expanded="false">
                        <li><a href="{!! url('/desarrollador/menu'); !!}">Categorías del Local</a></li>
                        <li><a href="{!! url('/desarrollador/categoria_local/create'); !!}">Agregar Categoría Local</a></li>
                    </ul>
                </li>



            </ul>
        </li>

        </ul>

       
    </div>
</div>