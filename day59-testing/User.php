<?php

/**
 * class User
 */
class User
{
    public function __construct($email = null)
    {
        if ($email !== null && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new InvalidArgumentException('The argument is not an email address');
        }

        $this->email = $email;
    }

    public function __toString()
    {
        return $this->email;
    }
}