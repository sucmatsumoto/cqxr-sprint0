<?php
/**
 * GetAssetbundleRequestParameterListInner
 */
namespace app\Models;

/**
 * GetAssetbundleRequestParameterListInner
 * @description パラメータ情報
 */
class GetAssetbundleRequestParameterListInner {

    /** @var string $spaceId ランダムな6桁の数値の先頭に「SS-」を付与した一意の会場エリアIDまたは「RO-」を付与した一意のルームID*/
    public $spaceId = "";

    /** @var string $spacePatternId ランダムな6桁の数値の先頭に「SP-」を付与した一意の会場エリアパターンIDまたは「RP-」を付与した一意のルームパターンID*/
    public $spacePatternId = "";

    /** @var int $spaceLevel 空間の階層*/
    public $spaceLevel = 0;

    /** @var int $toolType ツール種別(1：Android 2：iOS 4：Windows 5：Mac)*/
    public $toolType = 0;

}
