@extends('layouts.app')
@section('content')
<div class="container-fluid p-0">

  <div class="row mb-2 mb-xl-3">
    <div class="col-auto d-none d-sm-block">
      {{ Auth::user()->name }}
    </div>

    <div class="col-auto ms-auto text-end mt-n1">
      <a href="index.html#" class="btn btn-light bg-white me-2">Invite a Friend</a>
      <a href="{{ route('products.create') }}" class="btn btn-primary">Ajout d'un produit</a>
    </div>
  </div>
  <div class="card">
    <div class="card-header">
        <h5 class="card-title">
          {{ $title }}
        </h5>
        <h6 class="card-subtitle text-muted">Highly flexible tool that many advanced features to any HTML table. See official
            documentation <a href="https://datatables.net/extensions/responsive/" target="_blank"
                rel="noopener noreferrer nofollow">here</a>.</h6>
    </div>
    <div class="card-body">
        <table id="datatables-reponsive" class="table table-striped" style="width:100%">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Description</th>
                    <th>NUmero du stock</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                <tr>
                  <td>
                    {{ $product->nom }}
                  </td>
                  <td>{{ $product->description }}</td>
                  <td>{{ $product->stock->sku }}</td>
                  <td>
                    <a href="{{ route('products.edit' , $product) }}"
                     class="btn btn-primary">
                      <i class="align-middle" data-feather="edit-2"></i>
                      Editer
                    </a>
                    <a 
                    data-bs-toggle="modal" data-bs-target="#defaultModalPrimary{{ $product->id }}"
                     class="btn btn-danger">
                      <i class="align-middle" data-feather="trash"></i>
                      Supprimer
                    </a>
                   
                    <div class="modal fade" id="defaultModalPrimary{{ $product->id }}" tabindex="-1" role="dialog" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title">
                              {{ $product->nom }}
                            </h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body m-3">
                            <p class="mb-0">
                              Etes vous sur de vouloir supprimer ce produit ?
                            </p>
                          </div>
                          <form method="POST" action="{{ route('products.destroy' , $product) }}" id="form-delete-{{ $product->id }}">
                            @csrf
                            @method('DELETE')
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                              <button type="button" class="btn btn-primary" onclick="document.getElementById('form-delete-{{ $product->id }}').submit()">Save changes

                              </button>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                  </td>
                
              </tr>
                @endforeach
               
            </tbody>
        </table>
    </div>
</div>

</div>
@endsection