<?php

namespace App\Http\Controllers;

use App\Http\Repository\NiveauRepository;
use Illuminate\Routing\Controller as BaseController;

class NiveauController extends BaseController
{
    protected $niveauRepository;

    function __construct(NiveauRepository $niveauRepository)
    {
        $this->niveauRepository = $niveauRepository;
    }

    public function getAll()
    {
        return response()->json($this->niveauRepository->getAll());
    }

    public function getById($niveauId)
    {
        if (!$niveau = $this->niveauRepository->getById($niveauId)) {
            return response()->json(['error' => 'niveau not found'], 404);
        }
        return response()->json($niveau);
    }
}
