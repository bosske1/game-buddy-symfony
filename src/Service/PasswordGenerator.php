<?php

namespace App\Service;


class PasswordGenerator
{
    /**
     * @param string $plainPassword
     * @param string $salt
     * @return string
     */
    public function encodePassword(string $plainPassword, string $salt): string
    {
        return hash('sha256', $salt . $plainPassword);
    }

    /**
     * @param string $encoded
     * @param string $plainPassword
     * @param string $salt
     * @return bool
     */
    public function isPasswordValid(string $encoded, string $plainPassword, string $salt)
    {
        return $encoded === $this->encodePassword($plainPassword, $salt);
    }
}