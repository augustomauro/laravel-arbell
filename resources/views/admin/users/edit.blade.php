<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl">Editar Usuario</h2>
    </x-slot>

    <div class="py-4 max-w-xl mx-auto">
        <form action="{{ route('admin.users.update', $user) }}" method="POST" class="space-y-4">
            @csrf
            @method('PUT')

            <div>
                <label for="name" class="block font-medium">Nombre</label>
                <input type="text" name="name" id="name" class="w-full border rounded p-2" required value="{{ old('name', $user->name) }}">
                @error('name') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
            </div>

            <div>
                <label for="email" class="block font-medium">Correo</label>
                <input type="email" name="email" id="email" class="w-full border rounded p-2" required value="{{ old('email', $user->email) }}">
                @error('email') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
            </div>

            <div>
                <label for="phone" class="block font-medium">Phone</label>
                <input type="phone" name="phone" id="phone" class="w-full border rounded p-2" required value="{{ old('phone', $user->phone) }}">
                @error('phone') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
            </div>

            <div>
                <label for="profile_id" class="block font-medium">Rol</label>
                <select name="profile_id" id="profile_id" class="w-full border rounded p-2">
                    <option value="1" {{ old('profile_id', $user->profile_id) == 1 ? 'selected' : '' }}>Administrador</option>
                    <option value="2" {{ old('profile_id', $user->profile_id) == 2 ? 'selected' : '' }}>Usuario</option>
                </select>
                @error('profile_id') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
            </div>

            <div class="flex justify-end space-x-2">
            <button type="button" onclick="javascript: event.preventDefault(); window.location.href='<?= route('admin.users.index') ?>'" class="text-red-600">Cancelar</a>
                <button type="submit" class="bg-green-600 text-green-600 px-4 py-2 rounded">Actualizar</button>
            </div>
        </form>
    </div>
</x-app-layout>
