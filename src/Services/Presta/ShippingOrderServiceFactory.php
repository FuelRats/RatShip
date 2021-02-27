<?php

namespace FuelRats\Prestashop\RoyalMailClickAndDrop\Services\Presta;

use FuelRats\Prestashop\RoyalMailClickAndDrop\Services\RoyalMail\CreateOrderServiceFactory;
use PrestaShop\PrestaShop\Adapter\LegacyLogger;

class ShippingOrderServiceFactory
{
    public static function create(): ShippingOrderService
    {
        return new ShippingOrderService(
            CreateOrderServiceFactory::create(),
            new RoyalMailRepository(),
            new LegacyLogger()
        );
    }
}
