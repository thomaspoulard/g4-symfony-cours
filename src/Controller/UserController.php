<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class UserController extends AbstractController
{
  /**
   * @Route("/users", name="users")
   */
  public function getUsers(HttpClientInterface $httpClient): Response
  {
    $response = $httpClient->request(
      'GET',
      'https://jsonplaceholder.typicode.com/users'
    );

    return $this->render('user/index.html.twig', [
      'users' => $response->toArray()
    ]);
  }
}
