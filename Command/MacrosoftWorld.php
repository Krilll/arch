<?php

class MacrosoftWorld
{
    private $text = 'Want_some_tea?_'.
    'Lets_go..._And_what_is_tea?';

    private $clipboard = '';
    private $clipboardCut = '';
    private $mistake = '';
    public function operation($operator, $begin, $end) {
        switch($operator){
            case 'copy' :  $this->copyOperation ($begin - 1, $end - $begin + 1);
                break;
            case 'cut' :  $this->cutOperation ($begin - 1, $end - $begin + 1);
                break;
            case 'insert' : $this->insertOperation ($begin - 1, $end - $begin + 1);
                break;
            case 'cancelCopy' : $this->clipboard = '';
                break;
            case 'cancelCut' : $this->cancelInsert($begin - 1, $this->clipboard);
                break;
            case 'cancelInsert' :
                $this->cutOperation ($begin - 1, strlen($this->clipboard) + 1);
                $this->cancelInsert($begin - 1, $this->clipboardCut);
                $this->clipboard = $this->clipboardCut;
                break;
            default : $this->mistake = 'Введенной вами команды не существует.';
                break;
        }
        if(!empty($this->mistake)) {
            echo $this->mistake;
            $this->mistake = '';
        } else {
            echo 'Буфер обмена: ' . $this->clipboard . PHP_EOL .
                'После действия: ' . $operator . '. На символах: ' . $begin . '-' . $end . PHP_EOL .
                $this->text . PHP_EOL . PHP_EOL;
        }
    }

    protected function copyOperation ($begin, $length) {
        $textArray = str_split($this->text);
        $clipboardArray = array_slice($textArray, $begin, $length);
        $this->clipboard = implode('', $clipboardArray);
    }

    protected function cutOperation ($begin, $length) {
        $textArray = str_split($this->text);
        $clipboardArray = array_splice($textArray, $begin, $length);
        $this->clipboard = implode('', $clipboardArray);
        $this->text = implode('', $textArray);
    }

    protected function insertOperation ($begin, $length) {
        $textArray = str_split($this->text);

        $clipboardCutArray = array_slice($textArray, $begin, $length);
        $this->clipboardCut = implode('', $clipboardCutArray);

        $clipboardArray = str_split($this->clipboard);
        array_splice($textArray, $begin, $length, $clipboardArray);
        $this->text = implode('', $textArray);

    }

    protected function cancelInsert($begin, $clipboard) {

        $textArray = str_split($this->text);
        $clipboardArray = str_split($clipboard);
        array_splice($textArray, $begin, 0, $clipboardArray);
        $this->text = implode('', $textArray);
    }
}