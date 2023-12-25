<?php

namespace src;

abstract class MessageDecorator extends AbstractMessageView {

    protected AbstractMessageView $MessageView;

    public function __construct(AbstractMessageView $MessageView){
        $this->MessageView = $MessageView;
    }

    public abstract function show():string;


}