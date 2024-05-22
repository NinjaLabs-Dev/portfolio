<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ExperienceRoleResource\Pages;
use App\Filament\Resources\ExperienceRoleResource\RelationManagers;
use App\Models\ExperienceRole;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ExperienceRoleResource extends Resource
{
    protected static ?string $model = ExperienceRole::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->label('Name')
                    ->required(),

                Forms\Components\TextInput::make('order')
                    ->label('Order')
                    ->type('number'),

                Forms\Components\Datepicker::make('start_date')
                    ->label('Start Date')
                    ->required(),

                Forms\Components\Datepicker::make('end_date')
                    ->label('End Date')
                    ->nullable(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('order')
                    ->sortable(),
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('start_date')
                    ->date('d/m/Y')
                    ->searchable(),
                Tables\Columns\TextColumn::make('end_date')
                    ->date('d/m/Y')
                    ->searchable(),

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
            ]);
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
            'index' => Pages\ListExperienceRoles::route('/'),
            'create' => Pages\CreateExperienceRole::route('/create'),
            'edit' => Pages\EditExperienceRole::route('/{record}/edit'),
        ];
    }
}
