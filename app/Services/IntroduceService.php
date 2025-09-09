<?php

namespace App\Services;

use App\Services\Interfaces\IntroduceServiceInterface;
use App\Repositories\Interfaces\IntroduceRepositoryInterface as IntroduceRepository;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;

/**
 * Class IntroduceService
 * @package App\Services
 */
class IntroduceService implements IntroduceServiceInterface
{
    protected $introduceRepository;
    

    public function __construct(
        IntroduceRepository $introduceRepository
    ){
        $this->introduceRepository = $introduceRepository;
    }

    
    public function save($request, $languageId){
        DB::beginTransaction();
        try{

            $config = $request->input('config');
            $payload = [];
            if(count($config)){
                foreach($config as $key => $val){
                    $payload = [
                        'keyword' => $key,
                        'content' => $val,
                        'language_id' => $languageId,
                        'user_id' => Auth::id(),
                    ];
                    $condition = ['keyword' => $key, 'language_id' => $languageId];
                    $this->introduceRepository->updateOrInsert($payload, $condition);
                }
            }
            
           
            DB::commit();
            return true;
        }catch(\Exception $e ){
            DB::rollBack();
            // Log::error($e->getMessage());
            echo $e->getMessage();die();
            return false;
        }
    }

    

}
