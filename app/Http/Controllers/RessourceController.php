<?php

namespace App\Http\Controllers;

use App\Http\Repository\RessourceRepository;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class RessourceController extends BaseController
{
    protected $ressourceRepository;

    function __construct(RessourceRepository $ressourceRepository)
    {
        $this->ressourceRepository = $ressourceRepository;
    }

    public function getAll()
    {
        return response()->json($this->ressourceRepository->getAll());
    }

    public function getById($ressourceId)
    {
        if (!$ressource = $this->ressourceRepository->getById($ressourceId)) {
            return response()->json(['error' => 'ressource not found'], 404);
        }
        return response()->json($ressource);
    }

    public function getRessourcesByTheme($themeId)
    {
        if (!$ressources = $this->ressourceRepository->getRessourcesByTheme($themeId)) {
            return response()->json(['error' => 'ressource not found'], 404);
        }
        return response()->json($ressources);
    }

    public function editReddource()
    {

    }

    public function editRessourcesByTheme(Request $request, $themeId)
    {
        if ($oldRessources = $this->ressourceRepository->getRessourcesByTheme($themeId)){
            $this->ressourceRepository->deleteRessources($oldRessources);
        }
        $ressources = $this->ressourceRepository->addRessources($request);
        return response()->json($ressources);
    }
}
