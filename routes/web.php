<?php

use App\Http\Controllers\AbonnementController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//////////////// User part \\\\\\\\\\\\\\\\\

Route::get('/', function () {
    return view('index');
});

Route::post('/newsletter', [AbonnementController::class, 'newsletter'])->name('newsletter');

Route::get('/product_details', function () {
    return view('product');
});

Route::get('/shop', function () {
    return view('shop');
});

Route::get('/apropos', function () {
    return view('apropos');
});

Route::get('/connexion', [UsersController::class, 'index']);

Route::get('/registration', function () {
    return view('registration');
});

Route::get('/password', function () {
    return view('password');
});

/*Start with controllers */

// Connexion et Deconnexion \\

Route::post('/connexion/', [UsersController::class, 'login_user'])->name('login_user');

Route::get('/admin/', [UsersController::class, 'profile'])->name('profile');

Route::get('/admin/produits', [UsersController::class, 'adminproduits'])->name('adminproduits');

Route::get('/admin/offres', [UsersController::class, 'adminoffres'])->name('adminoffres');

Route::get('/admin/categorie', [UsersController::class, 'admincategorie'])->name('admincategorie');



Route::get('/client/', [UsersController::class, 'profileclient'])->name('profileclient');

Route::get('/connexion/logout_user', [UsersController::class, 'logout_user'])->name('logout_user');

Route::post('/password', [UsersController::class, 'forgotpassword'])->name('forgotpassword');


// Gestion des clients \\

Route::get('/admin/client/voirclient', [ClientController::class, 'voirclient'])->name('voirclient');

Route::post('/admin/client/addclient', [ClientController::class, 'addclient'])->name('addclient');

Route::post('/admin/client/desactiveclient', [ClientController::class, 'desactiveclient'])->name('desactiveclient');

Route::post('/admin/client/activeclient', [ClientController::class, 'activeclient'])->name('activeclient');

Route::post('/admin/client/deleteclient', [ClientController::class, 'deleteclient'])->name('deleteclient');

// Gestion du personnel \\

Route::get('/admin/personnel/voirpersonne', [PersonnelController::class, 'voirpersonne'])->name('voirpersonne');

Route::post('/admin/personnel/addpersonnel', [PersonnelController::class, 'addpersonnel'])->name('addpersonnel');

Route::post('/admin/personnel/desactivepersonnel', [PersonnelController::class, 'desactivepersonnel'])->name('desactivepersonnel');

Route::post('/admin/personnel/activepersonnel', [PersonnelController::class, 'activepersonnel'])->name('activepersonnel');

Route::post('/admin/personnel/deletepersonnel', [PersonnelController::class, 'deletepersonnel'])->name('deletepersonnel');

// Gestion des admins \\

Route::get('/admin/personnel/afficheadmin', [AdminController::class, 'afficheadmin'])->name('afficheadmin');

// Gestion du newsletter \\

Route::post('/newsletter', [NewsletterController::class, 'newsletter'])->name('newsletter');

Route::get('/admin/abonnes/viewnewsletter', [NewsletterController::class, 'viewnewsletter'])->name('viewnewsletter');

Route::post('/admin/abonnes/deleteabonne', [NewsletterController::class, 'deleteabonne'])->name('deleteabonne');

Route::post('/admin/abonnes/notify', [NewsletterController::class, 'notify'])->name('notify');

// Gestion des actualités \\

Route::post('/admin/actualites/actu', [ActualiteController::class, 'actu'])->name('actu');

Route::get('/admin/actualites/afficheactu', [ActualiteController::class, 'afficheactu'])->name('afficheactu');

Route::post('/admin/actualites/deleteactu', [ActualiteController::class, 'deleteactu'])->name('deleteactu');

// Gestion des temoignages \\

Route::post('/temoignage/testimony', [TemoignageController::class, 'testimony'])->name('testimony');

Route::get('/admin/temoignage/affichertestimony', [TemoignageController::class, 'affichertestimony'])->name('affichertestimony');

// Gestion des partenaires \\

Route::post('/admin/partenaire/partner', [PartenaireController::class, 'partner'])->name('partner');

