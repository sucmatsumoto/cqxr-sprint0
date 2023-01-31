<?php
/**
 * SpaceInfo200Response
 */
namespace app\Models;

/**
 * SpaceInfo200Response
 */
class SpaceInfo200Response {

    /** @var string $spaceTitle 空間タイトル*/
    public $spaceTitle = "";

    /** @var int $spaceLevel 空間レベル*/
    public $spaceLevel = 0;

    /** @var \app\Models\1[] $spacePatternList 空間パターン情報リスト*/
    public $spacePatternList = [];

    /** @var \app\Models\[] $transitionSpaceList */
    public $transitionSpaceList = [];

}
