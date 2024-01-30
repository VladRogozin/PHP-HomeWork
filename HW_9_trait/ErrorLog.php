<?php

namespace HW_9_trait;

trait ErrorLog
{

    public function lenMin($data){
        if (strlen($data) <= 1){
            return true;
        }
        return false;
    }
    public function logError($errorMessage) {
        throw new \InvalidArgumentException("Invalid.... $errorMessage");
    }
}