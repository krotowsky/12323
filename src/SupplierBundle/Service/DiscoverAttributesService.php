<?php

namespace SupplierBundle\Service;

use SupplierBundle\Entity\Attribute;
use SupplierBundle\Entity\JsonRaw;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DiscoverAttributesService extends Controller
{

    public function ProcessFeed($supplier)
    {
        $repository = $this->getDoctrine()->getRepository(JsonRaw::class);
        $json_list = $repository->findBy(['supplierId' => 1,'isProcessed' => 0]);

        foreach ($json_list as $item => $value){
            $json = $value;
            $this->DiscoverAttributes($json);
        }

        $msg = 'Done!';
        return $msg;

    }

    public function DiscoverAttributes($json){

        $entityManager = $this->getDoctrine()->getManager();

        foreach ($json->getJson() as $key => $value){
            $attribute = new Attribute();
            $repository = $this->getDoctrine()->getRepository(Attribute::class);
            $attr_name = $repository->findBy(['name' => $key]);
            if(!$attr_name) {
                $attribute->setName($key);
                $attribute->setSupplierName('Eastend');
                $attribute->setCreatedAt(new \DateTime('now'));
                $entityManager->persist($attribute);
                $entityManager->flush();
            }
        }
        foreach ($json->getJson()['variants'] as $key => $value){
            foreach ($json->getJson()['variants'][$key] as $item => $variant){
                $attribute = new Attribute();
                $repository = $this->getDoctrine()->getRepository(Attribute::class);
                $attr_name = $repository->findBy(['name' => $item]);
                if(!$attr_name) {
                    $attribute->setName($item);
                    $attribute->setSupplierName('Eastend');
                    $attribute->setCreatedAt(new \DateTime('now'));
                    $entityManager->persist($attribute);
                    $entityManager->flush();
                }
            }
        }

        foreach ($json->getJson()['properties'] as $key => $value){
            $attribute = new Attribute();
            $repository = $this->getDoctrine()->getRepository(Attribute::class);
            $attr_name = $repository->findBy(['name' => $key]);
            if(!$attr_name) {
                $attribute->setName($key);
                $attribute->setSupplierName('Eastend');
                $attribute->setCreatedAt(new \DateTime('now'));
                $entityManager->persist($attribute);
                $entityManager->flush();
            }
        }
        return true;
    }



}