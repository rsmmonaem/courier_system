<?php

    namespace App\Http\Controllers;

    use App\Services\LiveChat\LiveChatService;

    use App\Models\LiveChat;
    use Illuminate\Http\Request;
    use App\Http\Requests\StoreLiveChatFormRequest;
    // use App\Servicess\LiveChat\LiveChatService;
    class LiveChatController extends Controller
    {
        public function index()
        {
            $data['messages'] = (new LiveChatService())->getAllMessages(true, ['user']);
            return view('live-chat.index')->with($data);
        }


    public function create()
    {
        //
    }


    public function store(StoreLiveChatFormRequest $request, LiveChatService $liveChatSupportService)
    {
        //
    }


    public function show(LiveChat $liveChat)
    {
        //
    }


    public function edit(LiveChat $liveChat)
    {
        //
    }


    public function update(StoreLiveChatFormRequest $request, LiveChat $liveChat)
    {
        //
    }


    public function destroy(LiveChat $liveChat)
    {
        //
    }
}
