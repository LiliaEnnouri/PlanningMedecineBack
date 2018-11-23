<?php

namespace App\Http\Controllers;

use App\Http\Repository\PlageUniteRepository;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Log;

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

    public function editPlagesByUnite(Request $request, $uniteId)
    {
        if ($oldPlages = $this->plageUniteRepository->getPlagesByUnite($uniteId)){
            $this->plageUniteRepository->deletePlages($oldPlages);
        }
        $plages = $this->plageUniteRepository->addPlages($request);
        return response()->json($plages);
    }

    public function getPlagesByNiveau($niveauId)
    {
        $plages = $this->plageUniteRepository->getPlagesByNiveau($niveauId);
        Log::info($plages);
        return response()->json($plages);
    }

    public function getPlagesByUnite($uniteId)
    {
        $unites = $this->plageUniteRepository->getPlagesByUnite($uniteId);
        Log::info($unites);
        return response()->json($unites);
    }

}
