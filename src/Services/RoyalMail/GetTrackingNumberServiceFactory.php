<?php

declare(strict_types=1);

namespace FuelRats\Prestashop\RoyalMailClickAndDrop\Services\RoyalMail;

class GetTrackingNumberServiceFactory
{
    public static function create(): GetTrackingNumberService
    {
        return new GetTrackingNumberService(HttpClientFactory::create());
    }
}
