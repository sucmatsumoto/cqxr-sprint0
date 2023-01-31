<?php
/**
 * CheckUpdateRequest
 */
namespace app\Models;

/**
 * CheckUpdateRequest
 */
class CheckUpdateRequest {

    /** @var int $toolType ローカルのツール種別(0：オーサリングツール 1：製作者向けアプリケーション(Android) 2：製作者向けアプリケーション(iOS) 3：製作者向けアプリケーション(MetaQuest2) 4：製作者向けアプリケーション(Windows) 5：製作者向けアプリケーション(Mac))*/
    public $toolType = TOOL_TYPE::NUMBER_0;

    /** @var string $localAppVer ローカルアプリバージョン*/
    public $localAppVer = "";

}
