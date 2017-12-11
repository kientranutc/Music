<?php
namespace App\Repositories\GenerateKey;


interface GenerateKeyRepositoryInterface
{
    public function paginate($limit);

    public function findByAttrbute($att, $name);

    public function generateApiToken();

}


?>