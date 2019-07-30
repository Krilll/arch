<?php

abstract class NewAbstractFactory {
	abstract public function createButton(string $buttonName):AbstractButton;
    abstract public function createModalForm(string $ModalFormName, string $type):AbstractModalForm;
    abstract public function createLabel():AbstractLabel;
}