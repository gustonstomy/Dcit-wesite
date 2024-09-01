<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use App\Models\AboutPage;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Mohamedsabil83\FilamentFormsTinyeditor\Components\TinyEditor;
use Filament\Forms\Components\Section;
use Illuminate\Database\Eloquent\Builder;
use Filament\Forms\Components\MarkdownEditor;
use App\Filament\Resources\AboutPageResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\AboutPageResource\RelationManagers;

class AboutPageResource extends Resource
{
    protected static ?string $model = AboutPage::class;

    protected static ?string $navigationIcon = 'heroicon-o-adjustments-horizontal';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Manage Your About Page')
                    ->schema([
                        TinyEditor::make('content')
                        ->label('content')
                        ->columnSpanFull()
                        ->fileAttachmentsDirectory('about_pages')
                        ->required(),
                ])
                ->columns(2)
                ->columnSpan('full'),
            Forms\Components\Select::make('type')
                ->label('Section type')
                ->options([
                    'history' => 'History',
                    'mission' => 'Mission',
                    'vision' => 'Vision',
                ])
                ->required(),
            Forms\Components\Select::make('status')
                ->label('status')
                ->options([
                    'public' => 'Public',
                    'private' => 'Private',
                ])
                ->required()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
               Tables\Columns\TextColumn::make('type')
               ->label('Type')
               ->sortable(),
            Tables\Columns\TextColumn::make('content')
                ->label('content')
                ->limit(50),
            Tables\Columns\TextColumn::make('status')
                ->label('status')
                ->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ActionGroup::make([
                    Tables\Actions\EditAction::make(),
                    Tables\Actions\DeleteAction::make(),
                    Tables\Actions\ViewAction::make(),
                ])
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
            'index' => Pages\ListAboutPages::route('/'),
            'create' => Pages\CreateAboutPage::route('/create'),
            'edit' => Pages\EditAboutPage::route('/{record}/edit'),
        ];
    }
}
