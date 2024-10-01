<?php
    namespace App\Services\Rate;

    use App\Models\Rate;


    class RateService{

        public function getAllRate(
            $paginatePluckOrGet     = null,
            $onlyActive             = null,
            array $relationships    = []
        ){
            $query = Rate::query();

            !empty($relationships) ? $query->with($relationships) : $query->with([]);

            if(!is_null($onlyActive)){
                $query->where('status', $onlyActive);
            }
            if(is_null($paginatePluckOrGet)){
                return $query->pluck('id','weight');
            }
            return $paginatePluckOrGet ? $query->paginate(20) : $query->get();
        }


        public function getById($id){
            return Rate::query()->findOrFail($id);
        }

        public function storeRate(array $payload){

            return Rate::query()->create($payload);
        }




        public function updateRate($id, array $payload){
            $rate = $this->getById($id);
            return $rate->update($payload);
        }



        public function destroyRate($id){
            $rate = $this->getById($id);
            $rate->delete();
        }


    }
?>
