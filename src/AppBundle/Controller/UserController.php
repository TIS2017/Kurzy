<?php

namespace AppBundle\Controller;

use AppBundle\Entity\User;
use AppBundle\Entity\Workplace;
use AppBundle\Entity\Role;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

/**
 * User controller.
 *
 * @Route("user")
 */
class UserController extends Controller
{



    /**
     * Displays a form to edit an existing user entity.
     *
     * @Route("/{id}/edit", name="user_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, User $user)
    {
        $deleteForm = $this->createDeleteForm($user);
        $editForm = $this->createForm('AppBundle\Form\UserType', $user);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('user_edit', array('id' => $user->getId()));
        }

        return $this->render('user/edit.html.twig', array(
            'user' => $user,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }


  /**
     * Assign subadmin to a workplace.
     *
     * @Route("/add/subadmin", name="addsubadmin")
     * @Method({"GET", "POST"})
     */
    public function addSubadmin(Request $request, Request $request2){
        $workplace = new Workplace();
        $form = $this->createForm('AppBundle\Form\WorkplaceType', $workplace);
        $form->handleRequest($request);


        $user = new User();
        $form2 = $this->createForm('AppBundle\Form\UserType', $user);
        $form2->handleRequest($request2);


        if ($form2->isSubmitted() && $form2->isValid()) {
          //  $form->submit($request->request->get($form->getName()));
            $em = $this->getDoctrine()->getManager();

        if($form->isSubmitted() && $form->isValid()){
            $user = $form->get('subadmins')->getData();
            $workplace = $form2->get('subadminWorkplaces')->getData();

            if (count($user) <= 0) {
                throw $this->createNotFoundException(
                    'User field is empty'
                );
            }
            if ( count($workplace) <= 0) {
                throw $this->createNotFoundException(
                    'Workplace field is empty'
                );
            }


           // foreach ($user as $u){

                $dbuser = $this->getDoctrine()
                    ->getRepository(User::class)
                    ->find($user->getId());


                if (!$dbuser) {
                    throw $this->createNotFoundException(
                        'No product found for id '.$user->getId()
                    );
                }
                if(!$dbuser->getSubadminWorkplaces()->contains($workplace)){
                    $dbuser->getSubadminWorkplaces()->add($workplace);
                    if($dbuser->getRole()->getId() < 4){
                        $dbuser->setRole($this->getDoctrine()->getRepository(Role::class)->find(4));
                    }

                    $em->persist($dbuser);

                }

           // }




         //   foreach($workplace as $w) {
                $dbwp = $this->getDoctrine()
                    ->getRepository(Workplace::class)
                    ->find($workplace->getId());

                if ($dbwp == null) {
                    throw $this->createNotFoundException(
                        'No product found for id '.$workplace->getId()
                    );
                }
            if(!$dbwp->getSubadmins()->contains($user)){
                $dbwp->getSubadmins()->add($user);
                $em->persist($dbwp);
            }
      //  }

            $em->flush();

            return $this->redirectToRoute('addsubadmin');
        }}

        return $this->render('user/addsubadmin.html.twig', array(
            'form' => $form->createView(),
            'form2' => $form2->createView()
        ));
    }
}
