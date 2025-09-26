@extends('layouts.app')

@section('page-title', 'Contato')
@section('title', 'Entre em Contato')

@section('content')
<div class="w-full min-h-screen pt-24 md:pt-32 px-4 md:px-8 pb-24">
    <div class="container mx-auto max-w-2xl text-left">

        <div class="bg-white/90 p-6 md:p-8 rounded-lg shadow-lg text-gray-800">
            
            {{-- 1. Título e Parágrafo Introdutório --}}
            <div class="text-center mb-12">
                <h1 class="font-maragsa text-tema-200 text-5xl mb-2">
                    Vamos Conversar?
                </h1>
                <p class="font-montserrat text-gray-600 leading-relaxed">
                    Estou sempre aberta a novas oportunidades, colaborações e pautas interessantes. Você pode me encontrar nos canais abaixo ou me enviar uma mensagem direta pelo formulário.
                </p>
            </div>

            {{-- 2. Seção de Contatos Diretos --}}
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mb-12">
                {{-- Contato por E-mail --}}
                <a href="mailto:annabeatrizcomunica@gmail.com" class="flex items-center gap-4 p-4 rounded-lg hover:bg-white/70 transition-colors">
                    <svg class="size-8 text-tema-300 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" /></svg>
                    <div>
                        <h3 class="font-montserrat font-bold text-gray-800">E-mail</h3>
                        <p class="text-gray-600 text-sm">annabeatrizcomunica@gmail.com</p>
                    </div>
                </a>
                {{-- Contato por Telefone --}}
                <a href="tel:+5537998202164" class="flex items-center gap-4 p-4 rounded-lg hover:bg-white/70 transition-colors">
                    <svg class="size-8 text-tema-300 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z" /></svg>
                    <div>
                        <h3 class="font-montserrat font-bold text-gray-800">Telefone</h3>
                        <p class="text-gray-600 text-sm">+55 37 99820-2164</p>
                    </div>
                </a>
                {{-- Contato por LinkedIn --}}
                <a href="https://www.linkedin.com/in/anna-millard-0aa0261a4/" target="_blank" class="flex items-center gap-4 p-4 rounded-lg hover:bg-white/70 transition-colors">
                    <svg class="size-8 text-tema-300 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                    <div>
                        <h3 class="font-montserrat font-bold text-gray-800">LinkedIn</h3>
                        <p class="text-gray-600 text-sm">/anna-millard</p>
                    </div>
                </a>
                {{-- Contato por Instagram --}}
                <a href="https://www.instagram.com/annamllrd/" target="_blank" class="flex items-center gap-4 p-4 rounded-lg hover:bg-white/70 transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" class="size-12 text-tema-300 flex-shrink-0" fill="currentColor" aria-hidden="true"
                            viewBox="0 0 640 640"><!--!Font Awesome Free v7.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                            <path
                                d="M320.3 205C256.8 204.8 205.2 256.2 205 319.7C204.8 383.2 256.2 434.8 319.7 435C383.2 435.2 434.8 383.8 435 320.3C435.2 256.8 383.8 205.2 320.3 205zM319.7 245.4C360.9 245.2 394.4 278.5 394.6 319.7C394.8 360.9 361.5 394.4 320.3 394.6C279.1 394.8 245.6 361.5 245.4 320.3C245.2 279.1 278.5 245.6 319.7 245.4zM413.1 200.3C413.1 185.5 425.1 173.5 439.9 173.5C454.7 173.5 466.7 185.5 466.7 200.3C466.7 215.1 454.7 227.1 439.9 227.1C425.1 227.1 413.1 215.1 413.1 200.3zM542.8 227.5C541.1 191.6 532.9 159.8 506.6 133.6C480.4 107.4 448.6 99.2 412.7 97.4C375.7 95.3 264.8 95.3 227.8 97.4C192 99.1 160.2 107.3 133.9 133.5C107.6 159.7 99.5 191.5 97.7 227.4C95.6 264.4 95.6 375.3 97.7 412.3C99.4 448.2 107.6 480 133.9 506.2C160.2 532.4 191.9 540.6 227.8 542.4C264.8 544.5 375.7 544.5 412.7 542.4C448.6 540.7 480.4 532.5 506.6 506.2C532.8 480 541 448.2 542.8 412.3C544.9 375.3 544.9 264.5 542.8 227.5zM495 452C487.2 471.6 472.1 486.7 452.4 494.6C422.9 506.3 352.9 503.6 320.3 503.6C287.7 503.6 217.6 506.2 188.2 494.6C168.6 486.8 153.5 471.7 145.6 452C133.9 422.5 136.6 352.5 136.6 319.9C136.6 287.3 134 217.2 145.6 187.8C153.4 168.2 168.5 153.1 188.2 145.2C217.7 133.5 287.7 136.2 320.3 136.2C352.9 136.2 423 133.6 452.4 145.2C472 153 487.1 168.1 495 187.8C506.7 217.3 504 287.3 504 319.9C504 352.5 506.7 422.6 495 452z" />
                        </svg>
                    <div>
                        <h3 class="font-montserrat font-bold text-gray-800">Instagram</h3>
                        <p class="text-gray-600 text-sm">@annamllrd</p>
                    </div>
                </a>
            </div>

            {{-- Separador e Formulário --}}
            <hr class="border-t-2 border-gray-200 my-8">

            {{-- Mensagem de sucesso (se houver) --}}
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