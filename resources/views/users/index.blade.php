<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <p class="mb-4">Olá <strong>{{Auth::user()->name}}</strong></p>
                </div>

                <div class="p-6 text-gray-900">

                    <div class="p-3 bg-gray-100 rounded-lg mb-4">
                        {{$users->links()}}
                    </div>
                    <table class="table-auto w-full">
                        <thead class="text-left bg-gray-100">
                            <tr>
                                <th class="pl-2 text-center">Nível</th>
                                <th>Nome</th>
                                <th>Email</th>
                                <th>Data de cadastro</th>
                                <th class="pt-4 pb-4">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr class="hover:bg-gray-100">
                                    <td class="text-center">
                                        @if ($user->level == 'admin')
                                            <i class="fa-solid fa-user-tie"></i>
                                        @endif
                                    </td>
                                    <td class="py-2">{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->created_at}}</td>
                                    <td>
                                        @if ($user->level == 'admin')
                                            <a href="{{route('users.edit', $user->id)}}">Editar</a>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
