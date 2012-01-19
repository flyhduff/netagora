<?php

namespace ECE\Bundle\NetagoraBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RedirectResponse;

use ECE\Bundle\NetagoraBundle\Entity\User;

class ConnectedController extends Controller
{
    /**
     * @Route("/Home/{name}")
     * @Template()
     */
    public function homeAction($name)
    {
        $session = $this->getRequest()->getSession();
        $user_id = $session->get('user_id');
        
        if (isset($user_id) && $user_id != NULL){
            $current_user = $session->get('user_id');
            return array('name' => $name, 'current_user' => $current_user);
        }else{
            return array('name' => 'anonymous', 'current_user' => '0');
        }
        
        
    }
    
    /**
     * @Route("/Profile")
     * @Template()
     */
    public function profileAction()
    {
        $name = 'profile';
        $user = new User();
        $network = "t";
        $social_buttons = $user->getSocialButtons($network,'158903826945024000');
        $mail_address = 'bla@gmail.com';
        $name = 'first last';
        $location = 'paris';
        $avatar_url = 'https://si0.twimg.com/profile_images/1547581423/moy_reasonably_small.png';
               
        return array('name' => $name, 'mail_address' => $mail_address, 'name' => $name, 'location' => $location, 'avatar_url' => $avatar_url);
    }
    
    /**
     * @Route("/Videos")
     * @Template()
     */
    public function videoAction()
    {
        $name = 'video';
        $user = new User();
        $network = "t";
        $social_buttons = $user->getSocialButtons($network,'158903826945024000');
        $networking = 'twitter';
        $feed_author = 'me';
        $feed_author_url = 'http://facebook.com';
        $display = 'display';
        $link_url ='http://www.youtube.com/embed/Vv5LEuJJ-f0?rel=0';
        $link = 'mylink';
        $feed_text = 'content';
         $avatar_url = 'https://si0.twimg.com/profile_images/1547581423/moy_reasonably_small.png';
               
        return array('name' => $name, 'feed_author' => $feed_author, 'feed_author_url' => $feed_author_url, 'display' => $display, 'link_url' => $link_url, 'link' => $link, 'feed_text' => $feed_text, 'networking' => $networking, 'social_buttons' => $social_buttons, 'avatar_url' => $avatar_url);
    }
    
    /**
     * @Route("/Music")
     * @Template()
     */
    public function musicAction()
    {
        $name = 'music';
		$user = new User();
		$network = "t";
		$social_buttons = $user->getSocialButtons($network,'158903826945024000');
		$networking = 'twitter';
		$feed_author = 'me';
		$feed_author_url = 'http://facebook.com';
		$display = 'display';
		$link_url ='http://bla.ca';
		$link = 'mylink';
		$feed_text = 'content';
		 $avatar_url = 'https://si0.twimg.com/profile_images/1547581423/moy_reasonably_small.png';
               
        return array('name' => $name, 'feed_author' => $feed_author, 'feed_author_url' => $feed_author_url, 'display' => $display, 'link_url' => $link_url, 'link' => $link, 'feed_text' => $feed_text, 'networking' => $networking, 'social_buttons' => $social_buttons, 'avatar_url' => $avatar_url);
    }
    
    /**
     * @Route("/Photos")
     * @Template()
     */
    public function photoAction()
    {
        $name = 'photo';
        $user = new User();
        $network = "t";
        $social_buttons = $user->getSocialButtons($network,'158903826945024000');
        $networking = 'twitter';
        $feed_author = 'me';
        $feed_author_url = 'http://facebook.com';
        $display = 'display';
        //$link_url ='http://30.media.tumblr.com/tumblr_lxefkzG8B91qe4vldo1_500.jpg';
        $link_url = 'http://s3.amazonaws.com/data.tumblr.com/tumblr_lxuwzc5pO01qexajco1_1280.jpg?AWSAccessKeyId=AKIAJ6IHWSU3BX3X7X3Q&Expires=1326905886&Signature=VWVZph8IsBx%2FeMqVUdF9kyJOPCM%3D';
        $link = 'mylink';
        $feed_text = 'content';
         $avatar_url = 'https://si0.twimg.com/profile_images/1547581423/moy_reasonably_small.png';
               
        return array('name' => $name, 'feed_author' => $feed_author, 'feed_author_url' => $feed_author_url, 'display' => $display, 'link_url' => $link_url, 'link' => $link, 'feed_text' => $feed_text, 'networking' => $networking, 'social_buttons' => $social_buttons, 'avatar_url' => $avatar_url);        
    }
    
