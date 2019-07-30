<?php

require_once("NewAbstractFactory.php");

class MacOSFactory extends NewAbstractFactory{
    public function createButton(string $buttonName):AbstractButton
    {
        return new MacOSButton($buttonName);
    }
    public function createModalForm(string $ModalFormName, string $type = ''):AbstractModalForm
    {
        return new MacOSModalForm($ModalFormName);
    }
    public function createLabel():AbstractLabel
    {
        return new MacOSLabel();
    }

    public function init() {
        $ModalFormName = 'MacOS';
        $result = $this->createModalForm($ModalFormName);
        if ($result === 1) {
            $buttonName = 'MacOSButton';
            $resultTwo = $this->createButton($buttonName);
            $this->createLabel();
            if ($resultTwo === 1) {
                echo 'You can see the random image!';
            }
        }
    }

}