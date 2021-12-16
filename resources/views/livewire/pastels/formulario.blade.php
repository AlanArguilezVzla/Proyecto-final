<div class="row">
    <div class="col-4">

        <div wire:loading wire:target="foto" class="align-items-center">
            <strong>Cargando...</strong>
            <div class="spinner-border ms-auto" role="status" aria-hidden="true"></div>
        </div>

        @if ($foto != null)
            <img style="width: 230px;height:230px;" src="{{ $foto->temporaryUrl() }}" alt="">
        @else
            <img style="width: 230px;height:230px;"
                src="{{ Storage::disk('public')->url($pastel->foto != null ? $pastel->foto : 'images/pastels/default.png') }}"
                alt="">
        @endif



        <form>
            <div class="form-group">
                <label for="exampleFormControlFile1">seleccione la imagen</label>
                <input wire:model="foto" type="file" class="form-control-file" id="exampleFormControlFile1">
                @error('foto') <span class="text-danger">{{ $message }}</span>@enderror

            </div>
        </form>
    </div>

    <div class="col-6 mx-auto">
            <h1>Registro de Pasteles</h1>
            <div class="form-group ">
                <label>Nombre</label>
                <input wire:model.defer="pastel.nombre" type="text" class="form-control">
                @error('pastel.nombre')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group ">
                <label>Cantidad</label>
                <input wire:model.defer="pastel.cantidad" type="text" class="form-control">
                @error('pastel.cantidad')
                    <span class="text-danger">{{$message}}</span>
                @enderror

    </div>
</div>
