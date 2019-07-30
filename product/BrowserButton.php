<?php


class BrowserButton extends AbstractButton
{
    private $success = 0;
	public function render($name): int
	{
		// логика открытия вывода картинки при нажатии на кнопку в браузере. В случае успеха -> success = 1,
        if ($this->success === 1) {
            $result = "Выводим картинку в браузере при нажатии на кнопку " . $name . '.' . PHP_EOL;
            echo $result;
            return $this->success;
        } else {
            $result = 'Что-то пошло не так при работе с кнопкой ' . $name . ' в браузере.' . PHP_EOL;
            echo $result;
            return $this->success;
        }
	}
}