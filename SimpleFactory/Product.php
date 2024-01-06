<?php

namespace DesignPatterns\SimpleFactory;

interface Product
{
    public function getName(): string;
    public function getPrice(): int;
    public function getDescription(): string;
}