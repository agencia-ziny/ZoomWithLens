<?php
/**
 * Zoom com Lente
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License (AFL 3.0)
 * that is bundled with this package in the file LICENSE_AFL.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/afl-3.0.php
 *
 * @category   Ziny
 * @package    ZoomLente
 * @copyright  Copyright (c) 2015 Agência Ziny (www.agenciaziny.com.br)
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 * @author     Agência Ziny <dev@agenciaziny.com.br>
 */
class Ziny_ZoomLente_Model_Config_Tipo {
    
    public function toOptionArray() {
        
        return array(
            array(
                'value' => 'circulo',
                'label' => Mage::helper('zoomlente')->__('Circle')),
            array(
                'value' => 'quadrado',
                'label' => Mage::helper('zoomlente')->__('Square'))
        );
    }
}
