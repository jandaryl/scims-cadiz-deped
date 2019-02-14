<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EmailNotifyController extends Controller
{
    public $mailchimp;
    public $listId = 'c56c673f2a';

    public function __construct(\Mailchimp $mailchimp)
    {
        $this->mailchimp = $mailchimp;
    }

    public function subscribe(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
        ]);

        try {
            $this->mailchimp
            ->lists
            ->subscribe(
                $this->listId,
                ['email' => $request->input('email')]
            );

            return redirect()->back()->with('success', 'Email Submitted successfully!');
        } catch (\Mailchimp_List_AlreadySubscribed $e) {
            return redirect()->back()->with('error', 'Email is Already Submitted!');
        } catch (\Mailchimp_Error $e) {
            return redirect()->back()->with('error', 'Error from MailChimp Services!');
        }
    }
}
