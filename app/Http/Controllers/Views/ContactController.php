<?php

namespace App\Http\Controllers\Views;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactFormRequest;
use App\Models\ContactFormRecipient;
use App\Notifications\ContactFormMessage;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class ContactController extends Controller
{
    public function getView(Request $request)
    {
        return view('pages.contact');
    }

    public function contactForm(ContactFormRequest $request, ContactFormRecipient $recipient): RedirectResponse
    {
        $recipient->notify(new ContactFormMessage($request));

        return redirect()->back()->with('message', __('Thank for your message! I will get back to you soon :)'));
    }

}
