<?php
abstract class ChangeCase 
{
	protected $inputInform;
	protected $convertTypes;

	public function __construct()
	{
		if (!empty($_GET['inputInform'])) {
			$this->inputInform = htmlspecialchars($_GET['inputInform'], ENT_QUOTES);
		}

		if (!empty($_GET['convertTypes'])) {
			$this->convertTypes = $_GET['convertTypes'];
		}
	}

	abstract public function firstCapt();
	abstract public function lowerCase();
	abstract public function uppercase();
}
