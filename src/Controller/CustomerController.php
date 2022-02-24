<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Customer;
use App\Repository\CustomerRepository;
use Doctrine\Persistence\ManagerRegistry;
use App\Service\FileUploader;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\UploadedFile;

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
        $user = $doctrine->getRepository(Customer::class)->findOneBy(array('email' => $requests->get('email')));
        if($user){
            return $this->render('customer/create.html.twig', [
                'controller_name' => 'CustommerController1']);
        }
        $entityManager = $doctrine->getManager();
        $customer = new Customer();
        $customer->setFirstName($requests->get('firstName'));
        $customer->setLastName($requests->get('lastName'));
        $customer->setEmail($requests->get('email'));
        $customer->setPhoneNumber($requests->get('phoneNumber'));
        $entityManager->persist($customer);
        $entityManager->flush();
        return $this->redirectToRoute('customer');
    }
    public function createByEmail(ManagerRegistry $doctrine, Request $requests): Response
    {
        $user = $doctrine->getRepository(Customer::class)->findOneBy(array('email' => $requests->get('email')));
        if($user){
            return new Response('falid');
        }
        $entityManager = $doctrine->getManager();
        $customer = new Customer();
        $customer->setFirstName($requests->get('firstName'));
        $customer->setLastName($requests->get('lastName'));
        $customer->setEmail($requests->get('email'));
        $customer->setPhoneNumber($requests->get('phoneNumber'));
        $entityManager->persist($customer);
        $entityManager->flush();
        return new Response('success');
    }
    public function update_customer(ManagerRegistry $doctrine, Request $requests, int $id): Response
    {
        $user = $doctrine->getRepository(Customer::class)->findOneBy(array('email' => $requests->get('email')));
        $customer = $doctrine->getRepository(Customer::class)->find($id);
        if($user){
            if($user->getId() !== $id)
                return $this->render('customer/edit.html.twig', [
                        'controller_name' => 'CustomerController1',
                        'customer' => $customer,
                    ]);
        }
        $entityManager = $doctrine->getManager();
        $customer->setFirstName($requests->get('firstName'));
        $customer->setLastName($requests->get('lastName'));
        $customer->setEmail($requests->get('email'));
        $customer->setPhoneNumber($requests->get('phoneNumber'));
        $entityManager->persist($customer);
        $entityManager->flush();
        return $this->redirectToRoute('customer');
    }
    public function updateByEmail(ManagerRegistry $doctrine, Request $requests): Response
    {
        $customer = $doctrine->getRepository(Customer::class)->findOneBy(array('email' => $requests->get('email')));
        $entityManager = $doctrine->getManager();
        $customer->setFirstName($requests->get('firstName'));
        $customer->setLastName($requests->get('lastName'));
        $customer->setEmail($requests->get('email'));
        $customer->setPhoneNumber($requests->get('phoneNumber'));
        $entityManager->persist($customer);
        $entityManager->flush();
        return new Response('success');
    }
    public function delete_customer(ManagerRegistry $doctrine, int $id): Response
    {
        $entityManager = $doctrine->getManager();
        $customer = $doctrine->getRepository(Customer::class)->find($id);
        $entityManager->remove($customer);
        $entityManager->flush();
        return $this->redirectToRoute('customer');
    }
    public function upload_file(ManagerRegistry $doctrine, Request $requests):Response
    {
        $brochureFile = $requests->get('excelFile');

        if ($brochureFile) {
            $originalFilename = pathinfo($brochureFile->getClientOriginalName(), PATHINFO_FILENAME);
            dd($originalFilename);
        }
        
    }

}
