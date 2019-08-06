<?php


class User
{

	private $macrosoftWorld;
	private $commands = [];

	private $current = 0;

	public function __construct()
	{
		$this->macrosoftWorld = new MacrosoftWorld();
	}


	//Основная функция выполнения команд
	public function runCommand($operator, $begin, $end)
	{
		$command = new MacrosoftWorldCommand($this->macrosoftWorld, $operator, $begin, $end);
		$command->execute();

		$this->commands[] = $command;
		$this->current++;
	}


	public function up($levels)
	{
		echo "Повторить $levels операций".PHP_EOL;

		for ($i = 0; $i < $levels; $i++)
		{
			if($this->current < count($this->commands)){
			    echo 'Hello';
				$this->commands[$this->current++]->execute();
			}
		}
	}

	public function down($levels)
	{
		echo "Отменить $levels операций" . PHP_EOL . PHP_EOL;

		for ($i = 0; $i < $levels; $i++)
		{
			if($this->current > 0){
                $this->commands[--$this->current]->unExecute();
			}
		}
	}
}