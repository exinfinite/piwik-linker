<?php
namespace Exinfinite\PiwikLinker\Modules;
/**
 * 進站活動
 * Ref:https://developer.matomo.org/3.x/api-reference/reporting-api#Actions
 */
class Actions extends Module {
    //訪問總覽
    public function get($period = 'day', $date = 'today', $segment = '', $columns = '') {
        return $this->request(__FUNCTION__, [
            'period' => $period,
            'date' => $date,
            'segment' => $segment,
            'columns' => $columns,
        ]);
    }
    //頁面瀏覽資訊
    public function getPageUrls($period = 'day', $date = 'today', $flat = '1') {
        return $this->request(__FUNCTION__, [
            'period' => $period,
            'date' => $date,
            'flat' => $flat,
        ]);
    }
    //進站頁瀏覽資訊
    public function getEntryPageUrls($period = 'day', $date = 'today', $flat = '1') {
        return $this->request(__FUNCTION__, [
            'period' => $period,
            'date' => $date,
            'flat' => $flat,
        ]);
    }
    //離站網頁
    public function getExitPageUrls($period = 'day', $date = 'today', $segment = '', $expanded = '', $idSubtable = '', $flat = '1') {
        return $this->request(__FUNCTION__, [
            'period' => $period,
            'date' => $date,
            'segment' => $segment,
            'expanded' => $expanded,
            'idSubtable' => $idSubtable,
            'flat' => $flat,
        ]);
    }
    //網頁瀏覽資訊
    public function getPageUrl($pageUrl, $period = 'day', $date = 'today', $segment = '') {
        return $this->request(__FUNCTION__, [
            'pageUrl' => $pageUrl,
            'period' => $period,
            'date' => $date,
            'segment' => $segment,
        ]);
    }
    //頁面瀏覽資訊(依標題)
    public function getPageTitles($period = 'day', $date = 'today', $segment = '', $expanded = '', $idSubtable = '', $flat = '1') {
        return $this->request(__FUNCTION__, [
            'period' => $period,
            'date' => $date,
            'segment' => $segment,
            'expanded' => $expanded,
            'idSubtable' => $idSubtable,
            'flat' => $flat,
        ]);
    }
    //進站頁瀏覽資訊(依標題)
    public function getEntryPageTitles($period = 'day', $date = 'today', $segment = '', $expanded = '', $idSubtable = '', $flat = '1') {
        return $this->request(__FUNCTION__, [
            'period' => $period,
            'date' => $date,
            'segment' => $segment,
            'expanded' => $expanded,
            'idSubtable' => $idSubtable,
            'flat' => $flat,
        ]);
    }
    //離站頁瀏覽資訊(依標題)
    public function getExitPageTitles($period = 'day', $date = 'today', $segment = '', $expanded = '', $idSubtable = '', $flat = '1') {
        return $this->request(__FUNCTION__, [
            'period' => $period,
            'date' => $date,
            'segment' => $segment,
            'expanded' => $expanded,
            'idSubtable' => $idSubtable,
            'flat' => $flat,
        ]);
    }
}