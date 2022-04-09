<?php


namespace App\Repository\Modules;

use App\Interface\Modules\ContactRepositoryInterface;
use App\Models\Contact;

class ContactRepository implements ContactRepositoryInterface
{

    public function all()
    {
        $contact =  contact::paginate(5);
        return $contact;
    }
    public function create($input)
    {
        return contact::create($input);
    }
    public function find($contact)
    {
        return contact::findorfail($contact);
    }
    public function update($request, $contact)
    {
        $input = $request->all();
        $contacts = contact::find($contact);

        return $contacts->fill($input)->save();
    }
    public function delete($id)
    {

        return contact::findorfail($id)->delete();
    }

    public function updateApi($request, $contact)
    {
        $contacts = Contact::find($request);
        $updated = $contacts->update($contact);
    }
}