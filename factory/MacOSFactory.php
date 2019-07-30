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

}