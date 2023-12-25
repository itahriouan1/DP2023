<?php

namespace src;

class MessageView extends AbstractMessageView {
    

    public function show(): string
    {
        $html = $this->Title;
        $html .= '<br>';
        $html .= $this->Content;
        return $html;
    }
    

    
}