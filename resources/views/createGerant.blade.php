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
                <label for="exampleInputEmail1" class="form-label">NOM</label>
                <input type="text" class="form-control" name="nom">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">PRENOM</label>
                <input type="text" class="form-control" name="prenom">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">EMAIL</label>
                <input type="email" class="form-control" name="email">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">PHONE</label>
                <input type="number" class="form-control" name="phone">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">PASSWORD</label>
                <input type="password" class="form-control" name="password">
            </div>
            <button type="submit" class="btn btn-primary">Enregistrer</button>
            <a href="{{route('produit')}}" class="btn btn-danger">Annuler</a>
        </form>
      </div>
    </div>
    </div>
  </div>
@endsection
