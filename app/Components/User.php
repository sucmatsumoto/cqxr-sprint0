<?php
namespace app\Components;
use App\Models\User as um;
use Illuminate\Support\Facades\Log;

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
}
