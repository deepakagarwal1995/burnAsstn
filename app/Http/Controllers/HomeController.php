<?php

namespace App\Http\Controllers;

use App\Models\Committee;
use App\Models\Gallery;
use App\Models\Events;
use App\Models\Reports;
use App\Models\Resources;
use App\Models\Enquiry;
use App\Models\Registration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use DataTables;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $mem = Registration::count();
        $ress = Resources::count();
        $rep = Reports::count();
        $ev = Events::count();
        $gal = Gallery::count();
        $sm = Committee::count();
        return view('admin.home', compact('mem','ress', 'rep', 'ev', 'gal', 'sm'));
    }
    public function contact()
    {
        $keyword = request()->keyword;
        $rows = request()->rows ?? 25;

        if ($rows == 'all') {
            $rows = Enquiry::where('type', 'Contact Enquiry')->count();
        }

        // Get the table columns
        $allColumns = Schema::getColumnListing((new Enquiry())->getTable());

        $items = Enquiry::select('*')->where('type', 'Contact Enquiry')->when(isset($keyword), function ($query) use ($keyword, $allColumns) {
            $query->where(function ($query) use ($keyword, $allColumns) {
                // Dynamically construct the search query
                foreach ($allColumns as $column) {
                    $query->orWhere(
                        $column,
                        'LIKE',
                        "%$keyword%"
                    );
                }
            });
        })
            ->latest()
            ->paginate($rows);
        $title = 'View Contact Enquiry';
        return view('admin.enquiry.contact', compact('items', 'title'));
    }
    public function resource()
    {
        $keyword = request()->keyword;
        $rows = request()->rows ?? 25;

        if ($rows == 'all') {
            $rows = Enquiry::where('type', 'Resourse View')->count();
        }

        // Get the table columns
        $allColumns = Schema::getColumnListing((new Enquiry())->getTable());

        $items = Enquiry::select('*')->where('type', 'Resourse View')->when(isset($keyword), function ($query) use ($keyword, $allColumns) {
            $query->where(function ($query) use ($keyword, $allColumns) {
                // Dynamically construct the search query
                foreach ($allColumns as $column) {
                    $query->orWhere(
                        $column,
                        'LIKE',
                        "%$keyword%"
                    );
                }
            });
        })
            ->latest()
            ->paginate($rows);
        $title = 'View Resourse Enquiry';
        return view('admin.enquiry.resource', compact('items', 'title'));
    }
    public function member(Request $request)
    {

        if ($request->ajax()) {

            $fd = $request->from_date;
            $td = $request->to_date;

            $data = Registration::select('*', DB::raw("DATE_FORMAT(created_at, '%d-%M-%Y') as dated"))->when(!empty($request->from_date), function ($query) use ($fd, $td) {
                $query->whereBetween('created_at', array($fd, $td));
            });


            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($data) {
                    return '<div class="action">
                        <a href="' . route('delete.member', $data->id) . '" class="btn btn-danger">Delete</a>
                        </div>';
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        $title = 'View Registration Enquiry';
        return view('admin.enquiry.member', compact('title'));
    }
    public function deleteMember(Request $request)
    {
        $id = $request->id;
        $orderDetail = Registration::find($id);
        $orderDetail->delete();
        return redirect()->route('member')->with('success', 'Registration has been successfully deleted.');

    }
    public function memberAdd()
    {
        $title = 'Register Member';
        return view('admin.enquiry.members-add', compact('title'));
    }
    public function
    storeRegistration(Request $request)
    {
        $request->validate([
            'fname' => 'required',
            'mname' => 'required',
            'lname' => 'required',
            'title' => 'required',
        ]);


        $insrt = new Registration();

        $insrt->title = $request->title;
        $insrt->fname = $request->fname;
        $insrt->mname = $request->mname;
        $insrt->lname = $request->lname;
        $insrt->specialty = $request->specialty;
        $insrt->qualification = $request->qualification;
        $insrt->institute = $request->institute;
        $insrt->country = $request->country;
        $insrt->details = $request->details;
        $insrt->email = $request->email;
        $insrt->contact = $request->code . $request->contact;
        $insrt->save();


        return redirect()->back()->with('success', 'Your Registration has been done successfully');
    }
    public function submitEnquiry(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
        ]);


        $insrt = new Enquiry();

        $insrt->name = $request->name;
        $insrt->email = $request->email;
        $insrt->phone = $request->phone;
        $insrt->type = $request->type;
        $insrt->subject = $request->subject;
        $insrt->messg = $request->messg;
        $insrt->save();

        return redirect()->back()->with('success', 'Your message has been sent successfully');
    }

    public function enquiryDelete(Request $request, $id)
    {
        $orderDetail = Enquiry::find($id);
        $orderDetail->delete();
        return redirect()->back()->with('success', 'Entry has been successfully deleted.');
    }
    public function ChangePassword(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'old_password'        => 'required',
            'new_password'         => 'required|min:8|max:30',
            'confirm_password' => 'required|same:new_password'
        ]);
        if ($validator->fails()) {
            return redirect()->back()->with('error', $validator->errors());
        }
        $user = $request->user();

        if (Hash::check($request->old_password, $user->password)) {
            $user->update([
                'password' => Hash::make($request->new_password)
            ]);
            return redirect()->back()->with('success', 'password successfully updated');
        } else {
            return redirect()->back()->with('error', 'old password does not match');
        }
    }

}
