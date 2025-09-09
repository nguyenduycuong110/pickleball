<?php

namespace App\Services;
use App\Services\Interfaces\LecturerServiceInterface;
use App\Repositories\Interfaces\LecturerRepositoryInterface as LecturerRepository;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

/**
 * Class UserService
 * @package App\Services
 */
class LecturerService extends BaseService implements LecturerServiceInterface 
{
    protected $accountRepository;

    public function __construct(
        LecturerRepository $lecturerRepository
    ){
        $this->lecturerRepository = $lecturerRepository;
    }

    public function paginate($request){
        $condition = [
            'keyword' => addslashes($request->input('keyword')),
            'publish' => $request->integer('publish')
        ];
        $perPage = $request->integer('perpage');
        $lecturers = $this->lecturerRepository->lecturerPagination(
            $this->paginateSelect(), 
            $condition, 
            $perPage, 
            ['path' => 'lecturer/index'], 
        );
        return $lecturers;
    }

    public function create($request){
        DB::beginTransaction();
        try{
            $payload = $request->except(['_token','send']);
            $lecturer = $this->lecturerRepository->create($payload);
            DB::commit();
            return true;
        }catch(\Exception $e ){
            DB::rollBack();
            // Log::error($e->getMessage());
            echo $e->getMessage();die();
            return false;
        }
    }

    public function update($id, $request){
        DB::beginTransaction();
        try{
            $payload = $request->except(['_token','send']);
            $lecturer = $this->lecturerRepository->update($id, $payload);
            DB::commit();
            return true;
        }catch(\Exception $e ){
            DB::rollBack();
            // Log::error($e->getMessage());
            echo $e->getMessage();die();
            return false;
        }
    }

    public function destroy($id){
        DB::beginTransaction();
        try{
            $lecturer = $this->lecturerRepository->delete($id);
            DB::commit();
            return true;
        }catch(\Exception $e ){
            DB::rollBack();
            // Log::error($e->getMessage());
            echo $e->getMessage();die();
            return false;
        }
    }

    private function paginateSelect(){
        return [
            'id',
            'name',
            'position',
            'description',
            'image',
            'publish'
        ];
    }
}
