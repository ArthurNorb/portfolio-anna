@extends('layouts.app')

@section('page-title', 'Contato')
@section('title', 'Entre em Contato')

@section('content')
<div class="w-full min-h-screen pt-24 md:pt-32 px-4 md:px-8 pb-24">
    <div class="container mx-auto max-w-2xl text-left">

        <div class="bg-white/90 p-6 md:p-8 rounded-lg shadow-lg text-gray-800">
            <h1 class="font-maragsa text-tema-200 text-5xl mb-2 text-center">
                Contato
            </h1>
            <p class="font-montserrat text-gray-600 mb-8 text-center">
                Tem alguma pergunta ou proposta? Preencha o formulário abaixo.
            </p>

            @if(session('success'))
                <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-6 rounded" role="alert">
                    <p class="font-bold">Sucesso!</p>
                    <p>{{ session('success') }}</p>
                </div>
            @endif

            <form action="{{ route('contact.store') }}" method="POST" class="space-y-6">
                @csrf
                
                <div>
                    <label for="name" class="font-montserrat uppercase text-sm font-bold text-gray-600">Seu Nome</label>
                    <input type="text" name="name" id="name" required
                           class="w-full mt-2 p-3 bg-white border-2 border-gray-300 rounded focus:border-tema-200 focus:ring-0 transition-colors">
                    @error('name')<span class="text-red-500 text-sm">{{ $message }}</span>@enderror
                </div>

                <div>
                    <label for="email" class="font-montserrat uppercase text-sm font-bold text-gray-600">Seu E-mail</label>
                    <input type="email" name="email" id="email" required
                           class="w-full mt-2 p-3 bg-white border-2 border-gray-300 rounded focus:border-tema-200 focus:ring-0 transition-colors">
                    @error('email')<span class="text-red-500 text-sm">{{ $message }}</span>@enderror
                </div>

                <div>
                    <label for="message" class="font-montserrat uppercase text-sm font-bold text-gray-600">Sua Mensagem</label>
                    <textarea name="message" id="message" rows="6" required
                              class="w-full mt-2 p-3 bg-white border-2 border-gray-300 rounded focus:border-tema-200 focus:ring-0 transition-colors"></textarea>
                    @error('message')<span class="text-red-500 text-sm">{{ $message }}</span>@enderror
                </div>

                <div class="text-right">
                    <button type="submit" class="font-montserrat text-sm uppercase tracking-widest bg-tema-200 text-white font-bold py-3 px-6 rounded hover:bg-tema-300 transition-colors">
                        Enviar Mensagem
                    </button>
                </div>
            </form>
        </div>

    </div>
</div>
@endsection