<?php

namespace DesignPattern\Behavioral\Observer\Php;

class Subscription extends Subject {

    private bool $popUp;

    /**
     * Set PopUp and notify all of the subscribers(observers)
     * 
     * @param bool $popUp
     * @return void
     */
    public function setPopUp(bool $popUp) : void
    {
        $this->popUp = $popUp;
        $this->notify($popUp);
    }

    /**
     * Show status of popUp
     * @param void
     * @return bool
     */
    public function getPopUp() : bool
    {
        return $this->popUp;
    }
}