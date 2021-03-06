<?php
/**
 * @author Bc. Marek Fajfr <mfajfr90(at)gmail.com>
 * Created at: 11:48 13.01.2020
 */

namespace TarsagoExport\Exporters;

use phpseclib\Net\SFTP;
use TarsagoExport\Abstracts\AbstractSFTPExporter;
use TarsagoExport\Interfaces\ITransaction;

class SFTPExporter extends AbstractSFTPExporter
{
    /**
     * @return mixed|void
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
}