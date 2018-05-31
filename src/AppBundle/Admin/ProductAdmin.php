<?php
/**
 * Created by PhpStorm.
 * User: pawel
 * Date: 5/27/18
 * Time: 10:47 AM
 */

namespace AppBundle\Admin;


use ProductBundle\Entity\Color;
use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\TextType;


class ProductAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper->add('name');
        $formMapper->add('brand');
        $formMapper->add('ean');
        $formMapper->add('createdAt');
        $formMapper->add('premiereAt');
        $formMapper->add('updatedAt');
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('name');
        $datagridMapper->add('brand');
        $datagridMapper->add('ean');
        $datagridMapper->add('createdAt');
        $datagridMapper->add('premiereAt');
        $datagridMapper->add('updatedAt');
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper->add('name');
        $listMapper->add('brand');
        $listMapper->add('ean');
        $listMapper->add('createdAt');
        $listMapper->add('premiereAt');
        $listMapper->add('updatedAt');;
    }

}