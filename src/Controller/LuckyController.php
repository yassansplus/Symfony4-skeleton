<?php
/**
 * Created by PhpStorm.
 * User: Yassi
 * Date: 27/01/2019
 * Time: 23:20
 */

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
class LuckyController extends AbstractController
{
    /**
     *
     * @Route("/lucky", name="homepage")
     */
    public function number(Request $request)
    {
        $number = random_int(0, 100);

        return $this->render('base.html.twig', ['number' => $number]);
    }

}