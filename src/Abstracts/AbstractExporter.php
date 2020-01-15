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
    const ATTEMPTS = 5;

    /**
     * @var string
     */
    protected string $ip;
    /**
     * @var AbstractCredentials
     */
    protected AbstractCredentials $credentials;
    /**
     * @var int
     */
    protected ?int $waitingTime;
    /**
     * @var int
     */
    protected ?int $attempts;

    /**
     * AbstractExporter constructor.
     * @param string $ip
     * @param AbstractCredentials $credentials
     * @param null|int $waitingTime
     * @param int|null $attempts
     */
    public function __construct(string $ip, AbstractCredentials $credentials, int $waitingTime = null, int $attempts = null)
    {
        $this->ip = $ip;
        $this->credentials = $credentials;
        $this->waitingTime = $waitingTime ?? self::WAITING_TIME;
        $this->attempts = $attempts ?? self::ATTEMPTS;
    }

    protected function rest(int $attempt) : void
    {
        sleep($attempt * $this->waitingTime);
    }

    public function backup()
    {
        // TODO: Implement backup() method.
    }
}