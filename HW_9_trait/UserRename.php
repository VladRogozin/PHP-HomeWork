<?php

namespace HW_9_trait;

class UserRename
{
    use ErrorLog;

    public function Rename(string $data) {
        if ($this->lenMin($data))
        {
            $this->logError('User Rename failed');
        }
    }
}