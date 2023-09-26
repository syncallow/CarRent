<?php

namespace App\Http\Controllers\Contact;

use App\Http\Controllers\Controller;
use App\Http\Requests\Contact\SendRequest;
use App\Models\ContactRequest;
use App\Notifications\SendContactForm;
use Illuminate\Support\Facades\Notification;
use NotificationChannels\Telegram\TelegramMessage;


class SendContactFormController extends Controller
{
    public function __invoke(SendRequest $request)
    {
        $data = $request->validated();

        if(!$data['message']){
            $data['message'] = 'No message';
        }
        $contactRequest = ContactRequest::create($data);
        $contactRequest->notify(new SendContactForm($contactRequest));

        return back()->with('status', 'Information was sent successfully!');
    }
}
