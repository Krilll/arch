<?php


class WebkitBrowserModalForm extends AbstractModalForm
{
    private $success = 0;
	public function render($name): int
	{
		// логика открытия модального окна в Браузере. В случае успеха -> success = 1,
        if ($this->success === 1) {
            $result = 'Выводим модальное окно ' . $name . ' в браузере Webkit.' . PHP_EOL;
            echo $result;
            return $this->success;
        } else {
            $result = 'Что-то пошло не так при открытии модального окна' . $name . ' в браузере Webkit.' . PHP_EOL;
            echo $result;
            return $this->success;
        }
	}
}