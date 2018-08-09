<?php
/**
 * Created by IntelliJ IDEA.
 * Administrateur: WIN8
 * Date: 06/06/2018
 * Time: 13:16
 */

namespace App\Http\Repository;



use App\Administrateur;
use Illuminate\Http\Request;

class AdministrateurRepository
{

    public function add(Request $request)
    {
        $administrateur = new Administrateur();
        $administrateur->nom = $request->input('nom');
        $administrateur->prenom = $request->input('prenom');
        $administrateur->email = $request->input('email');
        $administrateur->qr_code = $request->input('qr_code');
        $administrateur->password = bcrypt($request->input('password'));
        $administrateur->passwordDecrypt = $request->input('password');
        $administrateur->save();
        return $administrateur;
    }

    public function getAll()
    {
        return Utilisateur::all();
    }

    public function getById($administrateurId)
    {
        return Utilisateur::find($administrateurId);
    }

    public function delete($administrateur){
        $administrateur->delete();
    }

    public function verifyEmail($code,$administrateur)
    {
        return ($administrateur->code == $code);
    }
}
