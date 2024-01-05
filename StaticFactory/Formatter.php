<?php

namespace DesignPatterns\StaticFactory;

interface Formatter
{
    public function format(string $input): string;
}