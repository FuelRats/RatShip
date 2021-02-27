<?php

namespace FuelRats\Prestashop\RoyalMailClickAndDrop\Services\Presta;

use FuelRats\Prestashop\RoyalMailClickAndDrop\Services\RoyalMail\GetTrackingNumberServiceFactory;
use PrestaShop\PrestaShop\Adapter\LegacyLogger;

class TrackingNumberServiceFactory
{
    public static function create(): TrackingNumberService
    {
        return new TrackingNumberService(
            GetTrackingNumberServiceFactory::create(),
            new RoyalMailRepository(),
            new LegacyLogger()
        );
    }
}
