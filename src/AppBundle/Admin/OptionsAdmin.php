<?php
/**
 * Created by PhpStorm.
 * User: pawel
 * Date: 5/27/18
 * Time: 10:47 AM
 */

namespace AppBundle\Admin;


use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Symfony\Component\Form\Extension\Core\Type\TextType;


class OptionsAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper->add('namePol');
        $formMapper->add('brandPol');
        $formMapper->add('width');
        $formMapper->add('height');
        $formMapper->add('depth');
        $formMapper->add('weight');
        $formMapper->add('vat');
        $formMapper->add('ean');
        $formMapper->add('isDigital');
        $formMapper->add('isNew');
        $formMapper->add('isBestseller');
        $formMapper->add('isPreorderAllowed');
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('id');
        $datagridMapper->add('namePol');
        $datagridMapper->add('brandPol');
        $datagridMapper->add('width');
        $datagridMapper->add('height');
        $datagridMapper->add('depth');
        $datagridMapper->add('weight');
        $datagridMapper->add('vat');
        $datagridMapper->add('ean');
        $datagridMapper->add('isDigital');
        $datagridMapper->add('isNew');
        $datagridMapper->add('isBestseller');
        $datagridMapper->add('isPreorderAllowed');
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper->add('id');
        $listMapper->add('namePol');
        $listMapper->add('brandPol');
        $listMapper->add('width');
        $listMapper->add('height');
        $listMapper->add('depth');
        $listMapper->add('weight');
        $listMapper->add('vat');
        $listMapper->add('ean');
        $listMapper->add('isDigital');
        $listMapper->add('isNew');
        $listMapper->add('isBestseller');
        $listMapper->add('isPreorderAllowed');
    }

}