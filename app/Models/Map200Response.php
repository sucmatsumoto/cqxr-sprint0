<?php
/**
 * Map200Response
 */
namespace app\Models;

/**
 * Map200Response
 */
class Map200Response {

    /** @var float $versionInfo 指定空間IDに紐づいているコンテンツのバージョン情報*/
    public $versionInfo = "";

    /** @var \app\Models\Inner[] $spaceList 指定空間IDと紐づいている空間のリスト*/
    public $spaceList = [];

}
