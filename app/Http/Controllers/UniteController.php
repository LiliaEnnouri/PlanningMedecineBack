<?php

namespace App\Http\Controllers;

use App\Http\Repository\PlageUniteRepository;
use App\Http\Repository\SeanceRepository;
use App\Http\Repository\ThemeRepository;
use App\Http\Repository\UniteRepository;
use App\Seance;
use App\Shared\Utils;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Log;

class UniteController extends BaseController
{
    protected $uniteRepository;
    protected $themeRepository;
    protected $plageUniteRepository;
    protected $seanceRepository;

    function __construct(UniteRepository $uniteRepository,
                         ThemeRepository $themeRepository,
                         PlageUniteRepository $plageUniteRepository,
                         SeanceRepository $seanceRepository)
    {
        $this->uniteRepository = $uniteRepository;
        $this->themeRepository = $themeRepository;
        $this->plageUniteRepository = $plageUniteRepository;
        $this->seanceRepository = $seanceRepository;

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

    public function getUnitesByNiveau($niveauId)
    {
        if (!$unite = $this->uniteRepository->getUnitesByNiveau($niveauId)) {
            return response()->json(['error' => 'unite not found'], 404);
        }
        return response()->json($unite);
    }

    public function affecterEnseignant()
    {
        if ($unites = $this->uniteRepository->getAll()) {
            foreach ($unites as $unite) {
                $themes = $this->themeRepository->getThemesByUnite($unite['unite_id']);
                $plages = $this->plageUniteRepository->getPlagesByUnite($unite['unite_id']);
                Log::info($plages);

                $semaine = 1;
                $i = 0;

                if ((sizeof($themes)>0) && (sizeof($plages)>0)) {

                    foreach ($themes as $theme) {
                        $debut = 10000;

                        $nb = $theme['nb_heures'];


                        while ($nb > 0) {
                            $seanceExistante = $this->seanceRepository->getByPlageSemaine(($plages[$i]->plage_unite_id), $semaine);
                            $diff = Utils::getTimeDiff($plages[$i]->heure_debut,$plages[$i]->heure_fin);
                            if (($theme['type_id'] == $plages[$i]->type_id) && (!$seanceExistante)) {
                                $nb = $nb - $diff;

                                $seance = new Seance();
                                $seance->theme_id = $theme['theme_id'];
                                $seance->plage_unite_id = $plages[$i]->plage_unite_id;
                                $seance->semaine = $semaine;
                                $this->seanceRepository->addSeance($seance);

                                if ($debut > $semaine) {
                                    $debut = $semaine;
                                }
                            }
                            $i = $i + 1;
                            if (($i % sizeof($plages)) != $i) {
                                $i = 0;
                                $semaine = $semaine + 1;
                            }
                        }
                        $this->themeRepository->definirSemaines($theme, $debut, $semaine);
                    }
                }
            }
        }
    }


}
