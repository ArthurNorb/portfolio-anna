@extends('layouts.app')

@section('page-title', 'Experiências')
@section('title', 'Minhas Experiências')

@section('content')
<div class="w-full min-h-screen pt-24 md:pt-32 px-4 md:px-8 pb-24">
    <div class="container mx-auto max-w-7xl text-left bg-white opacity-90 p-6 rounded-lg shadow-lg">

        <div class="flex flex-col md:flex-row justify-between md:items-center gap-4 mb-12">
            <h1 class="font-maragsa text-tema-200 text-5xl">
                Experiências
            </h1>
            <a href="{{ route('filament.admin.resources.experiencias.create') }}" class="font-montserrat text-sm uppercase tracking-widest bg-tema-200 text-white py-2 px-4 rounded hover:bg-tema-300 transition-colors self-start md:self-center">
                + Nova Experiência
            </a>
        </div>

        {{-- Lista de Experiências --}}
        <div class="space-y-8">
            @forelse ($experiencias as $experiencia)
                <div class="relative">
                    <h2 class="font-montserrat font-bold uppercase tracking-wider  text-lg">
                        {{ $experiencia->titulo }}
                    </h2>

                    <p class="font-montserrat /80 mt-1">
                        {{ $experiencia->empresa }} | 
                        
                        <span class="capitalize">{{ $experiencia->data_entrada->translatedFormat('F Y') }}</span>
                        
                        —

                        @if ($experiencia->data_saida)
                            <span class="capitalize">{{ $experiencia->data_saida->translatedFormat('F Y') }}</span>
                        @else
                            <span class="font-bold text-tema-200">Atual</span>
                        @endif
                    </p>

                    <p class="font-montserrat /70 leading-relaxed mt-4 whitespace-pre-line">
                        {{ $experiencia->descricao }}
                    </p>
                    
                    <div class="absolute top-0 right-0 flex gap-4">
                        <a href=""{{ route('filament.admin.resources.experiencias.edit', ['record' => $experiencia]) }}}" class="/50 hover:text-tema-200 transition-colors" title="Editar">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L6.832 19.82a4.5 4.5 0 0 1-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 0 1 1.13-1.897L16.863 4.487Zm0 0L19.5 7.125" />
                            </svg>
                        </a>
                    </div>
                </div>
                @if (!$loop->last)
                    <hr class="border-t-2 border-tema-200/30">
                @endif

            @empty
                <div class="text-center py-16">
                    <p class="font-montserrat text-tema-300/60">Nenhuma experiência foi cadastrada ainda.</p>
                </div>
            @endforelse
        </div>
        
    </div>
</div>
@endsection