    /**
     * @Route("/Locations")
     * @Template()
     */
    public function locationSitesAction()
    {
       $name = 'location';
       $user = new User();
       $network = "t";
       $social_buttons = $user->getSocialButtons($network,'158903826945024000');
       $networking = 'twitter';
       $feed_author = 'me';
       $feed_author_url = 'http://facebook.com';
       $display = 'display';
       $link_url ='http://bla.ca';
       $link = 'mylink';
       $feed_text = 'content';
       $category = 'video';
        $avatar_url = 'https://si0.twimg.com/profile_images/1547581423/moy_reasonably_small.png';
              
       return array('name' => $name, 'feed_author' => $feed_author, 'feed_author_url' => $feed_author_url, 'display' => $display, 'link_url' => $link_url, 'link' => $link, 'feed_text' => $feed_text, 'networking' => $networking, 'social_buttons' => $social_buttons, 'avatar_url' => $avatar_url);
    }
    
    /**
     * @Route("/Other")
     * @Template()
     */
    public function otherAction()
    {
        $name = 'other';
        $user = new User();
        $network = "t";
        $social_buttons = $user->getSocialButtons($network,'158903826945024000');
        $networking = 'twitter';
        $feed_author = 'me';
        $feed_author_url = 'http://facebook.com';
        $display = 'display';
        $link_url ='http://bla.ca';
        $link = 'mylink';
        $feed_text = 'content';
         $avatar_url = 'https://si0.twimg.com/profile_images/1547581423/moy_reasonably_small.png';
               
        return array('name' => $name, 'feed_author' => $feed_author, 'feed_author_url' => $feed_author_url, 'display' => $display, 'link_url' => $link_url, 'link' => $link, 'feed_text' => $feed_text, 'networking' => $networking, 'social_buttons' => $social_buttons, 'avatar_url' => $avatar_url);
    }
    
    /**
     * @Route("/Feeds")
     * @Template()
     */
    public function feedsAction()
    {
       $name = 'location';
       $user = new User();
       $network = "t";
       $social_buttons = $user->getSocialButtons($network,'158903826945024000');
       $networking = 'twitter';
       $feed_author = 'me';
       $feed_author_url = 'http://facebook.com';
       $display = 'display';
       $link_url ='http://bla.ca';
       $link = 'mylink';
       $feed_text = 'content';
       $category = 'video';
        $avatar_url = 'https://si0.twimg.com/profile_images/1547581423/moy_reasonably_small.png';
              
       return array('name' => $name, 'feed_author' => $feed_author, 'feed_author_url' => $feed_author_url, 'display' => $display, 'link_url' => $link_url, 'link' => $link, 'feed_text' => $feed_text, 'networking' => $networking, 'social_buttons' => $social_buttons, 'avatar_url' => $avatar_url);
       
       }
    
    /**
     * @Route("/Favourites")
     * @Template()
     */
    public function favouritesAction()
    {
        $name = 'favourites';
        $user = new User();
        $network = "t";
        $social_buttons = $user->getSocialButtons($network,'158903826945024000');
        $networking = 'twitter';
        $feed_author = 'me';
        $feed_author_url = 'http://facebook.com';
        $display = 'display';
        $link_url ='http://bla.ca';
        $link = 'mylink';
        $feed_text = 'content';
        $category = 'video';
         $avatar_url = 'https://si0.twimg.com/profile_images/1547581423/moy_reasonably_small.png';
               
        return array('name' => $name, 'feed_author' => $feed_author, 'feed_author_url' => $feed_author_url, 'display' => $display, 'link_url' => $link_url, 'link' => $link, 'feed_text' => $feed_text, 'networking' => $networking, 'social_buttons' => $social_buttons, 'avatar_url' => $avatar_url);
    }
    
    /**
     * @Route("/Search")
     * @Template()
     */
    public function searchAction()
    {
        $name = 'search';
             $user = new User();
             $network = "t";
             $social_buttons = $user->getSocialButtons($network,'158903826945024000');
             $networking = 'twitter';
             $feed_author = 'me';
             $feed_author_url = 'http://facebook.com';
             $display = 'display';
             $link_url ='http://bla.ca';
             $link = 'mylink';
             $feed_text = 'content';
             $category = 'video';
              $avatar_url = 'https://si0.twimg.com/profile_images/1547581423/moy_reasonably_small.png';
                    
             return array('name' => $name, 'feed_author' => $feed_author, 'feed_author_url' => $feed_author_url, 'display' => $display, 'link_url' => $link_url, 'link' => $link, 'feed_text' => $feed_text, 'networking' => $networking, 'social_buttons' => $social_buttons, 'avatar_url' => $avatar_url);
        
    }
    
