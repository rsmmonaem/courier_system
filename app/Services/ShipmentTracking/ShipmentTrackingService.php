<?php

    namespace App\Services\Shipment;
    use App\Models\ShipmentTracking;

    class ShipmentTrackingService{

        public function getAllShipmentTrackings(
            $paginatePluckOrGet     = null,
            $onlyActive             = null,
            array $relationships    = []
        ){
            $query = ShipmentTracking::query();

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
            return ShipmentTracking::query()->findOrFail($id);
        }


        public function storeShipmentTracking(array $payload){
            return ShipmentTracking::query()->create($payload);
        }

        public function updateShipmentTracking($id, array $payload){
            $rate = $this->getById($id);
            return $rate->update($payload);
        }

        public function destroyShipmentTracking($id){
            $rate = $this->getById($id);
            $rate->delete();
        }
    }
?>
