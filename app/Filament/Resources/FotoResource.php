<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FotoResource\Pages;
use App\Filament\Resources\FotoResource\RelationManagers;
use App\Models\Foto;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class FotoResource extends Resource
{
    protected static ?string $model = Foto::class;

    protected static ?string $navigationIcon = 'heroicon-o-photo';
    protected static ?string $navigationLabel = 'Galeria de Fotos';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\FileUpload::make('imagem')
                    ->label('Foto')
                    ->image() // Valida se é uma imagem
                    ->imageEditor() // Permite editar a imagem (cortar, girar, etc)
                    ->directory('fotos') // Salva em 'storage/app/public/fotos'
                    ->required(),
                Forms\Components\TextInput::make('titulo')
                    ->label('Título ou Legenda')
                    ->maxLength(255),
                Forms\Components\TextInput::make('ordem')
                    ->numeric()
                    ->default(0),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('imagem')->label('Preview'),
                Tables\Columns\TextColumn::make('titulo')->searchable(),
                Tables\Columns\TextColumn::make('ordem')->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            // Habilita a função de arrastar para reordenar
            ->reorderable('ordem');
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListFotos::route('/'),
            'create' => Pages\CreateFoto::route('/create'),
            'edit' => Pages\EditFoto::route('/{record}/edit'),
        ];
    }
}
