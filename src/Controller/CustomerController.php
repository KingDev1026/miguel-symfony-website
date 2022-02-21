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
                'No composer found for id '.$id
            );
        }
        return $this->render('customer/edit.html.twig', [
            'controller_name' => 'CustomerController',
            'customer' => $customer,
        ]);
    }
    public function showCreate(ManagerRegistry $doctrine):Response
    {
        return $this->render('customer/create.html.twig', [
            'controller_name' => 'CustommerController']);
    }
    public function createProduct(ManagerRegistry $doctrine, Request $requests): Response
    {
        $entityManager = $doctrine->getManager();
        $customer = new Customer();
        $customer->setFirstName($requests->firstName);
        $customer->setLastName($requests->lastName);
        $customer->setEmail($requests->email);
        $customer->setPhoneNumber($requests->phoneNumber);
        $entityManager->persist($customer);
        $entityManager->flush();
        return new Response('Saved new product with id '.$customer->getId());
    }


    public function update(ManagerRegistry $doctrine, Request $request, int $id): Response
    {
        $entityManager = $doctrine->getManager();
        $customer = $entityManager->getRepository(Customer::class)->find($id);

        if (!$customer) {
            throw $this->createNotFoundException(
                'No customer found for id '.$id
            );
        }

        $customer->setFirstName($entityManager->getFirstName());
        // $customer->setLastName("1231");
        // $customer->setLastName($entityManager->lastName);
        // $customer->setEmail($entityManager->email);
        // $customer->setPhoneNumber($entityManager->phoneNumber);
        $entityManager->flush();

        return $this->redirectToRoute('customer_show', [
            'id' => $customer->getId(), 
            'customer' => $entityManager
        ]);
    }
}
