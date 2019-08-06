<?php

class MacrosoftWorldCommand
{
    public $operator;
    public $begin;
    public $end;
    public $macrosoftWorld;

    public function __construct($macrosoftWorld, $operator, $begin, $end)
    {
        $this->operator = $operator;
        $this->begin = $begin;
        $this->end = $end;
        $this->macrosoftWorld = $macrosoftWorld;
    }

    public function execute()
    {
        $this->macrosoftWorld->operation($this->operator, $this->begin, $this->end);
    }

    public function unExecute()
    {
        $this->macrosoftWorld->operation($this->down($this->operator), $this->begin, $this->end);
    }

    protected function down($operator)
    {
        $downOperation = null;

        switch ($operator) {
            case 'copy' :
                $downOperation = 'cancelCopy';
                break;
            case 'cut' :
                $downOperation = 'cancelCut';
                break;
            case 'insert' :
                $downOperation = 'cancelInsert';
                break;
            default:
                $downOperation = ' ';
        }
        return $downOperation;
    }
}