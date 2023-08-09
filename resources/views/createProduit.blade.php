@extends("layout.master")

@section("contenu")
        @if(session()->has("success"))
        @endif
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <form style="width:65%;" method="post" action="{{route('produit.ajouter')}}">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">PHOTOS</label>
                <input type="file" class="form-control" name="photos">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">NOM</label>
                <input type="text" class="form-control" name="nom">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">PRIX</label>
                <input type="number" class="form-control" name="prix">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">DETAIL</label>
                <input type="text" class="form-control" name="detail">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">CATEGORIE_ID</label>
                <input type="number" class="form-control" name="categorie_id">
            </div>
            <button type="submit" class="btn btn-primary">AJOUTER</button>
            <a href="{{route('produit')}}" class="btn btn-danger">Annuler</a>
        </form>
      </div>
    </div>
    </div>
  </div>
@endsection
