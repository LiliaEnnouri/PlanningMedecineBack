<?php
/**
 * Created by IntelliJ IDEA.
 * Enseignant: WIN8
 * Date: 06/06/2018
 * Time: 13:16
 */

namespace App\Http\Repository;



use App\Enseignant;
use App\Unite;
use Illuminate\Http\Request;

class EnseignantRepository
{

    public function add(Request $request)
    {
        $enseignant = new Enseignant();
        $enseignant->nom = $request->input('nom');
        $enseignant->prenom = $request->input('prenom');
        $enseignant->CIN = $request->input('CIN');
        $enseignant->email = $request->input('email');
        $enseignant->qr_code = $request->input('qr_code');
        $enseignant->password = bcrypt($request->input('password'));
        $enseignant->passwordDecrypt = $request->input('password');
        $enseignant->save();
        return $enseignant;
    }

    public function getAll()
    {
        return Enseignant::all();
    }

    public function getById($enseignantId)
    {
        return Enseignant::find($enseignantId);
    }

    public function delete($enseignant){
        $enseignant->delete();
    }

    public function getUnites($enseignantId)
    {
        return Unite::where('enseignant_id','=',$enseignantId)->get();
    }

    public function retrieveEnseignantFromToken()
    {
        try {
            return auth()->user();
        } catch (\Tymon\JWTAuth\Exceptions\TokenExpiredException $e) {
            Log::info("expired");
            return null;
        } catch (\Tymon\JWTAuth\Exceptions\TokenInvalidException $e) {
            Log::info("invalid");
            return null;
        } catch (\Tymon\JWTAuth\Exceptions\JWTException $e) {
            Log::info("Hakék");
            return null;
        }
    }


}
