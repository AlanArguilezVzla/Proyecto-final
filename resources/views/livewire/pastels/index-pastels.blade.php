<div wire:init="cargando">
    <div class="mt-5">
        <x-alert>
            <x-slot name="contenido">
                Si tu pastel no se encuentra, procede a registrarlo presionando el boton "Nuevo".
            </x-slot>
        </x-alert>

        <div class="float-right mb-2">
            <a href="{{route("pastels.create")}}" type="button" class="btn btn-success btn-sm"><i class="fa fa-plus-circle"></i> nuevo</a>
        </div>

        <div class="mb-2 col-3">
            <div class="input-group flex-nowrap">
                <span class="input-group-text" id="addon-wrapping"><i class="fa fa-search"></i></span>
                <input wire:model="search" type="search" class="form-control" placeholder="Buscar..." aria-label="Username"
                    aria-describedby="addon-wrapping">
            </div>
        </div>

        @if (count($pastels) > 0)
        <table class="table table-dark text-center">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th>Imagen</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Cantidad</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pastels as $[pastel])
                    <tr>
                        <th scope="row">{{$pastel->id}}</th>
                        <th>
                            <img style="width: 50px;height:50px;"
                                src="{{ Storage::disk('public')->url($pastel->foto != null ? $pastel->foto : 'images/pastels/default.png') }}"
                                alt="">
                        </th>
                        <td>{{$equipo->nombre}}</td>
                        <td>{{$equipo->cantidad}}</td>
                        <td>
                            <a href="{{ route('pastels.read', $pastel) }}" title="Mostrar más" type="button" class="btn btn-primary btn-sm"><i class="fa fa-eye"></i></a>
                            <a href="{{ route('pastels.edit', $pastel) }}" title="Editar pastel" type="button" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i> </a>
                            <a href="{{ route('pastels.delete', $pastel) }}"title="Eliminar pastel" type="button" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>




                        </td>
                    </tr>
                @endforeach

            </tbody>

        </table>

        @else
        <img class="mx-auto d-block" style="width:350px;height:350px;"
            src="{{ Storage::disk('public')->url('images/otros/loading.gif') }}" alt="">
        @endif

        {{$cargado == true ? $pastels->links() : null }}

    </div>

</div>
