<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Customer;
use App\Repository\CustomerRepository;
use Doctrine\Persistence\ManagerRegistry;

class CustomerController extends AbstractController
{
    #[Route('/customer', name: 'customer')]
    public function index(ManagerRegistry $doctrine): Response
    {
        $customers = $doctrine->getRepository(Customer::class)->findAll();
        return $this->render('customer/index.html.twig', [
            'controller_name' => 'CustomerController',
            'customers' => $customers,
        ]);
    }    
    public function show(ManagerRegistry $doctrine, int $id): Response
    {
        $customer = $doctrine->getRepository(Customer::class)->find($id);
        if (!$customer) {
            throw $this->createNotFoundException(
                'No product found for id '.$id
            );
        }
        return $this->render('customer/edit.html.twig', [
            'controller_name' => 'CustomerController',
            'customer' => $customer,
        ]);
    }
}
