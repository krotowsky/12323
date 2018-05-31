<?php
/**
 * Created by PhpStorm.
 * User: pawel
 * Date: 5/27/18
 * Time: 10:47 AM
 */

namespace AppBundle\Admin;




use ProductBundle\Entity\Options;
use ProductBundle\Entity\Product;
use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class OptionsAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper->add('optionName');
        $formMapper->add('value');
        $formMapper->add('id',EntityType::class, [
            'class' => Product::class,
            'choice_label' => 'id',
        ]);
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('optionName');
        $datagridMapper->add('value');
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper->add('product');
        $listMapper->add('optionName');
        $listMapper->add('value');
    }

}