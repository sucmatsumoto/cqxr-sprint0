<?php
/**
 * TransitionInfo200ResponseTransitionListInner
 */
namespace app\Models;

/**
 * TransitionInfo200ResponseTransitionListInner
 * @description パラメータ情報
 */
class TransitionInfo200ResponseTransitionListInner {

    /** @var string $transitionId 遷移ID ランダムな6桁の数値の先頭に「TR-」を付与した一意のID*/
    public $transitionId = "";

    /** @var string $transitionDestinationId 遷移先ID ※遷移先を表す空間ID（会場エリア/ルーム）*/
    public $transitionDestinationId = "";

    /** @var int $spaceLevel 空間レベル*/
    public $spaceLevel = 0;

}
