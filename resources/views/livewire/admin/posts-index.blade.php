<div class="card">
    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th colspan="2"></th>
                </tr>
            </thead>
            <tbody>
                @foreach($posts as $post)
                <tr>
                    <td>{{ $post->id }}</td>
                    <td>{{ $post->name }}</td>
                    <td with="10px">
                        <a class="btn btn-primary btn-sm" href="{{ route('admin.posts.edit', $post) }}">Editar</a>
                    </td>
                    <td with="10px">
                        <form action="" method="POST">
                            {{-- @csrf
                            @method('DELETE')


                            <button class="btn btn-danger btn-sm" type="submit">Eliminar</button>   --}}
                        </form>
                    </td>
                </tr>

                @endforeach
            </tbody>
        </table>
    </div>

    <div class="card-footer">
        {{ $posts->links() }}
    </div>
</div>
