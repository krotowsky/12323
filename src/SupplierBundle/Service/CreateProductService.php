<?php

namespace SupplierBundle\Service;


use ProductBundle\Entity\Product;
use SupplierBundle\Entity\JsonRaw;
use SupplierBundle\Entity\Supplier;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CreateProductService extends Controller
{

    public function Start($supplier)
    {
        $repository = $this->getDoctrine()->getRepository(Supplier::class);
        $supplierId = $repository->findOneBy(['name' => $supplier]);
        $json = $this->getJson($supplierId->getId());
        $product = $this->createProduct($json);

        return $product;
    }

    public function getJson($supplierId){

        $repository = $this->getDoctrine()->getRepository(JsonRaw::class);
        $json = $repository->findOneBy(['supplierId' => $supplierId,'isProcessed' => 0]);
        return $json;
    }

    public function createProduct($json){
        $product = new Product();
        $product->setCreatedAt(new \DateTime('now'));
        $product->setUpdatedAt(new \DateTime('now'));
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($product);
        $entityManager->flush();

        return $product->getId();
    }

}