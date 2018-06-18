<?php

namespace SupplierBundle\Service;


use Doctrine\ORM\EntityManager;
use SupplierBundle\Entity\JsonRaw;
use SupplierBundle\Entity\Supplier;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Validator\Constraints\DateTime;

class ImportFeedService extends Controller
{

    public function StartImport($supplier_code)
    {

        $supplier = $this->getSupplier($supplier_code);
        $json = $this->processJson($supplier->getProductSourceUrl(),$supplier->GetId());
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

    public function processJson($input,$supplierId){

        print 'Downloading...' . PHP_EOL;
        $json = json_decode(file_get_contents($input), true);
        ini_set('max_execution_time', -1);

        $entityManager = $this->getDoctrine()->getManager();
        $start = new \DateTime('now');
        print 'Processing...' . PHP_EOL;

        print 'Start: ' . $start->format('H:i:s') . PHP_EOL;
        foreach ($json as $key => $value) {
            $json_raw = new JsonRaw();
            $json_raw->setJson($value);
            $json_raw->setCreatedAt(new \DateTime('now'));
            $json_raw->setSupplierId($supplierId);
            $json_raw->setIsPrcessed(0);
            $entityManager->persist($json_raw);
            $entityManager->flush();
        }
        $stop = new \DateTime('now');
        print 'Stop: ' . $stop->format('H:i:s') . PHP_EOL;


        return true;
    }

}