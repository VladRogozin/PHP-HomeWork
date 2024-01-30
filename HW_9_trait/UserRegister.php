<?php

namespace HW_9_trait;

class UserRegister
{
    use ErrorLog;

    public function Register(string $data) {
        if ($this->lenMin($data))
        {
            $this->logError('User Register failed');
        }
    }
}