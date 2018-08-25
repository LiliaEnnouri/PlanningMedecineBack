<?php
/**
 * Created by IntelliJ IDEA.
 * User: WIN8
 * Date: 06/06/2018
 * Time: 13:16
 */

namespace App\Http\Repository;



use App\Plage_Unite;

class PlageUniteRepository
{

    public function getAll()
    {
        return Plage_Unite::all();
    }

    public function getById($plageUniteId)
    {
        return Plage_Unite::find($plageUniteId);
    }

    public function addPlages($request)
    {
        $plages = $request->all();
        foreach ($plages as $plage){
            $newPlage = new Plage_Unite();
            $newPlage->jour = $plage['jour'];
            $newPlage->heure_debut = $plage['heure_debut'];
            $newPlage->heure_fin = $plage['heure_fin'];
            $newPlage->type_id = $plage['type_id'];
            $newPlage->unite_id = $plage['unite_id'];

            $newPlage->save();
        }
        return $plages;
    }

    public function getPlagesByUnite($uniteId){

        return Plage_Unite::where('unite_id','=',$uniteId)->orderBy("jour")->get();

    }

}
