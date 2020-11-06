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
        curl_setopt_array($ch, [
            CURLOPT_URL => "{$this->cfg->getPaUrl()}?{$query}",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_TIMEOUT => $this->cfg->getTimeout(),
        ]);
        try {
            $result = curl_exec($ch);
            if (curl_errno($ch)) {
                throw new \Exception(curl_error($ch));
            }
            curl_close($ch);
            return $result;
        } catch (\Exception $e) {
            curl_close($ch);
            return $this->error($e->getMessage());
        }
    }
    protected function error($msg) {
        return json_encode([]);
    }
}