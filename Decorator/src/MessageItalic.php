<?php

namespace src;

class MessageItalic extends MessageDecorator {

    public function show(): string
    {
        $this->setTitle('<i>'.$this->MessageView->getTitle().'</i>');
        $this->setContent('<i>'.$this->MessageView->getContent().'</i>');

        $html = $this->getTitle();
        $html .= '<br>';
        $html .= $this->getContent();
        return $html;
    }
}