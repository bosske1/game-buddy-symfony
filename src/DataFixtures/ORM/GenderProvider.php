<?php

namespace App\DataFixtures\ORM;

use Faker\Provider\Base as BaseProvider;
use Faker\Generator;

class GenderProvider extends BaseProvider
{
    private $gender_options = [
        'male',
        'female'
    ];

    /**
     * GenderProvider constructor.
     * @param Generator $generator
     */
    public function __construct(Generator $generator)
    {
        parent::__construct($generator);
    }

    /**
     * @return string
     */
    public function generateGender(): string
    {
        $key = array_rand($this->gender_options);

        return $this->gender_options[$key];
    }
}