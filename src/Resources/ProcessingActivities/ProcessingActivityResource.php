<?php

namespace JeffersonGoncalves\Filament\UsPrivacyNotices\Resources\ProcessingActivities;

use BackedEnum;
use Filament\Actions\EditAction;
use Filament\Forms\Components\CheckboxList;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Panel;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use JeffersonGoncalves\Filament\UsPrivacyNotices\Resources\ProcessingActivities\Pages\CreateProcessingActivity;
use JeffersonGoncalves\Filament\UsPrivacyNotices\Resources\ProcessingActivities\Pages\EditProcessingActivity;
use JeffersonGoncalves\Filament\UsPrivacyNotices\Resources\ProcessingActivities\Pages\ListProcessingActivities;
use JeffersonGoncalves\Filament\UsPrivacyNotices\UsPrivacyNoticesPlugin;
use JeffersonGoncalves\UsPrivacy\UsPrivacy;
use JeffersonGoncalves\UsPrivacyNotices\Models\ProcessingActivity;

class ProcessingActivityResource extends Resource
{
    protected static ?string $model = ProcessingActivity::class;

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->columns(2)
            ->components([
                TextInput::make('name')
                    ->label(static::label('fields.name'))
                    ->required()
                    ->maxLength(255),
                Textarea::make('purpose')
                    ->label(static::label('fields.purpose'))
                    ->required()
                    ->columnSpanFull(),
                TagsInput::make('consumers')
                    ->label(static::label('fields.consumers'))
                    ->placeholder(static::label('placeholders.consumers')),
                TagsInput::make('data_categories')
                    ->label(static::label('fields.data_categories'))
                    ->helperText(static::label('help.data_categories')),
                TagsInput::make('sources')
                    ->label(static::label('fields.sources'))
                    ->placeholder(static::label('placeholders.sources'))
                    ->columnSpanFull(),
                CheckboxList::make('models')
                    ->label(static::label('fields.models'))
                    ->helperText(static::label('help.models'))
                    ->options(fn (): array => collect(app(UsPrivacy::class)->models())
                        ->mapWithKeys(fn (string $model): array => [$model => class_basename($model)])
                        ->all())
                    ->columns(3)
                    ->columnSpanFull(),
                Repeater::make('recipients')
                    ->label(static::label('fields.recipients'))
                    ->schema([
                        TextInput::make('name')
                            ->label(static::label('fields.recipient_name'))
                            ->required(),
                        Select::make('role')
                            ->label(static::label('fields.role'))
                            ->options(static::options('roles')),
                    ])
                    ->columns(2)
                    ->defaultItems(0)
                    ->columnSpanFull(),
                TextInput::make('retention')
                    ->label(static::label('fields.retention'))
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->label(static::label('fields.name'))
                    ->searchable()
                    ->sortable(),
                TextColumn::make('consumers')
                    ->label(static::label('fields.consumers'))
                    ->badge(),
                TextColumn::make('models')
                    ->label(static::label('fields.models'))
                    ->formatStateUsing(fn (string $state): string => class_basename($state))
                    ->badge()
                    ->color('gray'),
                TextColumn::make('recipients')
                    ->label(static::label('fields.recipients'))
                    ->state(fn (ProcessingActivity $record): array => array_column($record->recipients ?? [], 'name'))
                    ->badge()
                    ->color('warning')
                    ->placeholder('-'),
            ])
            ->defaultSort('name')
            ->recordActions([
                EditAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => ListProcessingActivities::route('/'),
            'create' => CreateProcessingActivity::route('/create'),
            'edit' => EditProcessingActivity::route('/{record}/edit'),
        ];
    }

    /**
     * @return array<string, string>
     */
    protected static function options(string $group): array
    {
        return (array) __("filament-us-privacy-notices::filament-us-privacy-notices.{$group}");
    }

    public static function label(string $key): string
    {
        return __("filament-us-privacy-notices::filament-us-privacy-notices.{$key}");
    }

    public static function getModelLabel(): string
    {
        return static::label('resource.label');
    }

    public static function getPluralModelLabel(): string
    {
        return static::label('resource.plural_label');
    }

    public static function getNavigationGroup(): ?string
    {
        return UsPrivacyNoticesPlugin::get()->getNavigationGroup();
    }

    public static function getNavigationSort(): ?int
    {
        return UsPrivacyNoticesPlugin::get()->getNavigationSort();
    }

    public static function getNavigationIcon(): string|BackedEnum|null
    {
        return UsPrivacyNoticesPlugin::get()->getNavigationIcon();
    }

    public static function getSlug(?Panel $panel = null): string
    {
        return UsPrivacyNoticesPlugin::get()->getSlug();
    }
}
