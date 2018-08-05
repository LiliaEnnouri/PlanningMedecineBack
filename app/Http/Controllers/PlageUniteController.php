<?php

namespace App\Http\Controllers;

use App\Http\Repository\PlageUniteRepository;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class PlageUniteController extends BaseController
{
    protected $plageUniteRepository;

    function __construct(PlageUniteRepository $plageUniteRepository)
    {
        $this->plageUniteRepository = $plageUniteRepository;
    }

    public function getAll()
    {
        return response()->json($this->plageUniteRepository->getAll());
    }

    public function getById($plageUniteId)
    {
        if (!$plageUnite = $this->plageUniteRepository->getById($plageUniteId)) {
            return response()->json(['error' => 'plage unité not found'], 404);
        }
        return response()->json($plageUnite);
    }

    public function addPlages(Request $request)
    {
        $plages = $this->plageUniteRepository->addPlages($request);
        return response()->json($plages);
    }
}
