<?php

namespace TarsagoExport\Interfaces;

interface IExporter
{
    /**
     * @param string $name
     * @param ITransaction $transaction
     * @param int $try
     * @return mixed
     */
    public function upload(string $name, ITransaction $transaction, int $try = 1);

    /**
     * @return mixed
     */
    public function connect();

    public function backup();
}