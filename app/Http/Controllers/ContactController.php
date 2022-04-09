<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Interface\Modules\ContactRepositoryInterface;

class ContactController extends Controller
{

    private ContactRepositoryInterface $contactRepoInterface;

    public function __construct(ContactRepositoryInterface $contactRepoInterface)
    {

        $this->middleware('auth');
        $this->contactRepoInterface = $contactRepoInterface;
    }

    public function index()
    {

        return view('contacts.index', ['contact' => $this->contactRepoInterface->all()]);
    }


    public function create()
    {

        return view('contacts.create');
    }

    public function store(Request $request)
    {
        $input = $request->validate([
            'id' => "",
            'name' => "",
            'email' => "",
            'phone' => ""
        ]);
        return redirect()->route('contacts.index', [$this->contactRepoInterface->create($input)]);
    }


    public function show(Contact $contact)
    {
        return view('contacts.show', ['contact' => $this->contactRepoInterface->find($contact->id)]);
    }


    public function edit(Contact $contact)
    {
        // echo "edit";

        return view('contacts.edit', compact('contact'));
    }

    public function update(Request $request, Contact $contact)
    {

        $input = $request->validate([
            'id' => "",
            'name' => "",
            'email' => "",
            'phone' => ""
        ]);

        return redirect()->route('contacts.index', ['contact' => $this->contactRepoInterface->update($request, $contact->id)]);
    }


    public function destroy(Contact $contact)
    {
        $this->contactRepoInterface->delete($contact->id);
        return redirect()->route('contacts.index');
    }

    //extra function

    public function testing()
    {
        return view('contacts.testing');
        // echo "This is testing route";
    }
}