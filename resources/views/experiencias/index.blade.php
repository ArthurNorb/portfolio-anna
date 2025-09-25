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
            <a href="route('experiencias.create')" class="font-montserrat text-sm uppercase tracking-widest bg-tema-200 text-white py-2 px-4 rounded hover:bg-tema-300 transition-colors self-start md:self-center">
                + Nova Experiência
            </a>
        </div>

        {{-- Lista de Experiências --}}
        <div class="space-y-8">
            @forelse ($experiencias as $experiencia)
                <div class="relative">
                    {{-- Título da Experiência --}}
                    <h2 class="font-montserrat font-bold uppercase tracking-wider text-white text-lg">
                        {{ $experiencia->titulo }}
                    </h2>

                    {{-- Empresa e Período --}}
                    <p class="font-montserrat text-white/80 mt-1">
                        {{-- Assumindo que você tem o campo 'empresa' --}}
                        {{ $experiencia->empresa }} | 
                        
                        {{-- Formata a data de entrada para "Mês de Ano" --}}
                        <span class="capitalize">{{ $experiencia->data_entrada->translatedFormat('F Y') }}</span>
                        
                        —

                        @if ($experiencia->data_saida)
                            <span class="capitalize">{{ $experiencia->data_saida->translatedFormat('F Y') }}</span>
                        @else
                            <span class="font-bold text-tema-200">Atual</span>
                        @endif
                    </p>

                    {{-- Descrição das Tarefas --}}
                    {{-- A classe 'whitespace-pre-line' preserva as quebras de linha que você digitar no formulário --}}
                    <p class="font-montserrat text-white/70 leading-relaxed mt-4 whitespace-pre-line">
                        {{ $experiencia->descricao }}
                    </p>
                    
                    {{-- Botões de Ação (Editar/Excluir) --}}
                    <div class="absolute top-0 right-0 flex gap-4">
                        <a href="{{ route('experiencias.edit', $experiencia) }}" class="text-white/50 hover:text-tema-200 transition-colors" title="Editar">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L6.832 19.82a4.5 4.5 0 0 1-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 0 1 1.13-1.897L16.863 4.487Zm0 0L19.5 7.125" />
                            </svg>
                        </a>
                        {{-- Formulário para o botão de deletar --}}
                        <form action="{{-- route('experiencias.destroy', $experiencia) --}}" method="POST" onsubmit="return confirm('Tem certeza que deseja excluir esta experiência?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-white/50 hover:text-red-500 transition-colors" title="Excluir">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                                  <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                </svg>
                            </button>
                        </form>
                    </div>
                </div>

                {{-- Linha Separadora Horizontal --}}
                @if (!$loop->last)
                    <hr class="border-t-2 border-tema-200/30">
                @endif

            @empty
                {{-- Mensagem para quando não houver experiências --}}
                <div class="text-center py-16">
                    <p class="font-montserrat text-tema-300/60">Nenhuma experiência foi cadastrada ainda.</p>
                </div>
            @endforelse
        </div>
        
    </div>
</div>
@endsection