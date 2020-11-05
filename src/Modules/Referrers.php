<?php
namespace Exinfinite\PiwikLinker\Modules;
/**
 * 參照連結
 * Ref:https://developer.matomo.org/3.x/api-reference/reporting-api#Referrers
 */
class Referrers extends Module {
    //參照連結類型
    public function getReferrerType($period = 'day', $date = 'today', $segment = '', $typeReferrer = '', $idSubtable = '', $expanded = '') {
        return $this->request(__FUNCTION__, [
            'period' => $period,
            'date' => $date,
            'segment' => $segment,
            'typeReferrer' => $typeReferrer,
            'idSubtable' => $idSubtable,
            'expanded' => $expanded,
        ]);
    }
    //參照連結網站、搜尋關鍵字和廣告活動
    public function getAll($period = 'day', $date = 'today', $segment = '') {
        return $this->request(__FUNCTION__, [
            'period' => $period,
            'date' => $date,
            'segment' => $segment,
        ]);
    }
    //搜尋引擎和關鍵字
    public function getKeywords($period = 'day', $date = 'today', $segment = '', $expanded = '', $flat = '1') {
        return $this->request(__FUNCTION__, [
            'period' => $period,
            'date' => $date,
            'segment' => $segment,
            'expanded' => $expanded,
            'flat' => $flat,
        ]);
    }
    //由哪些搜尋引擎導入網站
    public function getSearchEngines($period = 'day', $date = 'today', $segment = '', $expanded = '', $flat = '1') {
        return $this->request(__FUNCTION__, [
            'period' => $period,
            'date' => $date,
            'segment' => $segment,
            'expanded' => $expanded,
            'flat' => $flat,
        ]);
    }
    //廣告活動
    public function getCampaigns($period = 'day', $date = 'today', $segment = '', $expanded = '') {
        return $this->request(__FUNCTION__, [
            'period' => $period,
            'date' => $date,
            'segment' => $segment,
            'expanded' => $expanded,
        ]);
    }
    //來源網站
    public function getWebsites($period = 'day', $date = 'today', $segment = '', $expanded = '', $flat = '1') {
        return $this->request(__FUNCTION__, [
            'period' => $period,
            'date' => $date,
            'segment' => $segment,
            'expanded' => $expanded,
            'flat' => $flat,
        ]);
    }
    //來源社群
    public function getSocials($period = 'day', $date = 'today', $segment = '', $expanded = '', $flat = '1') {
        return $this->request(__FUNCTION__, [
            'period' => $period,
            'date' => $date,
            'segment' => $segment,
            'expanded' => $expanded,
            'flat' => $flat,
        ]);
    }
    //不重複的廣告活動數量
    public function getNumberOfDistinctCampaigns($period = 'day', $date = 'today', $segment = '') {
        return $this->request(__FUNCTION__, [
            'period' => $period,
            'date' => $date,
            'segment' => $segment,
        ]);
    }
    //不重複的來源網站數量
    public function getNumberOfDistinctWebsitesUrls($period = 'day', $date = 'today', $segment = '') {
        return $this->request(__FUNCTION__, [
            'period' => $period,
            'date' => $date,
            'segment' => $segment,
        ]);
    }
}