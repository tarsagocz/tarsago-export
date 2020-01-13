<?php
/**
 * @author Bc. Marek Fajfr <mfajfr90(at)gmail.com>
 * Created at: 11:58 13.01.2020
 */

namespace TarsagoExport\Abstracts;

use TarsagoExport\Interfaces\IExporter;

abstract class AbstractExporter implements IExporter
{
    const WAITING_TIME = 120;
    const TRIES = 5;

    /**
     * @var string
     */
    protected $ip;
    /**
     * @var AbstractCredentials
     */
    protected $credentials;
    /**
     * @var int
     */
    protected $waitingTime;
    /**
     * @var int
     */
    protected $tries;

    /**
     * AbstractExporter constructor.
     * @param string $ip
     * @param AbstractCredentials $credentials
     * @param null|int $waitingTime
     */
    public function __construct(string $ip, AbstractCredentials $credentials, int $waitingTime = null, int $tries = null)
    {
        $this->ip = $ip;
        $this->credentials = $credentials;
        $this->waitingTime = $waitingTime ?? self::WAITING_TIME;
        $this->tries = $tries ?? self::TRIES;
    }

    protected function rest(int $try) : void
    {
        sleep($try * $this->waitingTime);
    }
}