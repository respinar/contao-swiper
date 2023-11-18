<?php

declare(strict_types=1);

/*
 * This file is part of Contao Swiper Bundle.
 *
 * (c) Hamid Peywasti 2023 <hamid@respinar.com>
 *
 * @license MIT
 */

namespace Respinar\ContaoSwiperBundle\Controller\ContentElement;

use Contao\ContentModel;
use Contao\CoreBundle\Controller\ContentElement\AbstractContentElementController;
use Contao\CoreBundle\DependencyInjection\Attribute\AsContentElement;
use Contao\Template;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

#[AsContentElement(category: 'slider')]
class SwiperSliderController extends AbstractContentElementController
{
    protected function getResponse(Template $template, ContentModel $model, Request $request): Response
    {



        $GLOBALS['TL_HEAD'][] = Template::generateScriptTag('bundles/respinarcontaoswiper/js/swiper-bundle.min.js', false, null);
        $GLOBALS['TL_HEAD'][] = Template::generateStyleTag('bundles/respinarcontaoswiper/css/swiper-bundle.min.css', false, null);

        return $template->getResponse();
    }
}
