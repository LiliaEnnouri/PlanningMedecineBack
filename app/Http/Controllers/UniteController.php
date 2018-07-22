<?php

namespace App\Http\Controllers;

use App\Http\Repository\UniteRepository;
use Illuminate\Routing\Controller as BaseController;

class UniteController extends BaseController
{
    protected $uniteRepository;

    function __construct(UniteRepository $uniteRepository)
    {
        $this->uniteRepository = $uniteRepository;
    }

    public function getAll()
    {
        return response()->json($this->uniteRepository->getAll());
    }

    public function getById($uniteId)
    {
        if (!$unite = $this->uniteRepository->getById($uniteId)) {
            return response()->json(['error' => 'unite not found'], 404);
        }
        return response()->json($unite);
    }

    public function getUnitesByNiveau($niveauId){
        if (!$unite = $this->uniteRepository->getUnitesByNiveau($niveauId)) {
            return response()->json(['error' => 'unite not found'], 404);
        }
        return response()->json($unite);
    }
}
