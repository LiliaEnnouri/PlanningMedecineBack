<?php
/**
 * Created by IntelliJ IDEA.
 * User: WIN8
 * Date: 06/06/2018
 * Time: 13:16
 */

namespace App\Http\Repository;


use App\Niveau;

class NiveauRepository
{

    public function getAll()
    {
        return Niveau::all();
    }

    public function getById($niveauId)
    {
        return Niveau::find($niveauId);
    }

}
