<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use Illuminate\Support\Facades\Auth;

class ContactController extends Controller
{
    public function index(Request $request)
    {
        $contact = $request->session()->get('contact', ['title' => old('title'), 'comment' => old('comment')]);
        return view('contact.contact', compact('contact'));
    }

    public function confirmation(ContactRequest $request)
    {
        $contact = $request->only(['title', 'comment']);
        $request->session()->put('contact', $contact);
        return view('contact.confirmation', compact('contact'));
    }

    public function thanks(Request $request)
    {
        $loginUser = Auth::user();
        $contact = $request->only(['title', 'comment']);
        $contact['user_id'] = $loginUser->id;
        Contact::create($contact);
        $request->session()->forget('contact');
        return view('contact.thanks');
    }
}
