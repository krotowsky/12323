<?php
/**
 * Created by PhpStorm.
 * User: pawel
 * Date: 5/27/18
 * Time: 10:47 AM
 */

namespace AppBundle\Admin;




use Doctrine\DBAL\Types\DateTimeType;
use ProductBundle\Entity\Product;
use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use SupplierBundle\Entity\Supplier;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Validator\Constraints\DateTime;

class ContractAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper->add('code');
        $formMapper->add('margin');
        $formMapper->add('type');
        $formMapper->add('date_from','date');
        $formMapper->add('date_to','date');
        $formMapper->add('is_active',CheckboxType::class, array(
            'label'    => 'Is Active',
            'required' => false,
        ));
        $formMapper->add('supplier',EntityType::class, [
            'class' => Supplier::class,
            'choice_label' => 'id',
        ]);
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('code');
//        $datagridMapper->add('margin');
        $datagridMapper->add('type');
        $datagridMapper->add('dateFrom');
        $datagridMapper->add('dateTo');
        $datagridMapper->add('isActive');
        $datagridMapper->add('supplier');
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper->add('code');
        $listMapper->add('margin');
        $listMapper->add('type');
        $listMapper->add('date_from','date');
        $listMapper->add('date_to','date');
        $listMapper->add('is_active','boolean');
        $listMapper->add('supplier');
    }

}