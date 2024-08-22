@extends('layouts.app')

@section('content')
    <div class="container">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>E-mail</th>
                    <th>Função</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            <form 
                                class="mb-0" 
                                id="roleForm_{{ $loop->index }}" 
                                action="{{ route('user.update', $user) }}" 
                                method="POST"
                            >
                                @csrf
                                @method('PUT')
                                <select name="role" class="form-select">
                                    <option 
                                        value="author" 
                                        {{ $user->role === 'author' ? 'selected' : '' }}
                                    >
                                        Autor
                                    </option>
                                    <option 
                                        value="admin" 
                                        {{ $user->role === 'admin' ? 'selected' : '' }}
                                    >
                                        Administrador
                                    </option>
                                </select>
                            </form>
                        </td>
                        <td>
                            <div class="d-flex gap-2">
                                <form 
                                    class="mb-0"
                                    action="{{ route('user.destroy', $user->id) }}" 
                                    method="POST"
                                    onsubmit="return confirm('Tem certeza que deseja excluir este usuário?');"
                                >
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Excluir</button>
                                </form>
                                <button type="submit" class="btn btn-success" onclick="submitRoleForm({{ $loop->index }})">Salvar</button>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        {{ $users->links() }}
    </div>

    <script>
        function submitRoleForm(index) {
            document.getElementById('roleForm_' + index).submit();
        }
    </script>
@endsection