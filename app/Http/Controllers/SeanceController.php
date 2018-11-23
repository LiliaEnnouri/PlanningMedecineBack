<?php

namespace App\Http\Controllers;

use App\Http\Repository\SeanceRepository;
use App\Http\Repository\ThemeRepository;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Log;

class SeanceController extends BaseController
{
    protected $seanceRepository;
    protected $themeRepository;

    function __construct(SeanceRepository $seanceRepository,
                         ThemeRepository $themeRepository)
    {
        $this->seanceRepository = $seanceRepository;
        $this->themeRepository = $themeRepository;
    }

    public function getAll()
    {
        return response()->json($this->seanceRepository->getAll());
    }

    public function getById($seanceId)
    {
        if (!$seance = $this->seanceRepository->getById($seanceId)) {
            return response()->json(['error' => 'seance not found'], 404);
        }
        return response()->json($seance);
    }

    public function getSeancesByUnite($uniteId)
    {
        $array = array();
        $i = 0;
        if ($themes = $this->themeRepository->getThemesByUnite($uniteId)) {
            Log::info($themes);
            foreach ($themes as $theme) {
                if ($seances = $this->seanceRepository->getSeancesByTheme($theme["theme_id"])) {
                    foreach ($seances as $seance) {
                        $array = array_add($array, $i, $seance);
                        $i = $i + 1;
                    }
                }
            }
        }
        return response()->json($array);
    }

    public function getSeancesByEnseignant($enseignantId)
    {
        $array = array();
        $i = 0;
        if ($themes = $this->themeRepository->getThemesByEnseignant($enseignantId)) {
            Log::info($themes);
            foreach ($themes as $theme) {
                if ($seances = $this->seanceRepository->getSeancesByTheme($theme["theme_id"])) {
                    foreach ($seances as $seance) {
                        $array = array_add($array, $i, $seance);
                        $i = $i + 1;
                    }
                }
            }
        }
        return response()->json($array);
    }

    public function getSeancesByNiveau($niveauId)
    {
        $array = array();
        $i = 0;
        if ($themes = $this->themeRepository->getThemesByNiveau($niveauId)) {
            Log::info($themes);
            foreach ($themes as $theme) {
                if ($seances = $this->seanceRepository->getSeancesByTheme($theme["theme_id"])) {
                    foreach ($seances as $seance) {
                        $array = array_add($array, $i, $seance);
                        $i = $i + 1;
                    }
                }
            }
        }

        return response()->json($array);
    }

}
