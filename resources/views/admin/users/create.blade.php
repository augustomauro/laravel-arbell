<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl">Crear Usuario</h2>
    </x-slot>

    <div class="py-4 max-w-xl mx-auto">
        <form action="{{ route('admin.users.store') }}" method="POST" class="space-y-4">
            @csrf

            <div>
                <label for="name" class="block font-medium">Nombre</label>
                <input type="text" name="name" id="name" class="w-full border rounded p-2" required value="{{ old('name') }}">
                @error('name') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
            </div>

            <div>
                <label for="email" class="block font-medium">Correo</label>
                <input type="email" name="email" id="email" class="w-full border rounded p-2" required value="{{ old('email') }}">
                @error('email') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
            </div>

            <div>
                <label for="password" class="block font-medium">Contraseña</label>
                <input type="password" name="password" id="password" class="w-full border rounded p-2" required>
                @error('password') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
            </div>

            <div>
                <label for="phone" class="block font-medium">Phone</label>
                <input type="phone" name="phone" id="phone" class="w-full border rounded p-2" required value="{{ old('phone') }}">
                @error('phone') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
            </div>

            <div>
                <label for="profile_id" class="block font-medium">Rol</label>
                <select name="profile_id" id="profile_id" class="w-full border rounded p-2">
                    <option value="1" {{ old('profile_id') == 1 ? 'selected' : '' }}>Administrador</option>
                    <option value="2" {{ old('profile_id') == 2 ? 'selected' : '' }}>Usuario</option>
                </select>
                @error('profile_id') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
            </div>

            <div class="flex justify-end space-x-2">
                <button type="button" onclick="javascript: event.preventDefault(); window.location.href='<?= route('admin.users.index') ?>'" class="text-red-600">Cancelar</a>
                <button type="submit" class="bg-blue-600 text-green-600 px-4 py-2 rounded">Guardar</button>
            </div>
        </form>
    </div>
</x-app-layout>
