@extends('admin.layout.layout')
@section('content')

<!-- Main content -->
<div class="flex-1 flex flex-col overflow-hidden">
    <!-- Header -->
    <header class="flex justify-between items-center p-4 bg-white border-b text-gray-800">
        <div class="flex items-center">
                <button id="sidebar-toggle-open" class="text-gray-600 focus:outline-none lg:hidden">
                <i class="fas fa-bars fa-lg"></i>
            </button>
            <h1 id="page-title" class="text-2xl font-semibold ml-4">Alterar Palavra-Passe</h1>
        </div>
        <div class="flex items-center">
            <div class="relative">
                <button class="flex items-center focus:outline-none">
                    <img class="w-10 h-10 rounded-full object-cover" src="https://placehold.co/100x100/3B82F6/FFFFFF?text=A" alt="Admin">
                    <span class="hidden md:inline ml-2">{{ Auth::guard('admin')->user()->name  }}</span>
                </button>
            </div>
                <form method="POST" action="#" class="ml-4">
                <a href="{{ url('admin/logout') }}" class="text-gray-500 hover:text-red-600 focus:outline-none text-sm flex items-center">
                    <i class="fas fa-sign-out-alt mr-2"></i>Logout
                </a>
            </form>
        </div>
    </header>
    
            <!-- Content -->
    <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-100 p-6 text-gray-800">

        <div id="update-password" class="page-contents active">
            <div class="bg-white shadow-md rounded-lg p-8">
                <h2 class="text-xl font-semibold mb-4">Atualizar Minha Palavra-Passe</h2>
                <form method="POST" action="#">@csrf
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="my-email">Email</label>
                        <input id="my-email" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="email" value="{{ Auth::guard('admin')->user()->email }}" readonly>
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="current_pwd">Senha Atual</label>
                        <input id="current_pwd" name="current_pwd" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="password" placeholder="Digite a sua senha atual!">
                        <span id="verifyPwd"></span>
                    </div>                
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="new_pwd">Nova Senha</label>
                        <input id="new_pwd" name="new_pwd" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"  type="password" placeholder="Deigite uma nova senha">
                    </div>                <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="confirm_pwd">Confirmar Nova Senha</label>
                        <input id="confirm_pwd" name="confirm_pwd" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="password" placeholder="Confirme a nova senha">
                    </div>
                    <div class="mt-6 text-right">
                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg">Guardar Alterações</button>
                    </div>
                </form>
            </div>
        </div>

    </main>
</div>

@endsection