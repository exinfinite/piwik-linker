<?php
namespace Exinfinite\PiwikLinker;

class Config {
    private $paUrl;
    private $idSite;
    private $token;
    private $timeout;
    /**
     *
     * @param string $paUrl
     * @param integer $idSite
     * @param string $token
     * @param integer $timeout seconds, 0:no limit
     */
    public function __construct($paUrl, $idSite, $token, $timeout = 30) {
        $this->paUrl = $paUrl;
        $this->idSite = (int) $idSite;
        $this->token = $token;
        $this->timeout = (int) $timeout;
    }
    public function getIdSite() {
        return $this->idSite;
    }
    public function getToken() {
        return $this->token;
    }
    public function getPaUrl() {
        return $this->paUrl;
    }
    public function getTimeout() {
        return $this->timeout;
    }
}