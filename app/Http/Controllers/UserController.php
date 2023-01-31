<?php

/**
 * サービスサーバ
 * アプリ向けインタフェース  ・アップデート情報  ・コンテンツ情報  ・ユーザ情報  コミュニケーション基盤向けインタフェース  ・ユーザ情報
 * PHP version 7.2.5
 *
 * The version of the OpenAPI document: 1.0.0
 * 
 *
 * NOTE: This class is auto generated by OpenAPI-Generator
 * https://openapi-generator.tech
 * Do not edit the class manually.
 *
 * Source files are located at:
 *
 * > https://github.com/OpenAPITools/openapi-generator/blob/master/modules/openapi-generator/src/main/resources/php-laravel/
 */


namespace App\Http\Controllers;

use Illuminate\Support\Facades\Request;

class UserController extends Controller
{
    /**
     * Constructor
     */
    public function __construct()
    {
    }

    /**
     * Operation photonAuth
     *
     * PhotonFusionカスタム認証.
     *
     *
     * @return Http response
     */
    public function photonAuth()
    {
        $input = Request::all();

        //path params validation


        //not path params validation
        if (!isset($input['authorization'])) {
            throw new \InvalidArgumentException('Missing the required parameter $authorization when calling photonAuth');
        }
        if (strlen($input['authorization']) > 40) {
            throw new \InvalidArgumentException('invalid length for $authorization when calling UserController.photonAuth, must be smaller than or equal to 40.');
        }
        if (strlen($input['authorization']) < 40) {
            throw new \InvalidArgumentException('invalid length for $authorization when calling UserController.photonAuth, must be bigger than or equal to 40.');
        }
        $authorization = $input['authorization'];


        return response('How about implementing photonAuth as a get method ?');
    }
    /**
     * Operation authenticationCallback
     *
     * 認証結果コールバック.
     *
     *
     * @return Http response
     */
    public function authenticationCallback()
    {
        $input = Request::all();

        //path params validation


        //not path params validation
        if (!isset($input['state'])) {
            throw new \InvalidArgumentException('Missing the required parameter $state when calling authenticationCallback');
        }
        $state = $input['state'];

        if (!isset($input['code'])) {
            throw new \InvalidArgumentException('Missing the required parameter $code when calling authenticationCallback');
        }
        $code = $input['code'];


        return response('How about implementing authenticationCallback as a get method ?');
    }
    /**
     * Operation authenticationUrl
     *
     * 認証URL取得.
     *
     *
     * @return Http response
     */
    public function authenticationUrl()
    {
        $input = Request::all();

        //path params validation


        //not path params validation
        if (!isset($input['connect'])) {
            throw new \InvalidArgumentException('Missing the required parameter $connect when calling authenticationUrl');
        }
        if (strlen($input['connect']) > 255) {
            throw new \InvalidArgumentException('invalid length for $connect when calling UserController.authenticationUrl, must be smaller than or equal to 255.');
        }
        if (strlen($input['connect']) < 1) {
            throw new \InvalidArgumentException('invalid length for $connect when calling UserController.authenticationUrl, must be bigger than or equal to 1.');
        }
        $connect = $input['connect'];


        return response('How about implementing authenticationUrl as a get method ?');
    }
    /**
     * Operation consentState
     *
     * 同意状態登録.
     *
     *
     * @return Http response
     */
    public function consentState()
    {
        $input = Request::all();

        //path params validation


        //not path params validation
        if (!isset($input['authorization'])) {
            throw new \InvalidArgumentException('Missing the required parameter $authorization when calling consentState');
        }
        if (strlen($input['authorization']) > 40) {
            throw new \InvalidArgumentException('invalid length for $authorization when calling UserController.consentState, must be smaller than or equal to 40.');
        }
        if (strlen($input['authorization']) < 40) {
            throw new \InvalidArgumentException('invalid length for $authorization when calling UserController.consentState, must be bigger than or equal to 40.');
        }
        $authorization = $input['authorization'];

        if (!isset($input['contentType'])) {
            throw new \InvalidArgumentException('Missing the required parameter $contentType when calling consentState');
        }
        $contentType = $input['contentType'];

        $ = $input[''];


        return response('How about implementing consentState as a post method ?');
    }
    /**
     * Operation deletion
     *
     * ログイン情報削除.
     *
     *
     * @return Http response
     */
    public function deletion()
    {
        $input = Request::all();

        //path params validation


        //not path params validation
        if (!isset($input['authorization'])) {
            throw new \InvalidArgumentException('Missing the required parameter $authorization when calling deletion');
        }
        if (strlen($input['authorization']) > 40) {
            throw new \InvalidArgumentException('invalid length for $authorization when calling UserController.deletion, must be smaller than or equal to 40.');
        }
        if (strlen($input['authorization']) < 40) {
            throw new \InvalidArgumentException('invalid length for $authorization when calling UserController.deletion, must be bigger than or equal to 40.');
        }
        $authorization = $input['authorization'];

        if (!isset($input['contentType'])) {
            throw new \InvalidArgumentException('Missing the required parameter $contentType when calling deletion');
        }
        $contentType = $input['contentType'];


        return response('How about implementing deletion as a delete method ?');
    }
    /**
     * Operation state
     *
     * ログイン状態取得.
     *
     *
     * @return Http response
     */
    public function state()
    {
        $input = Request::all();

        //path params validation


        //not path params validation
        if (!isset($input['authorization'])) {
            throw new \InvalidArgumentException('Missing the required parameter $authorization when calling state');
        }
        if (strlen($input['authorization']) > 40) {
            throw new \InvalidArgumentException('invalid length for $authorization when calling UserController.state, must be smaller than or equal to 40.');
        }
        if (strlen($input['authorization']) < 40) {
            throw new \InvalidArgumentException('invalid length for $authorization when calling UserController.state, must be bigger than or equal to 40.');
        }
        $authorization = $input['authorization'];

        if (!isset($input['contentType'])) {
            throw new \InvalidArgumentException('Missing the required parameter $contentType when calling state');
        }
        $contentType = $input['contentType'];


        return response('How about implementing state as a get method ?');
    }
    /**
     * Operation telexusAccesstoken
     *
     * TeleXusアクセストークン取得.
     *
     *
     * @return Http response
     */
    public function telexusAccesstoken()
    {
        $input = Request::all();

        //path params validation


        //not path params validation
        if (!isset($input['telexusUserId'])) {
            throw new \InvalidArgumentException('Missing the required parameter $telexusUserId when calling telexusAccesstoken');
        }
        if (strlen($input['telexusUserId']) > 32) {
            throw new \InvalidArgumentException('invalid length for $telexusUserId when calling UserController.telexusAccesstoken, must be smaller than or equal to 32.');
        }
        if (strlen($input['telexusUserId']) < 1) {
            throw new \InvalidArgumentException('invalid length for $telexusUserId when calling UserController.telexusAccesstoken, must be bigger than or equal to 1.');
        }
        $telexusUserId = $input['telexusUserId'];

        if (!isset($input['telexusRoomId'])) {
            throw new \InvalidArgumentException('Missing the required parameter $telexusRoomId when calling telexusAccesstoken');
        }
        if (strlen($input['telexusRoomId']) > 9) {
            throw new \InvalidArgumentException('invalid length for $telexusRoomId when calling UserController.telexusAccesstoken, must be smaller than or equal to 9.');
        }
        if (strlen($input['telexusRoomId']) < 9) {
            throw new \InvalidArgumentException('invalid length for $telexusRoomId when calling UserController.telexusAccesstoken, must be bigger than or equal to 9.');
        }
        $telexusRoomId = $input['telexusRoomId'];

        if (!isset($input['authorization'])) {
            throw new \InvalidArgumentException('Missing the required parameter $authorization when calling telexusAccesstoken');
        }
        if (strlen($input['authorization']) > 40) {
            throw new \InvalidArgumentException('invalid length for $authorization when calling UserController.telexusAccesstoken, must be smaller than or equal to 40.');
        }
        if (strlen($input['authorization']) < 40) {
            throw new \InvalidArgumentException('invalid length for $authorization when calling UserController.telexusAccesstoken, must be bigger than or equal to 40.');
        }
        $authorization = $input['authorization'];

        if (!isset($input['contentType'])) {
            throw new \InvalidArgumentException('Missing the required parameter $contentType when calling telexusAccesstoken');
        }
        $contentType = $input['contentType'];


        return response('How about implementing telexusAccesstoken as a get method ?');
    }
    /**
     * Operation userInfo
     *
     * ユーザ情報取得.
     *
     *
     * @return Http response
     */
    public function userInfo()
    {
        $input = Request::all();

        //path params validation


        //not path params validation
        if (!isset($input['authorization'])) {
            throw new \InvalidArgumentException('Missing the required parameter $authorization when calling userInfo');
        }
        if (strlen($input['authorization']) > 40) {
            throw new \InvalidArgumentException('invalid length for $authorization when calling UserController.userInfo, must be smaller than or equal to 40.');
        }
        if (strlen($input['authorization']) < 40) {
            throw new \InvalidArgumentException('invalid length for $authorization when calling UserController.userInfo, must be bigger than or equal to 40.');
        }
        $authorization = $input['authorization'];

        if (!isset($input['contentType'])) {
            throw new \InvalidArgumentException('Missing the required parameter $contentType when calling userInfo');
        }
        $contentType = $input['contentType'];


        return response('How about implementing userInfo as a get method ?');
    }
}