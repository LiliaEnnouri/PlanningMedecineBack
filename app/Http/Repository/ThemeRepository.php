<?php
/**
 * Created by IntelliJ IDEA.
 * User: WIN8
 * Date: 06/06/2018
 * Time: 13:16
 */

namespace App\Http\Repository;


use App\Theme;

class ThemeRepository
{

    public function getAll()
    {
        return Theme::all();
    }

    public function getById($themeId)
    {
        return Theme::find($themeId);
    }

    public function getThemesByUnite($uniteId)
    {
        return Theme::where('unite_id', '=', $uniteId)
            ->with(['enseignant', 'unite'])
            ->orderBy("ordre")->get();
    }

    public function getThemesByEnseignant($enseignantId)
    {
        return Theme::where('enseignant_id', '=', $enseignantId)->get();
    }

    public function getThemesByNiveau($niveauId)
    {

        return Theme::whereHas('unite', function ($query) use ($niveauId) {
            $query->where('niveau_id', '=', $niveauId); })->get();
    }


    public function definirOrdre($request)
    {
        $themes = $request->all();
        foreach ($themes as $key => $val) {
            $theme = $this->getById($val);
            $theme->ordre = ($key + 1);
            $theme->update();
        }
        return $themes;
    }

    public function definirSemaines($theme, $debut, $fin)
    {
        $theme['semaine_debut'] = $debut;
        $theme['semaine_fin'] = $fin;
        $theme->update();
        return $theme;
    }

}
