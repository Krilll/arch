<?php
//
// Базовый класс контроллера.
//

abstract class Controller
{
    // Генерация внешнего шаблона
    protected abstract function render();

    public function Request($action, $id = false)
    {
        $this->$action($id);
        $this->render();
    }

    //
    // Запрос произведен методом GET?
    //
    protected function IsGet()
    {
        return $_SERVER['REQUEST_METHOD'] == 'GET';
    }

    //
    // Запрос произведен методом POST?
    //
    protected function IsPost()
    {
        return $_SERVER['REQUEST_METHOD'] == 'POST';
    }

    //
    // Генерация HTML шаблона в строку.
    //
    protected function Template($fileName, $vars = array())
    {
        // Установка переменных для шаблона.
        foreach ($vars as $k => $v)
        {
            $$k = $v;
        }
        // Генерация HTML в строку.
        ob_start();
        include "$fileName";
        return ob_get_clean();
    }

    // Если вызвали метод, которого нет - завершаем работу
    public function __call($name, $params){
        die('Такого url нет');
    }
}
