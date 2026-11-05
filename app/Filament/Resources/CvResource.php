<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CvResource\Pages;
use App\Filament\Resources\CvResource\RelationManagers;
use App\Models\Cv;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Js;
use Illuminate\Support\Str;

class CvResource extends Resource
{
    protected static ?string $model = Cv::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('approval_code')
                    ->default(fn () => Str::random(60))
                    ->readOnly()
                    ->dehydrated()
                    ->maxLength(60)
                    ->helperText('Auto-generated when creating a CV.'),
                Forms\Components\DateTimePicker::make('expiry'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('approval_code'),
                Tables\Columns\TextColumn::make('expiry'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\Action::make('copy_cv_url')
                    ->label('Copy URL')
                    ->icon('heroicon-o-clipboard-document')
                    ->color('gray')
                    ->alpineClickHandler(
                        fn (Cv $record): string => 'window.navigator.clipboard.writeText(' .
                            Js::from(route('cv', ['cv' => $record->approval_code])) .
                            ')',
                    ),
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
            'index' => Pages\ListCvs::route('/'),
            'create' => Pages\CreateCv::route('/create'),
            'edit' => Pages\EditCv::route('/{record}/edit'),
        ];
    }
}
