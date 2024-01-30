<?php

namespace HW_9_trait;

class UserLogin
{
    use ErrorLog;

    public function login(string $data) {
        if ($this->lenMin($data))
        {
            $this->logError('User login failed');
        }

        return 'Lodin success';
    }
}