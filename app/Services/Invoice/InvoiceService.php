<?php

    namespace App\Services\Invoice;

    use Illuminate\Support\Facades\Auth;
    use App\Models\Invoice;


    class InvoiceService{

        public function getAllInvoices(
            $paginatePluckOrGet     = null,
            $onlyActive             = null,
            array $relationships    = []
        ){
            $query = Invoice::query();

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
            return Invoice::query()->findOrFail($id);
        }

        public function storeInvoice(array $payload){
            $payload['user_id'] = Auth::id();
            return Invoice::query()->create($payload);
        }

        public function updateInvoice($id, array $payload){
            $invoice = $this->getById($id);
            return $invoice->update($payload);
        }

        public function destroyInvoice($id){
            $invoice = $this->getById($id);
            $invoice->delete();
        }
    }
?>
