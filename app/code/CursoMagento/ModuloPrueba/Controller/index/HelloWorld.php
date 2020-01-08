<?php
/**
 * Created by PhpStorm.
 * User: nicolinux
 * Date: 02/08/19
 * Time: 21:15
 */
namespace CursoMagento\ModuloPrueba\Controller\index;


class HelloWorld extends \Magento\Framework\App\Action\Action
{
    protected $productfactory;

    public function __construct
    (
        \Magento\Framework\App\Action\Context $context,
        \Magento\Catalog\Model\ProductFactory $productFactory
    )
    {
        $this->productfactory = $productFactory;
        parent::__construct($context);
    }

    public function execute(){
        /*$product = $this->productfactory->create()->loadByAttribute('sku', '1910101DM2');
        $product->setName("Producto seteado");
        echo $product->getName();*/
        echo "Hola mundo!";
        exit;
    }
}