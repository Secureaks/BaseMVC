<?php

namespace App\Controllers;

use App\Models\Example;
use Symfony\Component\HttpFoundation\Response;

class HomeController extends AbstractController
{

    public function index(): Response
    {
        $name = $this->request->get('name', 'World');
        $response = new Response(
            $this->render('Home/index', [
                'name' => $name,
            ])
        );

        return $response->send();
    }

    public function getModel($id): Response
    {
        $model = new Example();
        $model->get(1);

        $response = new Response(
            $this->render('Home/index', [
                'model' => $model,
            ])
        );

        return $response->send();
    }

    public function error404(): Response
    {
        $response = new Response(
            $this->render('Error/index', [
                'message' => '404 - Page not found'
            ])
        );

        return $response->send();
    }


}