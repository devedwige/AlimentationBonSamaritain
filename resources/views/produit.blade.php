@extends("layout.master")
@section("contenu")
  <div class="my-3 p-3 bg-body rounded shadow-sm">
    <h2 class="border-bottom pb-2 mt-4">Liste des produits</h2>
    {{-- {{ Auth::user()->firstname }} --}}
    <div class="mt-4">
      <div class="d-flex justify-content-between mb-2">
        {{ $produits->links() }}

      <a href="{{route('produit.create')}}" class="btn btn-primary">Ajouter un produit </a>
      </div>
      <div class="d-flex justify-content-between mb-2">
      <form action="{{route('logout')}}" method="post">
          @csrf
          <button type="submit" class="btn btn-danger">Deconnexion</button>
      </form>
    </div>
      @if(session()->has("successDelete"))
      <div class="alert alert-success">
          <h3>{{session()->get('successDelete')}}</h3>
      </div>
      @endif
    <table class="table table-bordered table-hover mt-2">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">PHOTOS</th>
      <th scope="col">NOM</th>
      <th scope="col">PRIX</th>
      <th scope="col">DETAIL</th>
      <th scope="col">CATEGORIE_ID</th>
      <th scope="col">ACTION</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($produits as $produit)
    <tr>
      <th scope="row">{{ $loop->index +1 }}</th>
      <td><img src="/image/{{$produit->photos }}" width='70px'></td>
      <td>{{ $produit->nom }}</td>
      <td>{{ $produit->prix }}</td>
      <td>{{ $produit->detail }}</td>
      <td>{{ $produit->categorie_id }}</td>
      {{-- <td>{{ $user->role_ }}</td> --}}
      <td>
        {{-- <a href="{{ route('etudiant.edit', ['etudiant'=>$etudiant->id])}}" class="btn btn-info">Editer</a> --}}
        <a href="#" class="btn btn-danger" onclick="if(confirm('Voulez vous vraiment supprimer ce produit?')){document.getElementById('form-{{$produit->id}}').submit() }">Supprimer</a>
        <form id="form-{{$produit->id}}" action="{{route('produit.supprimer',
         ['produit'=>$produit->id])}}" method="post">
            @csrf
            <input type="hidden" name="_method" value="delete">
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
    </div>
    </div>
  </div>
@endsection
