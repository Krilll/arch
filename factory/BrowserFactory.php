<?php

require_once("NewAbstractFactory.php");

class BrowserFactory extends NewAbstractFactory{
    public function createButton(string $buttonName):AbstractButton
    {
        return new BrowserButton($buttonName);
    }
    public function createModalForm(string $ModalFormName, string $type):AbstractModalForm
    {
        if ($type === 'Webkit') {
            return new WebkitBrowserModalForm($ModalFormName);
        } else if($type === 'IExplorer') {
            return new IExplorerBrowserModalForm($ModalFormName);
        }
    }
    public function createLabel():AbstractLabel
    {
        return new BrowserLabel();
    }

}