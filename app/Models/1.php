<?php
/**
 * 1
 */
namespace app\Models;

/**
 * 1
 * @description 空間パターン情報
 */
class 1 {

    /** @var string $spacePatternId */
    public $spacePatternId = "";

    /** @var string $spacePatternTitle */
    public $spacePatternTitle = "";

    /** @var int $spacePermissionClassification 権限区分 (0:なし 1:あり)*/
    public $spacePermissionClassification = SPACE_PERMISSION_CLASSIFICATION::NUMBER_0;

    /** @var float $spaceContentsVersion コンテンツのバージョン*/
    public $spaceContentsVersion = "";

    /** @var bool $cameraPermissionFlag ユーザのスクリーンショット取得可否の設定(false：OFF true：ON)*/
    public $cameraPermissionFlag = false;

    /** @var int $contentsSize コンテンツサイズ*/
    public $contentsSize = 0;

}
