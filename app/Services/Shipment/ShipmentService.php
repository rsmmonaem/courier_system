<?php

    namespace App\Services\Shipment;

    use Illuminate\Support\Facades\Auth;
    use App\Models\Shipment;


    class ShipmentService{

        public function getAllShipments(
            $paginatePluckOrGet     = null,
            $onlyActive             = null,
            array $relationships    = []
        ){
            $query = Shipment::query();

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
            return Shipment::query()->findOrFail($id);
        }

        public function generateTrackingNumber()
        {
            $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
            $trackingNumber = '';

            for ($i = 0; $i < 8; $i++) {
                $trackingNumber .= $characters[rand(0, strlen($characters) - 1)];
            }
            return $trackingNumber;
        }

        public function storeShipment(array $payload){
            $payload['tracking_number'] = $this->generateTrackingNumber();
            $payload['user_id'] = Auth::id();
            $payload['status']  = "active";

           // dd($payload);
            return Shipment::query()->create($payload);
        }

        public function updateShipment($id, array $payload){
            $shipment = $this->getById($id);
          //  dd($shipment);
            return $shipment->update($payload);
        }

        public function destroyShipment($id){
            $shipment = $this->getById($id);
            $shipment->delete();
        }
    }
?>
