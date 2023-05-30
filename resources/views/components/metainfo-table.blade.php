<table class="table table-striped table-hover border">
    <thead class="table-success">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nome tag</th>
        <th scope="col">Q.tà articoli collegati</th>
        <th scope="col">Aggiorna</th>
        <th scope="col">Cancella</th>      
      </tr>
    </thead>
    <tbody>

        {{-- @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li> {{ $error }} </li>
                    @endforeach
                </ul>
            </div>
        @endif  --}}

        @foreach ($metaInfos as $metaInfo)
        <tr>
            <th scope="row">{{$metaInfo->id}}</th>
            <td>{{$metaInfo->name}}</td>
            <td>{{count($metaInfo->articles)}}</td>
            @if($metaType == "tags")
            <td>
                <form action="{{route('admin.editTag', ['tag'=> $metaInfo])}}" method="POST">
                    @csrf
                    @method('put')
                    <input type="text" name="name" placeholder="Nuovo nome tag" class="form-control w-50 d-inline">
                    <button type="submit" class="btn back rounded-0 text-white">Aggiorna</button>
                </form>
            </td>
            <td>
                <form action="" method="">
                    @csrf
                    @method('delete')
                    <input type="text" name="name" placeholder="Nuovo nome tag" class="form-control w-50 d-inline">
                </form>
            </td>
            @else
            <td>
                <form action="" method="">
                    @csrf
                    @method('put')
                    <input type="text" name="name" placeholder="Nuovo nome categoria" class="form-control w-50 d-inline">
                    <button type="submit" class="btn back rounded-0 text-white">Aggiorna</button>
                </form>
            </td>
            <td>
                <form action="" method="">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger runded-0 text-white">Elimina</button>
                </form>
            </td>
            @endif
        </tr>
        @endforeach
    </tbody>
</table>
            