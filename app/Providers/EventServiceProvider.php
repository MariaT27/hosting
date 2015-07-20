<?php namespace App\Providers;

use Illuminate\Contracts\Events\Dispatcher as DispatcherContract;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
	protected $listen = [
		\App\Events\DomainWhoisUpdated::class => [
			\App\Listeners\EmailWhoisChanges::class,
		],
	];

	public function boot(DispatcherContract $events)
	{
		parent::boot($events);
	}
}
