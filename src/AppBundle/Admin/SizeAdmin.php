<?php
/**
 * Created by PhpStorm.
 * User: pawel
 * Date: 5/27/18
 * Time: 10:47 AM
 */

namespace AppBundle\Admin;


use ProductBundle\Entity\SizeType;
use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Form\Type\ModelType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\TextType;


class SizeAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper->add('value', TextType::class);
        $formMapper->add('unit', EntityType::class, [
            'class' => SizeType::class,
            'choice_label' => 'name',
        ]);
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('id');
        $datagridMapper->add('value');
        $datagridMapper->add('unit');
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper->addIdentifier('id');
        $listMapper->addIdentifier('value');
        $listMapper->addIdentifier('unit');
    }

}