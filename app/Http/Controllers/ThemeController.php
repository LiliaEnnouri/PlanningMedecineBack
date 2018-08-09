<?php

namespace App\Http\Controllers;

use App\Http\Repository\ThemeRepository;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class ThemeController extends BaseController
{
    protected $themeRepository;

    function __construct(ThemeRepository $themeRepository)
    {
        $this->themeRepository = $themeRepository;
    }

    public function getAll()
    {
        return response()->json($this->themeRepository->getAll());
    }

    public function getById($themeId)
    {
        if (!$theme = $this->themeRepository->getById($themeId)) {
            return response()->json(['error' => 'theme not found'], 404);
        }
        return response()->json($theme);
    }

    public function getThemesByunite($uniteId){
        if (!$theme = $this->themeRepository->getThemesByUnite($uniteId)) {
            return response()->json(['error' => 'theme not found'], 404);
        }
        return response()->json($theme);
    }

    public function definirOrdre(Request $request){
        $themes = $this->themeRepository->definirOrdre($request);
        return response()->json($themes);
    }
}
