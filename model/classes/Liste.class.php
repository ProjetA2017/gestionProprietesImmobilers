<?php
require_once 'model/classes/Navigable.interface.php';

class Liste implements Navigable {
	private $affichage;
	private $current = -1;

	public function __construct()	//Constructeur
	{
		$this->affichage = array();
	}

	public function add($affichage)
	{
			array_push($this->affichage,$affichage);
	}

	public function previous()
	{
		if ($this->current>0)
		{
			$this->current--;
			return true;
		}
		return false;
	}
	public function next()
	{
		if ($this->current<count($this->affichage))
		{
			$this->current++;
			return true;
		}
		return false;
	}

	public function printCurrent()
	{
			if (isset($this->affichage[$this->current]))
				echo $this->affichage[$this->current];
	}
	public function getCurrent()
	{
		if (isset($this->affichage[$this->current]))
			return $this->affichage[$this->current];
		return null;
	}

	public function size()
	{
		return count($this->affichage);
	}

}
?>
