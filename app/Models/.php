<?php
/**
 * 
 */
namespace app\Models;

/**
 * 
 * @description 利用規約/プライバシーポリシー同意情報
 */
class  {

    /** @var int $termsOfServiceType 利用規約種別(1：クライアントアプリの利用規約 2：クライアントアプリのデータ利用規約 3：CMSサイトの利用規約)*/
    public $termsOfServiceType = 0;

    /** @var string $version バージョン*/
    public $version = "";

    /** @var int $languageType 約80か国語の識別子 ※設定内容について顧客確認事項*/
    public $languageType = 0;

}
