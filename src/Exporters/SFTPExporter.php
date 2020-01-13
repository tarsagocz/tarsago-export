<?php
/**
 * @author Bc. Marek Fajfr <mfajfr90(at)gmail.com>
 * Created at: 11:48 13.01.2020
 */

namespace TarsagoExport\Exporters;

use phpseclib\Net\SFTP;
use TarsagoExport\Abstracts\AbstractExporter;
use TarsagoExport\Interfaces\ITransaction;

class SFTPExporter extends AbstractExporter
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

    /**
     * @throws \Exception
     */
    public function connect()
    {
        if (is_null($this->sftp)) {
            $this->sftp = new SFTP($this->ip);

            if (!$this->sftp->login($this->credentials->getUser(), $this->credentials->getPassword())) {
                throw new \Exception('Authentication failed');
            }
        }
    }

    public function backup()
    {
        // TODO: Implement backup() method.
    }
}