    /**
     * @Route("/foo/login_check", name="foo_login_check")
     * 
     */
    public function loginCheckAction()
    {

        /*$request = $this->get('request');
        $twitter = $this->get('fos_twitter.service');
        
        $authURL = $twitter->getLoginUrl($request);

        $accessTokenURL = $twitter->getAccessToken($request);
        echo 'Access Token: <pre>'.print_r($accessTokenURL).'</pre><br />';
        
        echo $twitter->getTwitter()->http_code.'<pre>'.print_r($request->server).'</pre>';
        if($twitter->getTwitter()->http_code==200){
            echo 'redirect';
            return new RedirectResponse($authURL);
        }
        else if($accessTokenURL != NULL && $twitter->getTwitter()->http_code==200){
            return new Response('On a l\'access token à envoyer en post à Twitter via l\'url: https://api.twitter.com/oauth/access_token ');
        }else{
            return new Response('non authentifié: '.$twitter->getTwitter()->http_code.'<bt /> <pre>'.var_dump($request->server).'</pre>');
        }*/
        
        
        //return new Response('authentifié'.$authURL.'  <pre>'.var_dump($request->server).'</pre>');
        //return $this->redirect($this->generateUrl('test', array('twitterID' => $accessTokenURL)), 301);
        
        /*$request = $this->get('request');
        $twitter = $this->get('fos_twitter.service');
        $authURL = $twitter->getLoginUrl($request);

        $response = new RedirectResponse($authURL);
        var_dump($_GET);
        echo $response->getStatusCode();
        if($response->getStatusCode()==302 && empty($_GET)){
            echo '<br />redirect';
            $response = new RedirectResponse($authURL);
            return $response;

            //return $this->redirect($this->generateUrl('home', array('username' => 'authenticated')), 301);
        }else if( !is_null($_GET) && !is_null($_GET['oauth_verifier']) && !is_null($_GET['oauth_token']) ){
            echo $response->getStatusCode().' authURL: '.$authURL;
            //$response = new RedirectResponse('http://127.0.0.1:8888/netagora/web/app_dev.php/secured/login_check?oauth_token='.$_GET['oauth_token'].'&oauth_verifier='.$_GET['oauth_verifier']);
            $buzz = $this->get('buzz');
            $res = $buzz->get('http://bit.ly/aVUeDG');
            print_r($res->getHeader('Location'));
            die;
            echo '<pre>';
            print_r($response);
            echo '</pre>';
            die;
            return $response;*/
            /*echo '<pre>';
            print_r($response);
            echo '</pre>';
            $accessTokenURL = $twitter->getAccessToken($request);
            echo '<br />Access Token: <pre>';
            print_r($accessTokenURL);
            echo '</pre><br />';
        }*/

       /* var_dump($response);
        echo $response->getStatusCode();
        die; */

        
    }
    
    
    /**
     * @Route("/Settings")
     * @Template()
     */
    public function settingsAction()
    {   
       
       $name = 'settings';
        $avatar_url = 'https://si0.twimg.com/profile_images/1547581423/moy_reasonably_small.png';
       return array('name' => $name);
       
    }
    
	/**
	 * @Route("/Badges")
	 * @Template()
	 */
	public function badgesAction()
	{   
				
	   // PROFIL USER : Badges forme: 1,2,3
	   // badges_num = explode(",",user->badge);
	   
	   // TABLE badge: id, url, name
	   // badges_infos : recup de DB badges	   
	   
	   // num = 0;
	   // pour les badges du user
	   // for(i=0;i<count(badges_num);i++){
	   //     on fait le tour du numéro de tous les badges
	   //     for(j=0;j<count(badges_info); j++)
	   //          si le numéro d'un des badges correspond au numéro de celui du user
	   //          if (badges_num[i] ==  badges_info[j]["id"]
	   //				on récupère les infos du badge
	   //				badges[num] = badges_info[j];
	   //				on augmente num
	   //				num ++
	   
	   // ensuite on met l'url dans un array a retourner
	   // $badges_list = "";
	   // for(i=0; i<num; i++)
	   //      $badges_list .= '"' . badges[url] . '"';
	   //      if(i<num-1) $badges_list .= ",";
	   // $badges = array($badges_list);
	
	   $badges = array("../bundles/ecenetagora/images/badges/pioneer.png","../bundles/ecenetagora/images/badges/pioneer.png");
	   return array('badges' => $badges);
	   
	}  
	
	/**
	 * @Route("/DisplayMessage")
	 * @Template()
	 */
	public function displayMessageAction()
	{   
	   
	   $message = 'message';
	   return array('message' => $message);
	   
	}    
    
    /** 
    * @Route("/connectTwitter", name="connect_twitter")
    *
    */
    public function connectTwitterAction()
    {   
        
        $request = $this->get('request');
        $twitter = $this->get('fos_twitter.service');

        $authURL = $twitter->getLoginUrl($request);
        $response = new RedirectResponse($authURL);

        return $response;

    }
}
