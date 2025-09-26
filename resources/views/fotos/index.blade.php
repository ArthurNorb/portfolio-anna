@extends('layouts.app')

@section('page-title', 'Fotos')
@section('title', 'Galeria de Fotos')

@section('content')
<div class="w-full min-h-screen pt-24 md:pt-32 px-4 md:px-8 pb-24">
    <div class="container mx-auto max-w-7xl text-center">

        <h1 class="font-maragsa text-tema-200 text-5xl mb-4 animate-fade-in">
            Galeria de Fotos
        </h1>
        <p class="font-montserrat text-white/80 max-w-2xl mx-auto mb-12 animate-fade-in" style="animation-delay: 0.2s;">
            Uma coleção de momentos e coberturas fotográficas. Clique em uma imagem para ampliar.
        </p>

        @if($fotos->isNotEmpty())
            <div class="masonry-grid spotlight-group">
                @foreach ($fotos as $foto)
                    
                    {{-- CONTAINER DA POLAROID --}}
                    {{-- Este div cria o efeito do papel da foto.
                         - p-4: Padding em cima e nas laterais.
                         - pb-16: Padding maior embaixo para o espaço da legenda.
                         - rotate-2, group-hover:rotate-0: Efeito de rotação que se endireita no hover.
                         - Adicionamos a imagem de fundo (href) e o spotlight aqui.
                    --}}
                    <a href="{{ Illuminate\Support\Facades\Storage::url($foto->imagem) }}"
                       class="spotlight masonry-item group block bg-white p-4 pb-16 rounded-md shadow-lg relative
                              transition-transform duration-300 ease-in-out hover:!scale-110 hover:shadow-2xl
                              -rotate-2 hover:rotate-0 hover:z-10">
                        
                        {{-- A IMAGEM DENTRO DA POLAROID --}}
                        <div class="overflow-hidden">
                            <img src="{{ Illuminate\Support\Facades\Storage::url($foto->imagem) }}" 
                                 alt="{{ $foto->titulo ?? 'Foto de Anna Millard' }}"
                                 class="w-full h-auto object-cover transition-transform duration-500 ease-in-out group-hover:scale-110">
                        </div>

                        {{-- LEGENDA DA POLAROID --}}
                        {{-- Posicionada absolutamente na parte de baixo do padding. --}}
                        @if ($foto->titulo)
                            <p class="absolute bottom-4 left-4 right-4 text-center font-maragsa text-gray-700 text-xl">
                                {{ $foto->titulo }}
                            </p>
                        @endif
                    </a>
                @endforeach
            </div>
        @else
            <div class="py-16">
                <p class="font-montserrat text-white/60">Nenhuma foto foi adicionada à galeria ainda.</p>
            </div>
        @endif

    </div>
</div>
@endsection