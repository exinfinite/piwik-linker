<?php
namespace Exinfinite\PiwikLinker\Modules;
/**
 * 即時訪客資訊
 * Ref:https://developer.matomo.org/3.x/api-reference/reporting-api#Live
 */
class Live extends Module {
    public function getCounters($lastMinutes = "30", $segment = '', Array $showColumns = [], Array $hideColumns = []) {
        return $this->request(__FUNCTION__, [
            'lastMinutes' => $lastMinutes,
            'segment' => $segment,
            'showColumns' => $showColumns,
            'hideColumns' => $hideColumns,
        ]);
    }
    //最近一次個別訪客即時記錄
    public function getLastVisitsDetails($period = 'day', $date = 'today', $segment = '', $countVisitorsToFetch = '', $minTimestamp = '', $flat = '1', $doNotFetchActions = '', $enhanced = '') {
        return $this->request(__FUNCTION__, [
            'period' => $period,
            'date' => $date,
            'segment' => $segment,
            'countVisitorsToFetch' => $countVisitorsToFetch,
            'minTimestamp' => $minTimestamp,
            'flat' => $flat,
            'doNotFetchActions' => $doNotFetchActions,
            'enhanced' => $enhanced,
        ]);
    }
    //訪客訪問歷程資訊
    public function getVisitorProfile($visitorId, $segment = '', $limitVisits = '') {
        return $this->request(__FUNCTION__, [
            'visitorId' => $visitorId,
            'segment' => $segment,
            'limitVisits' => $limitVisits,
        ]);
    }
    //最新一位訪客的visitor id
    public function getMostRecentVisitorId($segment = '') {
        return $this->request(__FUNCTION__, [
            'segment' => $segment,
        ]);
    }
}