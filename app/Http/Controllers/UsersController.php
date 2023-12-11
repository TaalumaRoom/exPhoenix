<?php

namespace App\Http\Controllers;

use App\Mail\ForgetPassword;
use App\Models\User;
use App\Models\Admin;
use App\Models\Client;
use App\Models\Personnel;
use App\Models\Produit;
use App\Models\Projet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;


class UsersController extends Controller
{
    public function index(){
        return view('/connexion');
    }

    public function login_user(Request $request){
        $validator = Validator::make($request->all(), [
            'Matricule' => 'required|email|max:100',
            'Password' => 'required|min:10|max:100',
        ]);

        if ($validator->fails()){
            return response()->json([
                'status' => 400,
                'messages' => $validator->getMessageBag()
            ]);
        }else{
            $user = User::where('Email', $request->Matricule)->first();
            if($user){
                if(Hash::check($request->Password, $user->Password)){
                    $request->session()->put('loggedInUser', $user->id);
                    if($user->RoleUser == "Administrateur" AND $user->Statut == "oui"){
                        return response()->json([
                            'status' => 200,
                            'messages' => 'success',
                            'role' => 'Administrateur'
                        ]);
                    }elseif($user->RoleUser == "Client" AND $user->Statut == "oui"){
                        return response()->json([
                            'status' => 200,
                            'messages' => 'success',
                            'role' => 'Client'
                        ]);
                    }elseif($user->RoleUser == "Admin" AND $user->Statut == "non"){
                        return response()->json([
                            'status' => 204,
                            'messages' => 'error',
                            'role' => 'Administrateur'
                        ]);
                    }elseif($user->RoleUser == "Client" AND $user->Statut == "non"){
                        return response()->json([
                            'status' => 204,
                            'messages' => 'error',
                            'role' => 'Client'
                        ]);
                    }
                    
                }else{
                    return response()->json([
                        'status' => 401,
                        'messages' => 'Matricule ou Mot de passe incorrect !'
                    ]);
                }
            }else{
                return response()->json([
                    'status' => 401,
                    'messages' => 'Matricule ou Mot de passe incorrect !'
                ]);
            }

        }
    }

    public function logout_user(){
        if(session()->has('loggedInUser')){
            session()->pull('loggedInUser');
            return view('index');
        }
    }

    public function profile(){
        $userInfo = DB::table('users')->where('id', session('loggedInUser'))->first();
        return view('admins/accueil', compact("userInfo"));
    }

    public function adminproduits(){
        $userInfo = DB::table('users')->where('id', session('loggedInUser'))->first();
        return view('admins/produits', compact("userInfo"));
    }

    public function adminoffres(){
        $userInfo = DB::table('users')->where('id', session('loggedInUser'))->first();
        return view('admins/offres', compact("userInfo"));
    }


    public function admincategorie(){
        $userInfo = DB::table('users')->where('id', session('loggedInUser'))->first();
        return view('admins/categorie', compact("userInfo"));
    }




    public function profileclient(){
        $userInfo = DB::table('users')->where('id', session('loggedInUser'))->first();
        return view('clients/accueil', compact("userInfo"));
    }


    public function adminactualites(){
        $data = ['userInfo' => DB::table('users')->where('id', session('loggedInUser'))->first()];
        return view('admins/actualites', $data);
    }

    public function admingalerie(){
        $data = ['userInfo' => DB::table('users')->where('id', session('loggedInUser'))->first()];
        return view('admins/galerie', $data);
    }

    public function adminnewsletter(){
        $data = ['userInfo' => DB::table('users')->where('id', session('loggedInUser'))->first()];
        return view('admins/newletter', $data);
    }

    public function adminabonnement(){
        $data = ['userInfo' => DB::table('users')->where('id', session('loggedInUser'))->first()];
        return view('admins/abonnes', $data);
    }

    public function admintemoignage(){
        $data = ['userInfo' => DB::table('users')->where('id', session('loggedInUser'))->first()];
        return view('admins/temoignage', $data);
    }

    public function adminprojet(){
        $data = ['userInfo' => DB::table('users')->where('id', session('loggedInUser'))->first()];
        return view('admins/projet', $data);
    }

    public function adminreception(){
        $data = ['userInfo' => DB::table('users')->where('id', session('loggedInUser'))->first()];
        return view('admins/reception', $data);
    }

    public function adminaffectation(){
        $data = ['userInfo' => DB::table('users')->where('id', session('loggedInUser'))->first()];
        return view('admins/affectation', $data);
    }

    public function adminarchive(){
        $data = ['userInfo' => DB::table('users')->where('id', session('loggedInUser'))->first()];
        return view('admins/archive', $data);
    }

    public function adminclient(){
        $data = ['userInfo' => DB::table('users')->where('id', session('loggedInUser'))->first()];
        return view('admins/client', $data);
    }

    public function adminpersonnel(){
        $data = ['userInfo' => DB::table('users')->where('id', session('loggedInUser'))->first()];
        return view('admins/personnel', $data);
    }

    public function adminoffre(){
        $userInfo = DB::table('users')->where('id', session('loggedInUser'))->first();
        $posts = Produit::orderBy('id', 'desc')->paginate(3);;
        return view('admins/offre', compact("userInfo", "posts"));
    }

    public function adminpartenaire(){
        $data = ['userInfo' => DB::table('users')->where('id', session('loggedInUser'))->first()];
        return view('admins/partenaire', $data);
    }

