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

		$case1 = new FirstCapt();
		$case1->firstCapt();

		$case2 = new LowerCase();
		$case2->lowerCase();

		$case3 = new Uppercase();
		$case3->uppercase();

