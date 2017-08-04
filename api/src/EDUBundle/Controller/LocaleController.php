<?php
namespace EDUBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
//DB Entity
use EDUBundle\Entity\Users;

class LocaleController extends Controller
{
    /**
     *@Route("/lang", name="lang")
     */
    public function switchLangAction( Request $request)
    {
        $req_lc = $request->get('_locale');
        
        if(!$req_lc)
            return;
        
        $default_services = $this->get('default_service');
        
        $em = $this->getDoctrine()->getManager();
        $users = $em->getRepository('EDUBundle:Users')->find($default_services->getCurrentUser()->getId());
        
        $users->setLocale($req_lc);
        $em->persist($users);
		$em->flush();
        
        $request->getSession()->set('_locale', $req_lc);
        
        $referer = $request->headers->get('referer');
        
        //$request->setLocale($req_lc);
        
        return $this->redirect($referer);
    }
}