    public function admincontact(){
        $data = ['userInfo' => DB::table('users')->where('id', session('loggedInUser'))->first()];
        return view('admins/contact', $data);
    }

    public function clientproduit(){
        $userInfo = DB::table('users')->where('id', session('loggedInUser'))->first();
        $posts = Produit::orderBy('id', 'desc')->paginate(3);
        return view('clients/produit', compact("userInfo", "posts"));
    }

    public function clientcontact(){
        $data = ['userInfo' => DB::table('users')->where('id', session('loggedInUser'))->first()];
        return view('clients/contact', $data);
    }

    public function personnelenvoi(){
        $userInfo = DB::table('users')->where('id', session('loggedInUser'))->first();
        $profile = DB::table('personnels')->where('Matricule', $userInfo->MatriculeUser)->first();
        return view('personnels/envoi', compact("userInfo", "profile"));
    }

    public function personnelequipe(){
        $userInfo = DB::table('users')->where('id', session('loggedInUser'))->first();
        $profile = DB::table('personnels')->where('Matricule', $userInfo->MatriculeUser)->first();
        $personnel = Personnel::select('id', 'Matricule', 'Nom', 'Postnom', 'Prenom', 'Grade', 'Poste', 'Phone', 'Email', 'Photo')->where('Departement', $profile->Departement)->get();
        if ($profile->Departement == "Développement Logiciel") {
            $projet = Projet::select('id', 'NomProjet', 'Statut')->where('Departement', "Développement Logiciel")->orwhere('Departement', "Développement Logiciel Et Design et Multimédia")->orwhere('Departement', "Développement Logiciel Et Network IT")->orwhere('Departement', "Tous")->get();
        }elseif($profile->Departement == "Network IT") {
            $projet = Projet::select('id', 'NomProjet', 'Statut')->where('Departement', "Network IT")->orwhere('Departement', "Design et Multimédia Et Network IT")->orwhere('Departement', "Développement Logiciel Et Network IT")->orwhere('Departement', "Tous")->get();

        }elseif($profile->Departement == "Design et Multimédia") {
            $projet = Projet::select('id', 'NomProjet', 'Statut')->where('Departement', "Design et Multimédia")->orwhere('Departement', "Design et Multimédia Et Network IT")->orwhere('Departement', "Développement Logiciel Et Design et Multimédia")->orwhere('Departement', "Tous")->get();

        }
        
        return view('personnels/equipe', compact("userInfo", "profile", "personnel", "projet"));
    }

    public function personnelcontact(){
        $userInfo = DB::table('users')->where('id', session('loggedInUser'))->first();
        $profile = DB::table('personnels')->where('Matricule', $userInfo->MatriculeUser)->first();
        return view('personnels/contact', compact("userInfo", "profile"));
    }

    public function personnelaffectation(){
        $userInfo = DB::table('users')->where('id', session('loggedInUser'))->first();
        $profile = DB::table('personnels')->where('Matricule', $userInfo->MatriculeUser)->first();
        return view('personnels/affectation', compact("userInfo", "profile"));

    }


     public function forgotpassword(Request $request){
        $validator = Validator::make($request->all(), ['Email' => 'required|email|max:100']);

        if ($validator->fails()) {
            return response()->json([
                'status' => 400,
                'messages' => $validator->getMessageBag()

            ]);
        }else{
            $token = Str::uuid();
            $user = DB::table('users')->where('EmailUser', $request->Email)->first();
            $details = ['body' => route('reinitialisation', ['EmailUser' => $request->Email, 'Token' => $token])];

            if ($user) {
                Users::where('EmailUser', $request->Email)->update([
                    'Token' => $token, 'Token_Expire' => Carbon::now()->addMinutes(10)->toDateTimeString()
                ]);

                Mail::to($request->Email)->send(new ForgetPassword($details));
                return response()->json([
                    'status' => 200,
                    'messages' => 'Un lien pour réinitialiser le mot de passe a été envoyé à votre Email !'
                ]);
            }else{
                return response()->json([
                    'status' => 401,
                    'messages' => 'Aucune correspondance pour cet Email !'
                ]);
            }
        }
    }

    public function reinitialisation(Request $request){
        $EmailUser = $request->EmailUser;
        $Token = $request->Token;

        return view('reinitialisation', ['EmailUser' => $EmailUser, 'Token' => $Token]);
    }

    public function resetpassword(Request $request){
        $validator = Validator::make($request->all(), [
            'Password' => 'required|min:10|max:100',
            'ConfirmePassword' => 'required|min:10|max:100|same:Password' 
        ], [
            'ConfirmePassword' => 'Le mot de passe ne correspond !'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 400,
                'messages' => $validator->getMessageBag()
            ]);
        }else{
            $user = DB::table('users')->where('EmailUser', $request->Email)->whereNotNull('Token')->where('Token', $request->Token)->where('Token_Expire', '>', Carbon::now())->exists();

            if($user){
                Users::where('EmailUser', $request->Email)->update([
                    'Password' => Hash::make($request->Password),
                    'Token' => '',
                    'Token_Expire' => Carbon::now()
                ]);

                return response()->json([
                    'status' => 200,
                    'messages' => 'Le mot de passe a été mise à jour ! <a href="/connexion" style="color: #31A5DF;">Connectez-vous</a>'
                ]);
            }else{
                return response()->json([
                    'status' => 401,
                    'messages' => 'Le lien a expiré ! Recommensez l\'opération'
                ]);
            }
        }
    }

}