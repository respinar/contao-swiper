<?php

declare(strict_types=1);

/*
 * This file is part of contao-swiper.
 *
 * (c) John Doe
 *
 * @license LGPL-3.0-or-later
 */

namespace Respinar\ContaoSwiperBundle\ContaoManager;

use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use Respinar\ContaoSwiperBundle\RespinarContaoSwiperBundle;

class Plugin implements BundlePluginInterface
{
    public function getBundles(ParserInterface $parser): array
    {
        return [
            BundleConfig::create(RespinarContaoSwiperBundle::class)
                ->setLoadAfter([ContaoCoreBundle::class]),
        ];
    }
}