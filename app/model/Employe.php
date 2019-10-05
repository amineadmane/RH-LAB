<?php
namespace app\model;
use app\App;
class Employe extends \core\model\table {

	protected $table = "Employe";

	//Recupuration d'un tableau d'objets ( la liste des employés)
	public function liste()
	{
		$data = App::getDb()->query('SELECT * FROM Employe');
		//DATA TABLEAU D'OBJETS
		return $data;
	}

	public function listec($array=[])
	{
		$data = $this->select($array);
		return $data;
	}

	 //Ajouter un employé
	public function ajouter($array=[])
	{
		$this->insert($array);
		$obj = App::getDb()->query('SELECT MAX(id) AS id FROM Employe'); //recupérer l'id de l'employé ajouter
		return ($obj[0]->id);
	}

	//Modification d'un employé
	public function modifier($array=[],$id)
	{
		$this->update($array,$id);
	}

	public function liste_filtrer($filtre)
	{
		$datas = App::getDb()->query('SELECT * FROM Employe ORDER BY '.$filtre.'');
		return $datas;
	}


}
