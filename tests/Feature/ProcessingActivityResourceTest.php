<?php

use JeffersonGoncalves\Filament\UsPrivacyNotices\Resources\ProcessingActivities\Pages\CreateProcessingActivity;
use JeffersonGoncalves\Filament\UsPrivacyNotices\Resources\ProcessingActivities\Pages\EditProcessingActivity;
use JeffersonGoncalves\Filament\UsPrivacyNotices\Resources\ProcessingActivities\Pages\ListProcessingActivities;
use JeffersonGoncalves\Filament\UsPrivacyNotices\Resources\ProcessingActivities\ProcessingActivityResource;
use JeffersonGoncalves\Filament\UsPrivacyNotices\Tests\Fixtures\TestUser;
use JeffersonGoncalves\Filament\UsPrivacyNotices\UsPrivacyNoticesPlugin;
use JeffersonGoncalves\UsPrivacyNotices\Models\ProcessingActivity;
use Livewire\Livewire;

beforeEach(function () {
    $this->actingAs(TestUser::create(['name' => 'DPO', 'email' => 'dpo@example.com']));
});

it('creates a processing activity linked to models, sources and recipients', function () {
    Livewire::test(CreateProcessingActivity::class)
        ->fillForm([
            'name' => 'Billing',
            'purpose' => 'Issue invoices',
            'consumers' => ['customers'],
            'models' => [TestUser::class],
            'sources' => ['directly from you'],
            'recipients' => [['name' => 'Stripe', 'role' => 'processor']],
            'retention' => '5 years',
        ])
        ->call('create')
        ->assertHasNoFormErrors();

    expect(ProcessingActivity::sole())
        ->consumers->toBe(['customers'])
        ->models->toBe([TestUser::class])
        ->sources->toBe(['directly from you'])
        ->recipients->toBe([['name' => 'Stripe', 'role' => 'processor']]);
});

it('requires a name and a purpose', function () {
    Livewire::test(CreateProcessingActivity::class)
        ->fillForm(['name' => '', 'purpose' => ''])
        ->call('create')
        ->assertHasFormErrors(['name' => 'required', 'purpose' => 'required']);
});

it('lists and edits activities', function () {
    $activity = ProcessingActivity::create(['name' => 'Billing', 'purpose' => 'Invoices', 'recipients' => [['name' => 'Stripe', 'role' => 'processor']]]);

    Livewire::test(ListProcessingActivities::class)
        ->assertCanSeeTableRecords([$activity])
        ->assertSee('Stripe');

    Livewire::test(EditProcessingActivity::class, ['record' => $activity->getKey()])
        ->fillForm(['retention' => '7 years'])
        ->call('save')
        ->assertHasNoFormErrors();

    expect($activity->fresh()->retention)->toBe('7 years');
});

it('exports the notice data as JSON', function () {
    ProcessingActivity::create(['name' => 'Billing', 'purpose' => 'Invoices', 'models' => [TestUser::class]]);

    Livewire::test(ListProcessingActivities::class)
        ->callAction('export')
        ->assertFileDownloaded('us-privacy-notices-'.now()->format('Y-m-d').'.json');
});

it('applies the fluent plugin options', function () {
    UsPrivacyNoticesPlugin::get()->navigationGroup('US')->slug('notices');

    expect(ProcessingActivityResource::getNavigationGroup())->toBe('US')
        ->and(ProcessingActivityResource::getSlug())->toBe('notices');
});
