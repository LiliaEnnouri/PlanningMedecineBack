<?php

namespace App\Http\Controllers;

use App\Http\Repository\EnseignantRepository;
use Illuminate\Http\Request;

class EnseignantController extends Controller
{
    protected $enseignantRepository;

    function __construct(EnseignantRepository $enseignantRepository)
    {
        $this->enseignantRepository = $enseignantRepository;
    }

    public function add(Request $request)
    {
        $enseignant = $this->enseignantRepository->add($request);
        return response()->json($enseignant);
    }

    public function getAll()
    {
        return response()->json($this->enseignantRepository->getAll());
    }

    public function delete($enseignantId){
        if (!$enseignant = $this->enseignantRepository->getById($enseignantId)) {
            return response()->json(['error' => 'enseignant not found'], 404);
        }
        $this->enseignantRepository->delete($enseignant);
    }


    public function getUnites($enseignantId){
        if (!$unites = $this->enseignantRepository->getUnites($enseignantId)) {
            return response()->json(['error' => 'unités not found'], 404);
        }
        return response()->json($unites);
    }

    public function getAuthenticatedEnseignant()
    {
        if (!$enseignant = $this->enseignantRepository->retrieveEnseignantFromToken()) {
            return response()->json(['error' => 'enseignant_not_found'], 401);
        }
        $admin = $this->enseignantRepository->getById($enseignant->enseignant_id);

        // the token is valid and we have found the user via the sub claim
        return response()->json(compact('enseignant'));
    }
}
