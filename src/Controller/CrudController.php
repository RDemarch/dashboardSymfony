<?php

namespace App\Controller;

use App\Entity\Crud;
use App\Form\CrudType;
use App\Repository\CrudRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/crud")
 */
class CrudController extends AbstractController
{
    /**
     * @Route("/", name="crud_index", methods={"GET"})
     */
    public function index(CrudRepository $crudRepository): Response
    {
        return $this->render('crud/index.html.twig', [
            'cruds' => $crudRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="crud_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $crud = new Crud();
        $form = $this->createForm(CrudType::class, $crud);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($crud);
            $entityManager->flush();

            return $this->redirectToRoute('crud_index');
        }

        return $this->render('crud/new.html.twig', [
            'crud' => $crud,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="crud_show", methods={"GET"})
     */
    public function show(Crud $crud): Response
    {
        return $this->render('crud/show.html.twig', [
            'crud' => $crud,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="crud_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Crud $crud): Response
    {
        $form = $this->createForm(CrudType::class, $crud);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('crud_index');
        }

        return $this->render('crud/edit.html.twig', [
            'crud' => $crud,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="crud_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Crud $crud): Response
    {
        if ($this->isCsrfTokenValid('delete'.$crud->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($crud);
            $entityManager->flush();
        }

        return $this->redirectToRoute('crud_index');
    }
}
