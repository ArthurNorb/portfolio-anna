@extends('layouts.home')

@section('title', 'Página Inicial')

@section('content')

{{-- Bloco 1: Conteúdo de Apresentação com padding para o header --}}
<div class="w-full flex flex-col items-center justify-start pt-16 px-4 gap-4">
    
    <img src="{{ asset('img/anna.png') }}" alt="Anna Millard" 
         class="h-40 w-40 rounded-full border-4 border-white shadow-lg animate-fade-in-down">

    <h1 class="font-maragsa text-tema-200 text-6xl  animate-fade-in-down" style=" animate-fade-in-down: 0.2s;">
        Anna Millard
    </h1>

    <div class="w-4/5 md:w-1/2 h-0.5 bg-tema-300/50 rounded-full  animate-fade-in-down" style=" animate-fade-in-down: 0.4s;"></div>
    
    <p class="font-montserrat max-w-2xl text-white/80 leading-relaxed text-center  animate-fade-in-down" style=" animate-fade-in-down: 0.6s;">
        Graduada em jornalismo pela Universidade Federal de Ouro Preto em 2024, possuo experiências profissionais como radialista, assessora, gestora de redes sociais, fotógrafa, redatora.
    </p>
</div>

{{-- Bloco 2: Barra de Navegação --}}
<nav class="w-full bg-tema-300 mt-4 py-4  animate-fade-in-down" style=" animate-fade-in-down: 0.8s;">
    <ul class="flex justify-center items-center gap-6 md:gap-10">
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

{{-- Bloco 3: Carrossel de Fotos Infinito --}}
<div class="w-full py-16 animate-fade-in" style="animation-delay: 1s;">
    <div class="container mx-auto text-center">
        <h2 class="font-maragsa text-tema-200 text-5xl mb-8">Últimos Trabalhos</h2>
    </div>

    {{-- A MÁGICA COMEÇA AQUI --}}
    {{-- Container principal que esconde o excesso --}}
    <div class="scroller" data-speed="slow">
        {{-- Lista de fotos que vai animar --}}
        <ul class="scroller__inner">
            {{-- Loop para exibir cada foto --}}
            @foreach ($fotos as $foto)
                <li>
                    <img src="{{ Illuminate\Support\Facades\Storage::url($foto->imagem) }}" 
                         alt="{{ $foto->titulo ?? 'Foto de Anna Millard' }}">
                </li>
            @endforeach
            {{-- DUPLICAMOS A LISTA para o efeito de loop infinito --}}
            @foreach ($fotos as $foto)
                <li aria-hidden="true">
                    <img src="{{ Illuminate\Support\Facades\Storage::url($foto->imagem) }}" 
                         alt="{{ $foto->titulo ?? 'Foto de Anna Millard' }}">
                </li>
            @endforeach
        </ul>
    </div>
</div>

@endsection
