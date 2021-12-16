<div>
    <div class="mx-auto card" style="width: 18rem;">
        <img style="width: 170px;height:170px;" class="mx-auto mt-3 card-img-top"
        src="{{ Storage::disk('public')->url($pastel->foto ? $pastel->foto : 'images/pastels/default.png') }}" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">{{$pastel->nombre}}</h5>
          <p class="card-text">{{$pastel->cantidad}}</p>
          <button wire:click="delete" class="btn btn-primary btn-sm">Confirmar</button>
          <a href="{{route('pastels.index')}}" class="btn btn-secondary btn-sm">Cancelar</a>
        </div>
    </div>
</div>