Route::get('/admin/partenaire/fetch-all', [PartenaireController::class, 'fetchAll'])->name('fetchAll');

Route::get('/admin/partenaire/edit', [PartenaireController::class, 'edit'])->name('edit');

Route::post('/admin/partenaire/update', [PartenaireController::class, 'updatepartner'])->name('updatepartner');

Route::post('/admin/partenaire/delete', [PartenaireController::class, 'deletepartner'])->name('deletepartner');

Route::get('/affichepartner', [PartenaireController::class, 'allpartner'])->name('allpartner');

// Gestion de la galerie \\

Route::post('/admin/galerie/image', [GalerieController::class, 'image'])->name('image');

Route::get('/admin/galerie/fetchimage', [GalerieController::class, 'fetchimage'])->name('fetchimage');

Route::get('/galerie/fetchimage', [GalerieController::class, 'fetchimg'])->name('fetchimg');

Route::post('/admin/galerie/deletepicture', [GalerieController::class, 'deletepicture'])->name('deletepicture');

// Gestion des offres \\

Route::post('/admin/offre/product', [ProduitController::class, 'product'])->name('product');

Route::post('/admin/offre/deleteproduct', [ProduitController::class, 'deleteproduct'])->name('deleteproduct');

//Route::get('/admin/offre/fetchproduct', [ProduitController::class, 'fetchproduct'])->name('fetchproduct');

//Route::get('/admin/section/showOffre', [ProduitController::class, 'showOffre']);

// Gestion des archives \\

Route::post('/admin/archive/archiverproject', [ArchiveController::class, 'archiverproject'])->name('archiverproject');

Route::post('/admin/archive/deletearchive', [ArchiveController::class, 'deletearchive'])->name('deletearchive');

Route::get('/admin/archive/voirarchive', [ArchiveController::class, 'voirarchive'])->name('voirarchive');

Route::get('/admin/archive/afficheproduit', [ProduitController::class, 'afficheproduit'])->name('afficheproduit');

Route::get('/admin/archive/affclient', [ClientController::class, 'affclient'])->name('affclient');

// Gestion des projets \\

Route::post('/admin/projet/project', [ProjetController::class, 'project'])->name('project');

Route::post('/client/produit/project', [ProjetController::class, 'project'])->name('project');

Route::get('/admin/projet/afficherprojet', [ProjetController::class, 'afficherprojet'])->name('afficherprojet');

Route::post('/personnel/affectation/project', [ProjetController::class, 'project'])->name('project');

Route::post('/personnel/projet/validerprojet', [ProjetController::class, 'validerprojet'])->name('validerprojet');

Route::post('/personnel/projet/deleteprojet', [ProjetController::class, 'deleteprojet'])->name('deleteprojet');

// Gestion des affectations \\

Route::post('/admin/affectation/affecter', [AffectationController::class, 'affecter'])->name('affecter');

Route::post('/personnel/equipe/affecterpersonne', [AffectationController::class, 'affecterpersonne'])->name('affecterpersonne');

Route::get('/admin/affectation/voiraffectation', [AffectationController::class, 'voiraffectation'])->name('voiraffectation');

Route::post('/admin/affectation/deleteaffect', [AffectationController::class, 'deleteaffect'])->name('deleteaffect');

Route::get('/admin/affectation/affprojet', [ProjetController::class, 'affprojet'])->name('affprojet');

Route::get('/admin/affectation/affpersonne', [PersonnelController::class, 'affpersonne'])->name('affpersonne');

Route::get('/personnel/affectation/{matricule}', [AffectationController::class, 'viewaffect'])->name('viewaffect');

// Gestion des conversations \\

Route::post('/personnel/envoi/envois', [ConversationController::class, 'envois'])->name('envois');

Route::get('/admin/contact/affpersonnechat', [PersonnelController::class, 'affpersonnechat'])->name('affpersonnechat');

Route::get('/admin/contact/affclientchat', [ClientController::class, 'affclientchat'])->name('affclientchat');



Route::get('/admin/accueil/codeuser', [AdminController::class, 'codeuser'])->name('codeuser');



