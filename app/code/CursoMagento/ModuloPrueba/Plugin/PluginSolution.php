<?php
/**
 * Created by PhpStorm.
 * User: Nico
 * Date: 03/08/19
 * Time: 21:22
 */

namespace CursoMagento\ModuloPrueba\Plugin;


class PluginSolution
{

    public function afterGetName(\Magento\Catalog\Model\Product $subject, $result){
        return $result . " After Plugin";
    }
}