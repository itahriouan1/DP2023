<?php

namespace src;

class FollowerObserver implements ObserverInterface {
    public function notify(): void
    {
        echo '<br>Messages have been sent to followers';
    }
}