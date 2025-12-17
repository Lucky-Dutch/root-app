<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Contracts\HttpClient\HttpClientInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class UserController extends AbstractController
{
    private HttpClientInterface $client;

    public function __construct(HttpClientInterface $client)
    {
        $this->client = $client;
    }

    // Lista użytkowników z filtrowaniem i sortowaniem
    public function list(Request $request): Response
    {
        $query = [
            'first_name' => $request->query->get('first_name'),
            'last_name' => $request->query->get('last_name'),
            'gender' => $request->query->get('gender'),
            'birthdate_from' => $request->query->get('birthdate_from'),
            'birthdate_to' => $request->query->get('birthdate_to'),
            'sort' => $request->query->get('sort'),
            'direction' => $request->query->get('direction'),
        ];
        $query = array_filter($query);
      
        $response = $this->client->request('GET', 'http://localhost:4000/api/users', [
            'query' => $query,
        ]);
        $data = $response->toArray();
        $users = $data['users'] ?? [];

        return $this->render('users/list.html.twig', [
            'users' => $users,
            'filters' => $query,
        ]);
    }

    public function show($id): Response
    {
        $response = $this->client->request('GET', "http://localhost:4000/api/users/{$id}");
        $data = $response->toArray();
        $user = $data['user'] ?? [];

        return $this->render('users/show.html.twig', [
            'user' => $user,
        ]);
    }

    // Dodawanie użytkownika
    public function add(Request $request): Response
    {
        if ($request->isMethod('POST')) {
            print_r("test123");
            $data = $request->request->all();
            $this->client->request('POST', 'http://localhost:4000/api/users', [
                'json' => $data,
            ]);
            return $this->redirectToRoute('user_list');
        }

        return $this->render('users/add.html.twig');
    }

    // Edycja użytkownika
    public function edit(Request $request, $id): Response
    {
        if ($request->isMethod('POST')) {
            $data = $request->request->all();
            $this->client->request('PUT', "http://localhost:4000/api/users/{$id}", [
                'json' => $data,
            ]);
            return $this->redirectToRoute('user_show', ['id' => $id]);
        }

        $response = $this->client->request('GET', "http://localhost:4000/api/users/{$id}");
        $data = $response->toArray();
        $user = $data['user'] ?? [];

        return $this->render('users/edit.html.twig', [
            'user' => $user,
        ]);
    }

    // Usuwanie użytkownika
    public function delete($id): Response
    {
        print_r("test123");
        $this->client->request('DELETE', "http://localhost:4000/api/users/{$id}");
        return $this->redirectToRoute('user_list');
    }
}
