@extends("layout.master")
@section("contenu")
  <div class="my-3 p-3 bg-body rounded shadow-sm">
    <h2 class="border-bottom pb-2 mt-4">Liste des gerant</h2>
    {{-- {{ Auth::user()->firstname }} --}}
    <div class="mt-4">
      <div class="d-flex justify-content-between mb-2">
        {{ $users->links() }}

      <a href="{{route('gerant.create')}}" class="btn btn-primary">Ajouter un gérant </a>
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
      <th scope="col">NOM</th>
      <th scope="col">PRENOM</th>
      <th scope="col">PHONE</th>
      <th scope="col">ACTION</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($users as $user)
    <tr>
      <th scope="row">{{ $loop->index +1 }}</th>
      <td>{{ $user->nom }}</td>
      <td>{{ $user->prenom }}</td>
      <td>{{ $user->phone }}</td>
      {{-- <td>{{ $user->role_ }}</td> --}}
      <td>
        {{-- <a href="{{ route('gerant.edit', ['user'=>$user->id])}}" class="btn btn-info">Editer</a> --}}
        <a href="#" class="btn btn-danger" onclick="if(confirm('Voulez vous vraiment supprimer ce gerant?')){document.getElementById('form-{{$user->id}}').submit() }">Supprimer</a>

        <form id="form-{{$user->id}}" action="{{route('gerant.supprimer',
         ['gerant'=>$user->id])}}" method="post">
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
