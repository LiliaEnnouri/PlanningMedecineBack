<?php
/**
 * Created by IntelliJ IDEA.
 * User: WIN8
 * Date: 06/06/2018
 * Time: 13:16
 */

namespace App\Http\Repository;



use App\Unite;
use Illuminate\Support\Facades\DB;

class UniteRepository
{

    public function getAll()
    {
        return Unite::all();
    }

    public function getById($uniteId)
    {
        return Unite::find($uniteId);
    }

    public function getUnitesByNiveau($niveauId){

        return Unite::where('niveau_id','=',$niveauId)->get();

        /*
        $select = DB::table(Unite)
            ->join('Matiere','Unite.unite_id','=','Matiere.unite_id')
            ->join('Niveau', 'Matiere.niveau_id','=','Niveau.niveau_id' )
            ->where('Niveau.niveau_id','=', $niveauId)
            ->get();
        */
    }

}
