<?php


class WindowsButton extends AbstractButton
{
    private $success = 0;
	public function render($name): int
	{
		// логика открытия вывода картинки при нажатии на кнопку в ОС Windows. В случае успеха -> success = 1,
        if ($this->success === 1) {
            $result = "Выводим картинку в ОС Windows при нажатии на кнопку " . $name . '.' . PHP_EOL;
            echo $result;
            return $this->success;
        } else {
            $result = 'Что-то пошло не так при работе с кнопкой ' . $name . ' в OC Windows.' . PHP_EOL;
            echo $result;
            return $this->success;
        }
	}
}