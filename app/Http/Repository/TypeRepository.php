<?php
/**
 * Created by IntelliJ IDEA.
 * User: WIN8
 * Date: 06/06/2018
 * Time: 13:16
 */

namespace App\Http\Repository;


use App\Type;

class TypeRepository
{

    public function getAll()
    {
        return Type::all();
    }

    public function getById($typeId)
    {
        return Type::find($typeId);
    }

}
