<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edição de usuário') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 mb-4">
                    <p class="mb-4">Editando nível de acesso do usuário <strong>{{$user->name}}</strong></p>
                    <p>Nível de acesso atual: {{$user->level}}</p>
                </div>

                <div class="p-6 text-gray-900">
                    <form action="{{route('edit.update', $user->id)}}" method="post">
                        @csrf
                        @method('PUT')

                        <label for="level">Escolha o seu nível de usuário:</label>

                        <select name="level" required class="py-1 pr-8 rounded hover:bg-gray-100 mx-3">
                            <option value="" selected disabled>Escolha uma opção</option>
                            <option value="user">Usuário comum</option>
                            <option value="admin">Administrador</option>
                        </select>

                        <button type="submit" class="bg-blue-500 text-white rounded-lg px-4 py-2 hover:bg-blue-600">
                            <i class="fa-regular fa-floppy-disk mr-2"></i>Salvar alterações</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
