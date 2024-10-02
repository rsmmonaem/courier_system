<?php
    namespace App\Services\Address;

use App\Models\Address;
use Illuminate\Support\Facades\Auth;

    class AddressService{


        public function getAllAddress(
            $paginatePluckOrGet = null,
            $onlyActive = null,
            array $relationships = []
        ){
            $query = Address::query();

            !empty($relationships) ? $query->with($relationships) : $query->with([]);

            if(!is_null($onlyActive)){
                $query->where('status', $onlyActive);
            }
            if(is_null($paginatePluckOrGet)){
                return $query->pluck('id','city');
            }
            return $paginatePluckOrGet ? $query->paginate(20) : $query->get();
        }


        public function getById($id){
            return Address::query()->findOrFail($id);
        }

        public function storeAddress(array $payload){

            $payload['user_id'] = Auth::id();
            return Address::query()->create($payload);
        }




        public function updateAddress($id, array $payload){
            $address = $this->getById($id);
            return $address->update($payload);
        }



        public function destroyAddress($id){
            $address = $this->getById($id);
            $address->delete();
        }

        public function getdata(){
           return Address::select('id','street','zip_code')->get();
        }
    }
?>
