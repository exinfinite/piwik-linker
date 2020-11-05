<?php
namespace Exinfinite\PiwikLinker;

class Config {
    private $paUrl;
    private $idSite;
    private $token;
    public function __construct($paUrl, $idSite, $token) {
        $this->paUrl = $paUrl;
        $this->idSite = $idSite;
        $this->token = $token;
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
}