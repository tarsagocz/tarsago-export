<?php
/**
 * @author Bc. Marek Fajfr <mfajfr90(at)gmail.com>
 * Created at: 15:34 13.01.2020
 */

namespace TarsagoExport\Exporters;

use phpseclib\Crypt\RSA;
use phpseclib\Net\SFTP;
use TarsagoExport\Abstracts\AbstractSFTPExporter;

class SFTPRSAExporter extends AbstractSFTPExporter
{
    /**
     * @inheritDoc
     */
    public function connect()
    {
        if (is_null($this->sftp)) {
            $this->sftp = new SFTP($this->ip);

            $privateKey = new RSA();
            $privateKey->setPassword($this->credentials->getPassword());
            $privateKey->loadKey($this->credentials->getPrivateKey());

            if (!$this->sftp->login($this->credentials->getUser(), $privateKey)) {
                throw new \Exception('Authentication failed');
            }
        }
    }
}