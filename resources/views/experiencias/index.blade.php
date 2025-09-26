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
                @filamentAdmin
                    <a href="{{ route('filament.admin.resources.experiencias.create') }}" target="_blank"
                        class="font-montserrat text-sm uppercase tracking-widest bg-tema-300 text-tema-100 py-2 px-4 rounded hover:bg-tema-200 transition-colors self-start md:self-center">
                        + Nova Experiência
                    </a>
                @endfilamentAdmin
            </div>

            <div class="space-y-8">
                @forelse ($experiencias as $experiencia)
                    <div class="flex flex-col md:flex-row gap-6 md:gap-8 items-start">

                        @if ($experiencia->imagem)
                            <div class="w-full md:w-48 flex-shrink-0">
                                <img src="{{ Illuminate\Support\Facades\Storage::url($experiencia->imagem) }}"
                                    alt="Imagem para {{ $experiencia->titulo }}"
                                    class="rounded-lg object-cover w-full h-40 md:h-full shadow-md">
                            </div>
                        @endif

                        <div class="relative flex-grow">
                            <h2 class="font-montserrat font-bold uppercase tracking-wider text-gray-800 text-lg">
                                {{ $experiencia->titulo }}
                            </h2>

                            <p class="font-montserrat text-gray-600 mt-1">
                                {{ $experiencia->empresa }} |
                                <span class="capitalize">{{ $experiencia->data_entrada->translatedFormat('F Y') }}</span>
                                —
                                @if ($experiencia->data_saida)
                                    <span class="capitalize">{{ $experiencia->data_saida->translatedFormat('F Y') }}</span>
                                @else
                                    <span class="font-bold text-tema-200">Atual</span>
                                @endif
                            </p>

                            <p class="font-montserrat text-gray-700 leading-relaxed mt-4 whitespace-pre-line">
                                {{ $experiencia->descricao }}
                            </p>

                            @filamentAdmin
                                <div class="absolute top-0 right-0 flex gap-4">
                                    <a href="{{ route('filament.admin.resources.experiencias.edit', ['record' => $experiencia]) }}"
                                        target="_blank" class="text-gray-400 hover:text-tema-200 transition-colors"
                                        title="Editar">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="size-5">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L6.832 19.82a4.5 4.5 0 0 1-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 0 1 1.13-1.897L16.863 4.487Zm0 0L19.5 7.125" />
                                        </svg>
                                    </a>
                                </div>
                            @endfilamentAdmin
                        </div>
                    </div>

                    @if (!$loop->last)
                        <hr class="border-t-2 border-tema-200/30 mt-8">
                    @endif

                @empty
                    <div class="text-center py-16">
                        <p class="font-montserrat text-gray-500">Nenhuma experiência foi cadastrada ainda.</p>
                    </div>
                @endforelse
            </div>

        </div>
    </div>
@endsection
