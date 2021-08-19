<div class="deznav">
    <div class="deznav-scroll">
        <ul class="metismenu" id="menu">

           
            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-381-television"></i>
                    <span class="nav-text">Desarrollador</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{!! url('/desarrollador/'); !!}">Administrador</a></li>
                    <li><a href="{!! url('/desarrollador/restauranteD'); !!}">Locales Disponibles</a></li>
                    <li><a href="{!! url('/desarrollador/categoriaLocalD'); !!}">Categorías del Local</a></li>
                    <li><a href="{!! url('/desarrollador/categoriaGlobalD'); !!}">Categorias Globales</a></li>
                    <li><a href="{!! url('/desarrollador/atencionD'); !!}">Atenciones</a></li>
                    <li><a href="{!! url('/desarrollador/agregadoD'); !!}">Agregados</a></li>

                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Pedidos</a>
                        <ul aria-expanded="false">
                            <li><a href="{!! url('/desarrollador/pedido'); !!}">Pedidos</a></li>
                            <li><a href="{!! url('/desarrollador/pedido/create'); !!}">Agregar Pedido</a></li>
                            <li><a href="{!! url('/desarrollador/pedido/edit'); !!}">Editar Pedido</a></li>>
                        </ul>
                    </li>


                </ul>
            </li>

            {{-- Esto es para la creacion del menu dinamico cuando hay mas de un restaurante --}}

            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                <i class="flaticon-381-television"></i>
                <span class="nav-text">Restaurante</span>
            </a>
            <ul aria-expanded="false">
                <li><a href="{!! url('/desarrollador/restauranteD/1'); !!}">Resumen</a></li>
                <li><a href="{!! url('/desarrollador/menuD'); !!}">Menus</a></li>
                <li><a href="{!! url('/desarrollador/agregado'); !!}">Agregados</a></li>
                <li><a href="{!! url('/desarrollador/categorias_local_lista'); !!}">Categorías del Local</a></li>
                <li><a href="{!! url('/desarrollador/atenciones_lista'); !!}">Atenciones</a></li>
                <li><a href="{!! url('/desarrollador/pedido'); !!}">Pedidos</a></li>


            </ul>
        </li>

        </ul>

       
    </div>
</div>