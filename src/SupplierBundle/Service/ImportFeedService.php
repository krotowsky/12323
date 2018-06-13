<?php

namespace SupplierBundle\Service;


use Doctrine\ORM\EntityManager;
use SupplierBundle\Entity\Supplier;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ImportFeedService extends Controller
{

    public function StartImport($supplier_code)
    {

        $supplier = $this->getSupplier($supplier_code);
        $json = $this->processJson($supplier->getProductSourceUrl());
        if($json == true){
            return 'Feed Saved in database';
        }

        return $supplier->getName();
    }

    public function getSupplier($supplier_code){

        print 'Looking for supplier '.$supplier_code. PHP_EOL;
        $repository = $this->getDoctrine()->getRepository(Supplier::class);
        $supplier = $repository->findOneBy(['name' => $supplier_code]);

        if (!$supplier) {
            throw $this->createNotFoundException(
                'Supplier not found!'
            );
        }else{
            print 'Supplier '. $supplier->getName(). ' has been found.' . PHP_EOL;
        }

            $repository = $this->getDoctrine()->getRepository("SupplierBundle\\Entity\\" . $supplier->getName());
            $supplier_det = $repository->findOneBy(['supplierId' => $supplier->getId()]);

            return $supplier_det;
    }

    public function processJson($input){

        print 'Downloading...' . PHP_EOL;
        $json = json_decode(file_get_contents($input), true);
        ini_set('max_execution_time', -1);


        return true;
    }

}