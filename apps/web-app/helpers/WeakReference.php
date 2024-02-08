<?php

namespace app\helpers;

class WeakReference {
    private $reference;

    public function __construct($object) {
        $this->reference = $object;
    }

    public function tryGetTarget(&$target) {
        if (is_object($this->reference)) {
            $target = $this->reference;
            return true;
        } else {
            $target = null;
            return false;
        }
    }
}