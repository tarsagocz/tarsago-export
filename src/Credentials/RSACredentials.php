<?php
/**
 * @author Bc. Marek Fajfr <mfajfr90(at)gmail.com>
 * Created at: 15:32 13.01.2020
 */

namespace TarsagoExport\Credentials;

use TarsagoExport\Abstracts\AbstractCredentials;

class RSACredentials extends UserPasswordCredentials
{
    /**
     * @var string
     */
    protected string $privateKey;

    /**
     * RSACredentials constructor.
     * @param string $privateKey
     */
    public function __construct(string $user, string $password, string $privateKey)
    {
        parent::__construct($user, $password);
        $this->privateKey = $privateKey;
    }

    /**
     * @return string
     */
    public function getPrivateKey(): string
    {
        return $this->privateKey;
    }
}