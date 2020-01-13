<?php
/**
 * @author Bc. Marek Fajfr <mfajfr90(at)gmail.com>
 * Created at: 15:30 13.01.2020
 */

namespace TarsagoExport\Abstracts;

use phpseclib\Net\SFTP;
use TarsagoExport\Interfaces\ITransaction;

abstract class AbstractSFTPExporter extends AbstractExporter
{
    /**
     * @var null|SFTP
     */
    protected $sftp = null;

    /**
     * @inheritDoc
     */
    public function upload(string $name, ITransaction $transaction, int $try = 1)
    {
        try {
            $this->connect();
            $this->sftp->put($name, $transaction->toString());
        } catch (\Exception $exception) {
            if ($try == $this->tries) {
                $this->backup();
            } else {
                $this->rest($try);
                $try++;
                $this->upload($name, $transaction, $try);
            }
        }
    }
}