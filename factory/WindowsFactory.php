<?php

require_once("NewAbstractFactory.php");

class WindowsFactory extends NewAbstractFactory{
    public function createButton(string $buttonName):AbstractButton
    {
        return new WindowsButton($buttonName);
    }
    public function createModalForm(string $ModalFormName, string $type = ''):AbstractModalForm
    {
        return new WindowsModalForm($ModalFormName);
    }
    public function createLabel():AbstractLabel
    {
        return new WindowsLabel();
    }
    public function init() {
        $ModalFormName = 'Windows';
        $result = $this->createModalForm($ModalFormName);
        if ($result === 1) {
            $buttonName = 'WindowsButton';
            $resultTwo = $this->createButton($buttonName);
            $this->createLabel();
            if ($resultTwo === 1) {
                echo 'You can see the random image!';
            }
        }
    }
}