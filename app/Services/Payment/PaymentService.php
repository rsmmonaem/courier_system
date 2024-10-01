<?php

    namespace App\Services\Payment;

    use Illuminate\Support\Facades\Auth;
    use App\Models\Payment;


    class PaymentService{

        public function getAllPayments(
            $paginatePluckOrGet     = null,
            $onlyActive             = null,
            array $relationships    = []
        ){
            $query = Payment::query();

            !empty($relationships) ? $query->with($relationships) : $query->with([]);

            if(!is_null($onlyActive)){
                $query->where('status', $onlyActive);
            }
            if(is_null($paginatePluckOrGet)){
                return $query->pluck('id','price');
            }
            return $paginatePluckOrGet ? $query->paginate(20) : $query->get();
        }

        public function getById($id){
            return Payment::query()->findOrFail($id);
        }
        
        public function storePayment(array $payload){
            $payload['user_id'] = Auth::id();
            return Payment::query()->create($payload);
        }

        public function updatePayment($id, array $payload){
            $payment = $this->getById($id);
            return $payment->update($payload);
        }

        public function destroyPayment($id){
            $payment = $this->getById($id);
            $payment->delete();
        }
    }
?>
