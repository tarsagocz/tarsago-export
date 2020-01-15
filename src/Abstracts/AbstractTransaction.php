<?php
/**
 * @author Bc. Marek Fajfr <mfajfr90(at)gmail.com>
 * Created at: 12:10 13.01.2020
 */

namespace TarsagoExport\Abstracts;

use TarsagoExport\Interfaces\IRow;
use TarsagoExport\Interfaces\ITransaction;

class AbstractTransaction implements ITransaction
{
    /**
     * @var IRow[]
     */
    protected array $rows = [];
    /**
     * @var string
     */
    protected string $delimiter = ';';

    /**
     * AbstractTransaction constructor.
     * @param string $delimiter
     */
    public function __construct(string $delimiter = ';')
    {
        $this->delimiter = $delimiter;
    }

    public function addRow($row)
    {
        $this->rows[] = $row;
    }

    public function toString() : string
    {
        $string = '';
        foreach ($this->rows as $row) {
            $string .= $row->toString($this->delimiter) . PHP_EOL;
        }
        return $string;
    }

    public function count()
    {
        return sizeof($this->rows);
    }
}