<?php
/**
 * Created by IntelliJ IDEA.
 * User: WIN8
 * Date: 06/06/2018
 * Time: 13:16
 */

namespace App\Http\Repository;


use App\Ressource;
use App\Theme;

class RessourceRepository
{

    public function getAll()
    {
        return Ressource::all();
    }

    public function getById($ressourceId)
    {
        return Ressource::find($ressourceId);
    }

    public function getRessourcesByTheme($themeId)
    {
        return Ressource::where('theme_id', '=', $themeId)->get();
    }

    public function deleteRessources($ressources)
    {
        foreach ( $ressources as $ressource){
            $ressource->delete();
        }
    }

    public function addRessources($request)
    {
        $ressources = $request->all();
        foreach ($ressources as $ressource){
            $newRessource = new Ressource();
            $newRessource->libelle = $ressource['libelle'];
            $newRessource->path = $ressource['path'];
            $newRessource->theme_id = $ressource['theme_id'];

            $newRessource->save();
        }
        return $ressource;
    }

}
