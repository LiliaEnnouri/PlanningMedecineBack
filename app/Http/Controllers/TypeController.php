<?php

namespace App\Http\Controllers;

use App\Http\Repository\TypeRepository;
use Illuminate\Routing\Controller as BaseController;

class TypeController extends BaseController
{
    protected $typeRepository;

    function __construct(TypeRepository $typeRepository)
    {
        $this->typeRepository = $typeRepository;
    }

    public function getAll()
    {
        return response()->json($this->typeRepository->getAll());
    }

    public function getById($typeId)
    {
        if (!$type = $this->typeRepository->getById($typeId)) {
            return response()->json(['error' => 'type not found'], 404);
        }
        return response()->json($type);
    }
}
