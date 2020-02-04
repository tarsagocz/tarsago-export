<?php

namespace TarsagoExport\Interfaces;

interface IExporter
{
    /**
     * @param string $name
     * @param ITransaction $transaction
     * @param int $attempt
     * @return mixed
     */
    public function upload(string $name, ITransaction $transaction, int $attempt = 1);

    /**
     * @return mixed
     */
    public function connect();

    public function backup();

    /**
     * @param string $name
     * @return bool
     */
    public function hasDirectory(string $name) : bool;

    /**
     * @param string $name
     * @return bool
     */
    public function makeDirectory(string $name) : bool;
}