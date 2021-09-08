<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuestionController extends AbstractController
{
    /**
     * @Route("/")
     */

    public function homepage(): Response
    {
        return new Response('What a bewitching controller we have conjured!');
    }

    /**
     * @Route ("/questions/{slug}")
     */
    public function show($slug): Response
    {

        $answers = [
            'Make sure your car is sitting perfectly still :)',
            'Honestly, I like furry shows better than my cat',
            'Maybe... try saying the spell backwards',
        ];

        dump($slug, $this);



        return $this->render('question/show.html.twig',
        [
            'question' => ucwords(str_replace('-',' ', $slug )),
            'answers' => $answers
        ]);

    }
}