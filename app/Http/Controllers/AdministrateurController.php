<?php

namespace App\Http\Controllers;

use App\Http\Repository\AdministrateurRepository;
use Illuminate\Http\Request;

class AdministrateurController extends Controller
{
    protected $administrateurRepository;

    function __construct(AdministrateurRepository $administrateurRepository)
    {
        $this->administrateurRepository = $administrateurRepository;
    }

    public function add(Request $request)
    {
        $administrateur = $this->administrateurRepository->add($request);
        return response()->json($administrateur);
    }

    public function getAll()
    {
        return response()->json($this->administrateurRepository->getAll());
    }

    public function delete($administrateurId){
        if (!$administrateur = $this->administrateurRepository->getById($administrateurId)) {
            return response()->json(['error' => 'administrateur not found'], 404);
        }
        $this->administrateurRepository->delete($administrateur);
    }

}
