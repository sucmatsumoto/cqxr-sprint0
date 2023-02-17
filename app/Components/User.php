<?php
namespace app\Components;
use App\Models\User as um;
use Illuminate\Support\Facades\Log;

use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class User
{ 

    // public function __construct(private \App\userInterface $umm){

    // }

    public function getUserData(int $userId): array
    {
        $user = um::find($userId);
        if($user instanceof um){
            return $user->toArray();
        }
        return [];
    }

    public function getUserlistData(): array
    {
        $user = um::all();
        Log::info("test !!!!");
        $r = array();
        $r['floor'] = $user;
        return $r;
    }
    public function csvImport(Request $request)
    {
        Log::info("!!!! call csvImport");
        // ファイルを保存
        if($request->hasFile('usersCsv')) {
            if($request->usersCsv->getClientOriginalExtension() !== "csv") {
                throw new Exception("拡張子が不正です。");
            }
            $request->usersCsv->storeAs('public/', "users.csv");
        } else {
            throw new Exception("CSVファイルの取得に失敗しました。");
        }

    }
}
