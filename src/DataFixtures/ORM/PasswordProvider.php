<?php

namespace App\DataFixtures\ORM;

use App\Service\PasswordGenerator;
use Faker\Provider\Base as BaseProvider;
use Faker\Generator;

class PasswordProvider extends BaseProvider
{
    /**
     * PasswordProvider constructor.
     * @param Generator $generator
     */
    public function __construct(Generator $generator)
    {
        parent::__construct($generator);
    }

    /**
     * @param string $password
     * @param string $salt
     * @return string
     */
    public function generatePassword(string $password, string $salt): string
    {
        $passwordGenerator = new PasswordGenerator();

        return $passwordGenerator->encodePassword($password, $salt);
    }

    /**
     * @return string
     */
    public function generateSalt(): string
    {
        return base_convert(sha1(uniqid(mt_rand(), true)), 16, 36);
    }
}