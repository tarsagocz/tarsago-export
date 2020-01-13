<?php

namespace TarsagoExport\Interfaces;

interface IRow
{
    public function toString($delimiter = ';');
}