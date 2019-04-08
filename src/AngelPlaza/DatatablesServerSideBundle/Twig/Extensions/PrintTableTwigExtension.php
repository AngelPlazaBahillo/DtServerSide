<?php
/**
 * Created by PhpStorm.
 * User: Angel
 * Date: 26/03/2019
 * Time: 19:36
 */

namespace AngelPlaza\DatatablesServerSideBundle\Twig\Extensions;


use AngelPlaza\DatatablesServerSide\Tables\DatatablesTable;
use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

class PrintTableTwigExtension extends AbstractExtension {

    public function getFunctions() {
        return [
            new TwigFunction('dtServerSide_print', [$this, 'printTable'], [
                'needs_environment' => true,
                'is_safe' => ['html']
            ]),
        ];
    }

    public function printTable(\Twig_Environment $environment, DatatablesTable $table) {
        
        return $environment->render('AngelPlazaDatatablesServerSideBundle:Extensions:table.html.twig', [
            'tableId'   => $table->getIdTable()
        ]);
    }
}