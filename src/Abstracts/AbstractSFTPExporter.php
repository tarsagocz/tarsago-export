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
    protected ?SFTP $sftp = null;

    /**
     * @inheritDoc
     */
    public function upload(string $name, ITransaction $transaction, int $attempt = 1)
    {
        try {
            $this->connect();
//            $exists = $this->sftp->file_exists($name);
            $this->sftp->put($name, $transaction->toString());
        } catch (\Exception $exception) {
            if ($attempt == $this->tries) {
                $this->backup();
            } else {
                $this->rest($attempt);
                $attempt++;
                $this->upload($name, $transaction, $attempt);
            }
        }
    }

    /**
     * @param string $name
     * @return bool
     */
    public function hasDirectory(string $name) : bool {
        $this->connect();
        return $this->sftp->is_dir($name);
    }

    /**
     * @param string $name
     * @return bool
     */
    public function makeDirectory(string $name) : bool {
        $this->connect();
        return $this->sftp->mkdir($name);
    }
}