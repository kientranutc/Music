<?php
namespace App\Repositories\GenerateKey;
use App\Models\GenerateKey;

class GenerateKeyRepository implements GenerateKeyRepositoryInterface
{
    public function paginate($limit)
    {
        return GenerateKey::paginate($limit);
    }

    public function findByAttrbute($att, $name)
    {
        return GenerateKey::where($att, $name)->first();
    }

    public function generateApiToken()
    {
        $key = new GenerateKey();
        $apiToken = str_random(32);
        if (GenerateKey::where('api_token', '=', $apiToken)->exists()){
            $apiToken = str_random(32);
        }
        $key->api_token = $apiToken;
        $key->save();

    }

}
?>