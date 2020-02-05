<?php

namespace TarsagoExport\Interfaces;

interface IRow
{
    public function toString($delimiter = ';');

    public static function createExample($params = []);
    public static function createExamples($quantity = 1, $params = []);
}