<?php
namespace Exinfinite\PiwikLinker\Modules;

abstract class Module {
    protected $cfg;
    protected $api;
    public function __construct(\Exinfinite\PiwikLinker\Config $cfg) {
        $this->cfg = $cfg;
        $this->api = (new \ReflectionClass($this))->getShortName();
    }
    protected function getApi($method) {
        return "{$this->api}.{$method}";
    }
    protected function request($method, array $params = []) {
        try {
            $ch = curl_init();
            $query = http_build_query(
                array_merge([
                    'method' => $this->getApi($method),
                    'module' => 'API',
                    'idSite' => $this->cfg->getIdSite(),
                    'format' => 'JSON',
                    'token_auth' => $this->cfg->getToken(),
                ], $params)
            );
            curl_setopt($ch, CURLOPT_URL, "{$this->cfg->getPaUrl()}?{$query}");
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $result = curl_exec($ch);
            curl_close($ch);
            return $result;
        } catch (\Exception $e) {
            return "[]";
        }
    }
}