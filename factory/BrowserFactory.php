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

    public function init() {
        $ModalFormName = 'Browser';
        $type = 'Webkit'; //IExplorer
        
        $result = $this->createModalForm($ModalFormName, $type);
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