<?php

namespace src;

class MessageBold extends MessageDecorator {
    public function show(): string
    {
        $this->setTitle('<b>'.$this->MessageView->getTitle().'</b>');
        $this->setContent('<b>'.$this->MessageView->getContent().'</b>');
        $html = $this->Title;
        $html .= '<br>';
        $html .= $this->Content;
        return $html;
    }
}