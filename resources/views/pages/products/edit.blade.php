@extends('layouts.app')
@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h5 class="card-title">
            Formulaire d'ajout d'un produit
          </h5>
        </div>
        <div class="card-body">
          <form method="POST" action="{{ route('products.update' , $product) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
              <div class="mb-3 col-md-12 col-lg-12">
                <label class="form-label" for="inputEmail4">Nom du produit</label>
                <input type="text" name="{{ old('nom') ?? 'nom' }}"
                value="{{ $product->nom ?? '' }}"
                class="form-control" id="inputEmail4" placeholder="Nom du produit">
                @error('nom')
                  <p class="text-danger">
                    {{ $message }}
                  </p>
                @enderror
              </div>
            </div>
            <div class="mb-3">
              <label class="form-label" for="inputAddress">Description</label>
              <textarea class="form-control" cols="4" rows="4" id="inputAddress" placeholder="Description du produit" name="{{ old("description") ?? 'description' }}">
                {{ $product->description ?? '' }}
              </textarea>
              @error('description')
              <p class="text-danger">
                {{ $message }}
              </p>
            @enderror
            </div>
            
            <div class="row">
              <div class="mb-3 col-md-6 col-lg-6">
                <label class="form-label" for="inputState">
                  Stock
                </label>
                <select id="inputState" class="form-control" name="stock_id">
                  <option selected="">
                    Choisir le stock
                  </option>
                  @foreach ($stocks as $stock)
                  <option value="{{ $stock->id }}"
                    @if ($product->stock_id == $stock->id)
                        selected
                    @endif
                    >{{ $stock->sku }}</option>
                  @endforeach
                </select>
                @error('stock_id')
                <p class="text-danger">
                  {{ $message }}
                </p>
              @enderror
                <div class="mb-3 col-md-6 col-lg-6">
                <label class="form-label" for="inputCity">
                  Image du produit
                </label>
                <input type="file" name="image" class="form-control" id="inputCity">
                @error('image')
                <p class="text-danger">
                  {{ $message }}
                </p>
              @enderror
              </div>
              </div>
             
              </div>
            <button type="submit" class="btn btn-primary">Enregistrer</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection