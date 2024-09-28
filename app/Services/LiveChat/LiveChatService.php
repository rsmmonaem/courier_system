<?php
 namespace App\Servicess\LiveChat;

 class LiveChat{
    public function getAllMessages(

        $paginateOrPluck = null,
        array $relationships = []
    ){

        $query = LiveChat::query();

        !empty($relationships) ? $query->with($relationships) : $query->with([]);

        if(is_null($paginateOrPluck)){
            return $query->pluck('id', 'message');
        }

        return $paginateOrPluck ? $query->paginate(20) : $query->get();
    }
 }
?>
