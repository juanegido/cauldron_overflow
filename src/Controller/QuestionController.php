<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuestionController extends AbstractController
{
    /**
     * @Route("/", name="app_homepage")
     */

    public function homepage(): Response
    {
        return $this->render('question/homepage.html.twig');
    }

    /**
     * @Route ("/questions/{slug}", name="app_question_show")
     */
    public function show($slug): Response
    {

        $answers = [
            'Make sure your car is sitting perfectly still 😊 ',
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