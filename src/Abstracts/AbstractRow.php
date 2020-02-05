<?php


namespace TarsagoExport\Abstracts;


use TarsagoExport\Interfaces\IRow;

abstract class AbstractRow implements IRow
{
    public static function createExamples($quantity = 1, $params = [])
    {
        $examples = [];
        for ($i = 0;$i < $quantity;$i++) {
            $examples[] = static::createExample($params);
        }
        return $examples;
    }
}