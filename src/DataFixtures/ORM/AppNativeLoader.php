<?php

namespace App\DataFixtures\ORM;

use Nelmio\Alice\Loader\NativeLoader;
use Faker\Generator as FakerGenerator;

class AppNativeLoader extends NativeLoader
{
    /**
     * @return FakerGenerator
     */
    protected function createFakerGenerator(): FakerGenerator
    {
        $generator = parent::createFakerGenerator();
        $generator->addProvider(new GenderProvider($generator));
        $generator->addProvider(new PasswordProvider($generator));

        return $generator;
    }
}