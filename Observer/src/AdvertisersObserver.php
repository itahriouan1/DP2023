<?php

namespace src;

class AdvertisersObserver implements ObserverInterface {
    public function notify(): void
    {
        echo '<br>Advertisers have been notified';
    }
}