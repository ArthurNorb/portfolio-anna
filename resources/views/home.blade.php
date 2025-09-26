@extends('layouts.home')

@section('title', 'Página Inicial')

@section('content')

{{-- Bloco 1: Conteúdo de Apresentação com Responsividade Ajustada --}}
<div class="w-full flex flex-col items-center justify-start pt-24 md:pt-32 px-4 gap-4 md:gap-6 pb-5">
    
    <img src="{{ asset('img/anna.png') }}" alt="Anna Millard" 
         class="h-32 w-32 md:h-40 md:w-40 rounded-full border-4 border-white shadow-lg animate-fade-in-down">

    {{-- Título agora responsivo: menor no celular, maior no desktop --}}
    <h1 class="font-maragsa text-tema-200 text-5xl md:text-7xl animate-fade-in-down" style="animation-delay: 0.2s;">
        Anna Millard
    </h1>

    <div class="w-4/5 md:w-1/2 h-0.5 bg-tema-300/50 rounded-full animate-fade-in-down" style="animation-delay: 0.4s;"></div>
    
    {{-- Parágrafo com texto um pouco maior em telas grandes --}}
    <p class="font-montserrat max-w-2xl text-white/80 leading-relaxed text-center text-base md:text-lg animate-fade-in-down" style="animation-delay: 0.6s;">
        Graduada em jornalismo pela Universidade Federal de Ouro Preto em 2024, possuo experiências profissionais como radialista, assessora, gestora de redes sociais, fotógrafa, redatora.
    </p>
</div>

{{-- Bloco 2: Barra de Navegação com Responsividade Ajustada --}}
<nav class="w-full bg-tema-300 mt-8 md:mt-12 py-4 animate-fade-in-down" style="animation-delay: 0.8s;">
    {{-- Navegação com menos espaçamento em telas pequenas --}}
    <ul class="flex justify-center items-center gap-4 md:gap-10 text-xs md:text-base">
        <li>
            <a href="{{ route('experiencias.index') }}" class="font-montserrat uppercase tracking-widest text-tema-100 font-bold transition-all duration-300 hover:text-white hover:tracking-wider">
                Experiências
            </a>
        </li>
        <li>
            <a href="#" class="font-montserrat uppercase tracking-widest text-tema-100 font-bold transition-all duration-300 hover:text-white hover:tracking-wider">
                Textos
            </a>
        </li>
        <li>
            <a href="{{ route('fotos.index') }}" class="font-montserrat uppercase tracking-widest text-tema-100 font-bold transition-all duration-300 hover:text-white hover:tracking-wider">
                Fotos
            </a>
        </li>
        <li>
            <a href="{{ route('contact.index') }}" class="font-montserrat uppercase tracking-widest text-tema-100 font-bold transition-all duration-300 hover:text-white hover:tracking-wider">
                Contato
            </a>
        </li>
    </ul>
</nav>

{{-- Bloco 3: Carrossel de Fotos Infinito com Margens --}}
<div class="w-full py-16 md:py-24 animate-fade-in" style="animation-delay: 1s;">
    <div class="container mx-auto text-center px-4">
        <h2 class="font-maragsa text-tema-200 text-4xl md:text-5xl mb-8">Últimos Trabalhos</h2>
    </div>

    <div class="scroller" data-speed="slow">
        <ul class="scroller__inner">
            {{-- Loop para exibir cada foto --}}
            @foreach ($fotos as $foto)
                <li>
                    {{-- CORREÇÃO: Adicionamos um padding (p-2) e um fundo branco para criar a margem --}}
                    <div class="bg-white p-2 rounded-md shadow-lg h-full">
                        <img src="{{ Illuminate\Support\Facades\Storage::url($foto->imagem) }}" 
                             alt="{{ $foto->titulo ?? 'Foto de Anna Millard' }}"
                             class="rounded-sm w-full h-full object-cover">
                    </div>
                </li>
            @endforeach
            {{-- DUPLICAMOS A LISTA para o efeito de loop infinito --}}
            @foreach ($fotos as $foto)
                <li aria-hidden="true">
                    <div class="bg-white p-2 rounded-md shadow-lg h-full">
                        <img src="{{ Illuminate\Support\Facades\Storage::url($foto->imagem) }}" 
                             alt="{{ $foto->titulo ?? 'Foto de Anna Millard' }}"
                             class="rounded-sm w-full h-full object-cover">
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
</div>

@endsection