<?php
/**
 * Created by IntelliJ IDEA.
 * User: WIN8
 * Date: 06/06/2018
 * Time: 13:16
 */

namespace App\Http\Repository;


use App\Seance;

class SeanceRepository
{

    public function getAll()
    {
        return Seance::all();
    }

    public function getById($seanceId)
    {
        return Seance::find($seanceId);
    }

    public function getByPlageSemaine($plageId, $semaine)
    {

        return Seance::where('plage_unite_id', '=', $plageId)->where('semaine', '=', $semaine)->first();

    }

    public function addSeance($seance)
    {
        $newSeance = new Seance();
        $newSeance->semaine = $seance['semaine'];
        $newSeance->theme_id = $seance['theme_id'];
        $newSeance->plage_unite_id = $seance['plage_unite_id'];

        $newSeance->save();
        return $newSeance;

    }


    public function getSeancesByTheme($themeId)
    {
        return Seance::where('theme_id','=',$themeId)->with(['theme.enseignant','theme.unite','plageUnite'])
            ->get();
    }


}