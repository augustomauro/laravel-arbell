<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl">Usuarios</h2>
    </x-slot>

    <div class="py-4">
        <a href="{{ route('admin.users.create') }}" class="bg-blue-500 text-green-600 px-4 py-2 rounded">Nuevo Usuario</a>

        <table class="w-full mt-4">
            <thead>
                <tr>
                    <th>Nombre</th><th>Email</th><th>Perfil</th><th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->profile_id == 1 ? 'Admin' : 'Usuario' }}</td>
                    <td>
                        <a href="{{ route('admin.users.edit', $user) }}" class="text-blue-600">Editar</a>
                        <form action="{{ route('admin.users.destroy', $user) }}" method="POST" class="inline">
                            @csrf @method('DELETE')
                            <button type="submit" class="text-red-600">Eliminar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        @if(Session::has('message'))
        <p class="alert alert-info text-gray-600">{{ Session::get('message') }}</p>
        @endif

        {{ $users->links() }}
    </div>
</x-app-layout>
