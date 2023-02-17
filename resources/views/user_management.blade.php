<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        ユーザー情報
    <form enctype="multipart/form-data" method="POST">
    <table border="1"  style="border-collapse: collapse">
        <thead>
            <tr>
                <th></th>
                <th>id</th>
                <th>姓</th>
                <th>名</th>
                <th>姓（カナ）</th>
                <th>名（カナ）</th>
                <th>メールアドレス（ビジdアカ）</th>
                <th>メールアドレス（Apple ID）</th>
                <th>電話番号</th>
                <th>所属組織</th>
                <th>役職</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($userlist as $user)
            <tr>
                <td><input type="checkbox" name="id[]" value={{$user->id}}></td>
                <td>{{$user->id}}</td>
                <td>{{$user->last_name}}</td>
                <td>{{$user->first_name}}</td>
                <td>{{$user->last_name_kana}}</td>
                <td>{{$user->first_name_kana}}</td>
                <td>{{$user->mail_address_apple}}</td>
                <td>{{$user->mail_address_apple}}</td>
                <td>{{$user->tel_number}}</td>
                <td>{{$user->belong_organization}}</td>
                <td>{{$user->position}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <br />
    ■登録
    {{ csrf_field() }}
    <input type="file" id="file" name="file" class="form-control">
        <input type="submit" value="登録" formaction="/user_regist" />
    <br />
    <br />
    ■更新　<a href="/user_export">CSVファイルのダウンロード</a>　
    <input type="file" id="file" name="file" class="form-control">
        <input type="submit" value="更新" formaction="/user_update" />
    <br />
    <br />
    ■削除　選択したレコードを削除する
    <input type="submit" value="削除" formaction="/user_delete" />

    </form>
    </body>
</html>
