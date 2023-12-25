<?php

namespace src;

abstract class AbstractMessageView {
    protected string $Title;
    protected string $Content;

    public abstract function show() : string;

    /**
     * Get the value of Title
     */ 
    public function getTitle()
    {
        return $this->Title;
    }

    /**
     * Set the value of Title
     *
     * @return  self
     */ 
    public function setTitle($Title)
    {
        $this->Title = $Title;

        return $this;
    }

    /**
     * Get the value of Content
     */ 
    public function getContent()
    {
        return $this->Content;
    }

    /**
     * Set the value of Content
     *
     * @return  self
     */ 
    public function setContent($Content)
    {
        $this->Content = $Content;

        return $this;
    }
}