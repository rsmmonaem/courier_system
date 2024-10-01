<?php
    namespace App\Servicess\CustomerSupport;

use App\Models\User;
use App\Models\CustomerSupport;
use Illuminate\Support\Facades\Auth;


    class CustomerSupportService {
        public function getAllCustomerSupports
        (
            $paginateOrNOt = null,
            $relations = []
        ){
            $query = CustomerSupport::query();

            !empty($relations) ? $query->with($relations) : $query->with([]);

            return $paginateOrNOt ? $query->paginate(20) : $query->get();
        }

        public function getAUser(){
            $userId =  Auth::id();
            return User::query()->findOrFail($userId);
        }

        public function storeCustomerService(array $payload){
            $payload['user_id'] = Auth::id();
            $payload['status'] = "open";
            return CustomerSupport::create($payload);
        }


    }





?>
