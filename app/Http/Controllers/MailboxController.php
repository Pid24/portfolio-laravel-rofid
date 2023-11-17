<?php

namespace App\Http\Controllers;

use App\Models\Mailbox;
use Illuminate\Http\Request;

class MailboxController extends Controller
{
    public function index()
    {
        $mails =Mailbox::all();
        return view('admin.mail.main', compact('mails'));
    }

    public function store(Request $request)
    {
        request()->validate([
            "titre" => ["required"],
            "email" => ["required"],
            "adresse" => ["required"],
            "description" => ["required"],
        ]);

        $mail = new Mailbox();
        $mail->titre = $request->titre;
        $mail->email = $request->email;
        $mail->adresse = $request->adresse;
        $mail->description = $request->description;
        $mail->save();
        return redirect()->back()->with('success','message bien envoyé');
    }

    public function destroy(Mailbox $mailbox)
    {
        $mailbox->delete();
        return redirect()->back()->with('warning', "mail delete");
    }
}
