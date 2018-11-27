<?php

namespace App\Providers;

use App\Events\OrderReviewd;
use App\Listeners\RegisteredListener;
use App\Listeners\SendOrderPaidMail;
use App\Listeners\UpdateProductRating;
use Illuminate\Auth\Events\Registered;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use App\Events\OrderPaid;
use App\Listeners\UpdateProductSoldCount;
use App\Listeners\UpdateCrowdfundingProductProgress;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        Registered::class => [
            RegisteredListener::class,
        ],
        OrderPaid::class => [
            UpdateProductSoldCount::class,
            SendOrderPaidMail::class,
            UpdateCrowdfundingProductProgress::class,
        ],
        OrderReviewd::class => [
            UpdateProductRating::class,
        ],

    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //
    }
}
