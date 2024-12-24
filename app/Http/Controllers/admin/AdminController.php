<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;

class AdminController extends Controller
{
    public function index()
    {
        return view('pages.dashboard');
    }
    public function contact_list() {
        $contacts = Contact::getAll();
        return view('pages.admin.contact.user-management',compact("contacts"));
    }
    public function edit($id)
    {   
       
        $contactid = base64_decode($id);
        $contact = Contact::find($contactid);
        return view('pages.admin.contact.add-edit', compact("contact"));
    }
    public function save(Request $request)
    {
        if($request->input('id') != null) {
            $contact = Contact::find(base64_decode($request->input('id')));
        } 
        $contact->status = $request->input('status');
        $contact->save();
        return redirect()->route('user-list')->with('success', 'Contact updated successfully');
    }
    public function destroy($id)
    {
        $contactid = base64_decode($id);
        $contact = Contact::find($contactid);
        $contact->delete();
        return redirect()->route('user-list')->with('success', 'User deleted successfully');
    }
    public function filter(Request $request){
        
        //Get query parameters for filtering
        $search = $request->get('search');  // Search term
        $fields = $request->get('fields', []); // Fields to search (array)
        $limit = $request->get('limit', 10);  // Number of items per page

        // Start building the query
        $query = Contact::query();

        // Apply search across specified fields
        if ($search && is_array($fields) && count($fields) > 0) {
            $query->where(function ($q) use ($search, $fields) {
                foreach ($fields as $field) {
                    $q->orWhere($field, 'LIKE', "%$search%");
                }
            });
        }

        // Paginate the filtered results
        $limit = $request->get('limit', 10); // Default to 10 items per page
        $page = $request->get('page', 1);   // Default to page 1

        // Paginate the results
        $records = $query->paginate($limit, ['*'], 'page', $page);
        // $records = $query->paginate($limit);

        // Return JSON response
        return response()->json([
            'data' => $records->items(),
            'current_page' => $records->currentPage(),
            'last_page' => $records->lastPage(),
            'total' => $records->total(),
            'per_page' => $records->perPage(),
        ]);
        
    
    }
}
