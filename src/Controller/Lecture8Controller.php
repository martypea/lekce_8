<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Lecture8Controller extends Controller
{
  
  /**
   * @Route("/",name="homepage")
   */
  
  public function homepage()
  {
    return $this->render('lecture8/homepage.html.twig',['title'=>'Home']);
  }
  
  /**
   * @Route("/about",name="about")
   */
  
  public function about()
  {
    return $this->render('lecture8/about.html.twig',['title'=>'About']);
  }
  
   /**
   * @Route("/contact",name="contact")
   */
  
  public function contact()
  {
    return $this->render('lecture8/contact.html.twig', ['title'=>'Contact','users'=>[['name'=>'Martin','email'=>'aa@df.bf', 'phone'=>'+420 xxx xxx xxx'],
                                                                 ['name'=>'Petr','email'=>'dgsd@dhf.jg', 'phone'=>'+420 yyy yyy yyy'],
                                                                 ['name'=>'Nina','email'=>'gh@hfgdg.bf', 'phone'=>'+420 zzz zzz zzz']
                                                                ]
                                                       ]);
  }
  
}

