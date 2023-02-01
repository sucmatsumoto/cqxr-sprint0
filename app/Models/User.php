<?php
/**
 * User
 */
namespace app\Models;

/**
 * User
 */
class User {

    /** @var int $id ユーザーID*/
    public $id = 0;

    /** @var string $userName ユーザー名*/
    public $userName = "";

    /** @var string $nickName ニックネーム*/
    public $nickName = "";

    /** @var float $userAuthority ユーザー権限区分(0：システム管理者 1：運営事務局  2：データ管理者 3：一般)*/
    public $userAuthority = USER_AUTHORITY::NUMBER_0;

    /** @var \DateTime $createdAt 登録日時*/
    public $createdAt;

    /** @var \DateTime $updatedAt 更新日時*/
    public $updatedAt;

}
