<?php
session_start();
require 'Autoloader.php';
Autoloader::register();

use app\controller\Authcontroleur;
use app\controller\GADcontroleur;
use app\controller\Paramcontroleur;
use app\controller\RECcontroleur;
use app\controller\Evacontroleur;
use app\controller\ANUcontroleur;
use app\controller\CONGcontroleur;

if(isset($_GET['p']))
{
 	$p = $_GET['p'];
}
else
{
	$p = 'acc';
}

//---------------------------------------------------------------------------//
if($p === 'acc')
{
  require'app/views/acc/ind.html';
}

elseif($p === 'home')
{
	$Authcontroleur=new Authcontroleur();
	$Authcontroleur->logged();
}

elseif($p==='connexion'){
	$Authcontroleur=new Authcontroleur();
 	$Authcontroleur->connexion();
}

elseif($p==='deconnexion')
{
	$Authcontroleur=new Authcontroleur();
 	$Authcontroleur->deconnexion();
}

elseif(isset($_SESSION['id']))			//En cas ou l'utilisateur modifier URL , et il n'est pas encore conécté
{

	//Change password  or identifiant
	if($p === 'upmyuser')
	{
		$controleur=new Authcontroleur();
 		$controleur->upmyuser();
	}

	//Module Gestion Administrative:
	//-----------------------------

	elseif($p === 'administration')
	{
		$controleur = new GADcontroleur();
	  $controleur->administration();
	}

	elseif($p === 'addemploye')
	{
		$controleur = new GADcontroleur();
		$controleur->addemploye();
	}

	elseif($p === 'upemploye')
	{
		$controleur = new GADcontroleur();
		$controleur->upemploye();
	}

	elseif($p === 'salaire')
	{
		$controleur = new GADcontroleur();
		$controleur->afficher_salaire();
	}

	elseif($p=== 'contrat_de_travail')
	{
		$controleur= new GADcontroleur;
		$controleur->export_word('Contrat de travail');
	}

  elseif($p=== 'certificat_de_travail')
	{
		$controleur= new GADcontroleur();
		$controleur->export_word('Certificat de travail');
	}
  elseif($p=== 'attestation_de_travail')
  {
    $controleur= new GADcontroleur();
    $controleur->export_word('Attestation de travail');
  }
  elseif($p=== 'cdtdown')
  {
    $controleur = new GADcontroleur();
    $controleur->cdtdown();
  }
	//----------------------------------

	//Module Evaluation et Objectifs:
	//-------------------------------
  elseif($p === 'Etelecharger')
	{
		$Evacontroleur = new Evacontroleur();
		$Evacontroleur->telecharger();
	}

	elseif($p === 'Echarger')
	{
		$Evacontroleur = new Evacontroleur();
		$Evacontroleur->charger();
	}

	elseif($p === 'evaluation')
	{
		$Evacontroleur = new Evacontroleur();
		$Evacontroleur->afficher_total();
	}

	elseif($p === 'Eafficher')
	{
		$Evacontroleur = new Evacontroleur();
		$Evacontroleur->afficher_evaluation();
	}

	elseif($p === 'Emodifier')
	{
		$Evacontroleur = new Evacontroleur();
		$Evacontroleur->modifier();
	}

	elseif($p === 'Edelete')
	{
		$Evacontroleur = new Evacontroleur();
		$Evacontroleur->delete();
	}

	elseif($p === 'Echarger')
	{
		$Evacontroleur = new Evacontroleur();
		$Evacontroleur->charger();
	}

	elseif($p === 'Enew')
	{
		$Evacontroleur = new Evacontroleur();
		$Evacontroleur->creer();
	}

	elseif($p === 'eva')
	{
		$Evacontroleur = new Evacontroleur();
		$Evacontroleur->historique();
	}


	//----------------------------

	//Module Parametres:
	//-----------------
	elseif($p === 'param')
	{
		$Paramcontroleur = new Paramcontroleur();
		$Paramcontroleur->upparam();
	}
	elseif($p==='adduser')
	{
		$Paramcontroleur=new Paramcontroleur();
	 	$Paramcontroleur->adduser();

	}
	elseif($p==='admincomptes')
	{
		$Paramcontroleur=new Paramcontroleur();
	 	$Paramcontroleur->admincomptes();

	}
	elseif($p==='upuser')
	{
		$Paramcontroleur=new Paramcontroleur();
	 	$Paramcontroleur->upuser();

	}
	elseif($p==='uptheme')
	{
		$Paramcontroleur=new Paramcontroleur();
	 	$Paramcontroleur->uptheme();
	}

  elseif($p === 'deleteCompte' ){

    $Paramcontroleur=new Paramcontroleur();
    $Paramcontroleur->deleteCompte();

  }


	//-----------------------------

	// RECRUTEMENTS------------------------

	elseif($p === 'recrutement')
  {
		$controleur = new RECcontroleur();
		$controleur->recrutement();
	}

	elseif($p === 'addcandidat')
  {
		$controleur = new RECcontroleur();
		$controleur->addcandidat();
	}

	elseif($p === 'upcandidat')
  {
		$controleur = new RECcontroleur();
		$controleur->upcandidat();
	}

  elseif($p === 'deleteCandidat')
  {
    $controleur = new RECcontroleur();
    $controleur->supprimer();
  }

	// ANNUAIRE -------------
  elseif($p === 'annuaire'){
		$controleur = new ANUcontroleur();
		$controleur->afficher_annuaire();
	}
  elseif($p == 'anuxlsx'){
    $controleur = new ANUcontroleur();
    $controleur->anu();
  }
  elseif($p == 'filtre'){
    $controleur = new ANUcontroleur();
    $controleur->filtre();
  }

  //-----------------
    //------------Conges-----------------//
  elseif ($p === 'conge') {
    $controleur= new CONGcontroleur;
    $controleur->insconge();
  }
  elseif($p === 'calender'){
    $controleur= new CONGcontroleur;
    $controleur->calender();
  }

	else
	{
		require"app/views/error.html";
	}
}
else
{
	header('location:?p=connexion');
}
