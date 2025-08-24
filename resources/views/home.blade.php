@extends('layouts.home')

@section('title', 'Página Inicial')

@section('content')

{{-- Bloco 1: Conteúdo de Apresentação com padding para o header --}}
<div class="w-full flex flex-col items-center justify-start pt-24 md:pt-32 px-4 gap-6">
    
    <img src="{{ asset('img/anna.png') }}" alt="Anna Millard" 
         class="h-40 w-40 rounded-full border-4 border-white shadow-lg animate-fade-in-down">

    <h1 class="font-maragsa text-tema-200 text-6xl animate-fade-in" style="animation-delay: 0.2s;">
        Anna Millard
    </h1>

    <div class="w-4/5 md:w-1/2 h-0.5 bg-tema-300/50 rounded-full animate-fade-in" style="animation-delay: 0.4s;"></div>
    
    <p class="font-montserrat max-w-2xl text-white/80 leading-relaxed text-center animate-fade-in" style="animation-delay: 0.6s;">
        Graduada em jornalismo pela Universidade Federal de Ouro Preto em 2024, possuo experiências profissionais como radialista, assessora, gestora de redes sociais, fotógrafa, redatora.
    </p>
</div>

{{-- Bloco 2: Barra de Navegação --}}
<nav class="w-full bg-tema-300 mt-16 py-4 animate-fade-in" style="animation-delay: 0.8s;">
    <ul class="flex justify-center items-center gap-6 md:gap-10">
        <li>
            <a href="#" class="font-montserrat uppercase tracking-widest text-tema-100 font-bold transition-all duration-300 hover:text-white hover:tracking-wider">
                Experiências
            </a>
        </li>
        <li>
            <a href="#" class="font-montserrat uppercase tracking-widest text-tema-100 font-bold transition-all duration-300 hover:text-white hover:tracking-wider">
                Textos
            </a>
        </li>
        <li>
            <a href="#" class="font-montserrat uppercase tracking-widest text-tema-100 font-bold transition-all duration-300 hover:text-white hover:tracking-wider">
                Fotos
            </a>
        </li>
        <li>
            <a href="#" class="font-montserrat uppercase tracking-widest text-tema-100 font-bold transition-all duration-300 hover:text-white hover:tracking-wider">
                Contato
            </a>
        </li>
    </ul>
</nav>

{{-- Bloco 3: Área para Conteúdo Futuro --}}
<div class="w-full px-4 md:px-8 py-16 bg-black/20">
    <div class="container mx-auto">
        <h2 class="font-maragsa text-tema-200 text-5xl mb-8 text-center">Meus Trabalhos</h2>
        
        <div class="min-h-[50vh] border-2 border-dashed border-gray-500 rounded-lg flex items-center justify-center">
            <p class="text-gray-500 font-montserrat">Futuro conteúdo (fotos, textos, etc.) entrará aqui.</p>
        </div>
    </div>
</div>

@endsection
