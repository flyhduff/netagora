<?php

namespace ECE\Bundle\NetagoraBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use ECE\Bundle\NetagoraBundle\Entity\User;
use ECE\Bundle\NetagoraBundle\Form\UserType;
use Sensio\Bundle\BuzzBundle\DependencyInjection\SensioBuzzExtension;

class DisconnectedController extends Controller
{
	/**
	 * @Route("/Home")
	 * @Template()
	 */
	 public function homeAction(){
	 
	 $name = 'home';
	 return array('name' => $name);
	 }
	 
	 /**
	  * @Route("/About")
	  * @Template()
	  */
	  public function aboutAction(){
	  
	  $name = 'about';
	  return array('name' => $name);
	  }
	  
	  /**
	   * @Route("/Documentation")
	   * @Template()
	   */
	   public function documentationAction(){
	   
	   $name = 'doc';
	   return array('name' => $name);
	   }
	 

    /**
     * @Route("/Subscribe")
     * @Template()
     */
    public function subscribeAction()
    {
        /* Crawl de la page
        $browser = new Buzz\Browser();
        $response = $browser->get('http://bit.ly/aVUeDG');
        //echo $browser->getJournal()->getLastRequest()."\n";
        print_r($response->getHeader('Location'));
        */
        
        $session = $this->getRequest()->getSession ();
        $entity  = new User();
        $request = $this->getRequest();
        $form    = $this->createForm(new UserType(), $entity);
        $form->bindRequest($request);
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $entity->setPassword(md5($entity->getPassword()));//Encode password in md5
            $entity->setLastLogin(new \DateTime());
            
            $entity->upload();
            
            $em->persist($entity);
            $em->flush();
            //set session
            $session -> set ( 'user_id' , $entity->getId() );

            return $this->redirect($this->generateUrl('home', array('username' => $entity->getUsername())), 301);//permanent redirection
            //return new Response ( 'response' );
            
        }

        return $this->render('ECENetagoraBundle:Disconnected:subscribe.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView()
        ));
    }
    
    /**
     * @Route("/Login")
     * @Template()
     */
    public function loginAction()
    {
        $name = 'login';
        return array('name' => $name);
    }
    
    /**
     * @Route("/PasswordRetrieval")
     * @Template()
     */
    public function passwordRetrievalAction()
    {
        $name = 'ForgotPassword';
        return array('name' => $name);
    }

/**
 * @Route("/Message")
 * @Template()
 */
public function messageAction()
{
    $message = 'Message';
    return array('message' => $message);
}


}
