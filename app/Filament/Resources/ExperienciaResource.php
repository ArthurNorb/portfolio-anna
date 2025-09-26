<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ExperienciaResource\Pages;
use App\Filament\Resources\ExperienciaResource\RelationManagers;
use App\Models\Experiencia;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ExperienciaResource extends Resource
{
    protected static ?string $model = Experiencia::class;

    protected static ?string $navigationIcon = 'heroicon-o-briefcase'; // Ícone no menu lateral

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                // Campo Título
                Forms\Components\TextInput::make('titulo')
                    ->required()
                    ->maxLength(255)
                    ->columnSpanFull(),

                // Campo Empresa (lembre-se de adicionar este campo na sua migration!)
                Forms\Components\TextInput::make('empresa')
                    ->required()
                    ->maxLength(255),

                // Campo para a Imagem (Filament cuida do upload!)
                Forms\Components\FileUpload::make('imagem')
                    ->directory('experiencias') // Salva as imagens na pasta 'storage/app/public/experiencias'
                    ->image(),

                // Campo Descrição
                Forms\Components\Textarea::make('descricao')
                    ->required()
                    ->columnSpanFull(),

                // Campos de Data
                Forms\Components\DatePicker::make('data_entrada')
                    ->required(),
                Forms\Components\DatePicker::make('data_saida'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                // Coluna da Imagem
                Tables\Columns\ImageColumn::make('imagem'),

                // Coluna do Título (com busca)
                Tables\Columns\TextColumn::make('titulo')
                    ->searchable(),

                // Coluna da Empresa
                Tables\Columns\TextColumn::make('empresa')
                    ->searchable(),

                // Colunas de Data (formatadas e ordenáveis)
                TextColumn::make('data_entrada')
                    ->date('m/Y')
                    ->sortable(),
                TextColumn::make('data_saida')
                    ->date('m/Y')
                    ->sortable()
                    ->placeholder('Atual'), // Texto se a data for nula
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListExperiencias::route('/'),
            'create' => Pages\CreateExperiencia::route('/create'),
            'edit' => Pages\EditExperiencia::route('/{record}/edit'),
        ];
    }
}
