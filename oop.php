<?php 
	class BankAccount{
		public $balance = 0;

		public function DisplayBalance()
		{
			return "Current Balance is: ". $this->balance."<br>";
		}

		public function Diposit($ammount)
		{
			$this->balance = $this->balance + $ammount;
			echo "Rs ". $ammount . " has been added successfully<br>";
			return;
		}

		public function Withdraw($ammount)
		{
			if($ammount > $this->balance)
			{
				echo "Not enough money<br><br>";
			}
			else
			{
				$this->balance = $this->balance - $ammount;
				echo "Rs ". $ammount . " has been deducted successfully<br>";
			}
		}
	}

	class Circle{
		const pi = 3.14;
		private static $_instance = 5;
		public function Area($radius)
		{
			return self::pi * ($radius * $radius);
		}

		public function Instance()
		{
			return self::$_instance;
		}
	}

	
	echo Circle::pi. "<br>";
	$circle = new Circle();
	echo $circle->Instance."<br>";
	echo $circle->Area(10);





	/*$zafir = new BankAccount();
	echo $zafir->DisplayBalance();
	$zafir->Diposit(500);
	$zafir->Withdraw(600);
	$zafir->Withdraw(400);*/



 ?>