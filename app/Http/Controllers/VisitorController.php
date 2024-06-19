<?php

namespace App\Http\Controllers;

use App\Models\Committee;
use App\Models\Gallery;
use App\Models\Events;
use App\Models\Reports;
use App\Models\Resources;
use App\Models\Enquiry;
use App\Models\Registration;
use App\Models\Banner;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;

class VisitorController extends Controller
{
    public function index()
    {
        $banners = Banner::select('*')->latest()->get();
        $items = Gallery::skip(0)->take(10)->latest()->get();
        $title = 'Home';
        return view('visitors.index', compact('items', 'title', 'banners'));
    }
    public function about()
    {
        return view('visitors.about');
    }
    public function pastPresidents()
    {
        return view('visitors.past-presidents');
    }
    public function history()
    {
        return view('visitors.history');
    }
    public function bylaws()
    {
        return view('visitors.bylaws-of-APBA');
    }
    public function bidding()
    {
        return view('visitors.bidding-process');
    }
    public function exCommitte()
    {
        $items = Committee::where('type','EXECUTIVE')->orderBy('display_order', 'ASC')->get();
        $title = 'Executive Committee';
        return view('visitors.committe', compact('items', 'title'));

    }
    public function adCommitte()
    {
        $items = Committee::where('type', 'ADVISORS')->orderBy('display_order', 'ASC')->get();
        $title = 'Advisors Committee';
        return view('visitors.committe', compact('items', 'title'));
    }
    public function membership()
    {
        return view('visitors.membership');
    }
    public function events()
    {
        $items = Events::latest()->get();
        $title = 'Upcoming Events';
        return view('visitors.events', compact('items', 'title'));
    }

    public function eventsdetails(Request $request, $id)
    {
        $items = Events::find($id);
        $title = $items->title;
        return view('visitors.eventdetails', compact('items', 'title'));
    }
    public function view_member(Request $request, $id,$name)
    {
        $items = Committee::where('id', $id)->first();
        $title = $items->name;
        return view('visitors.committeDetail', compact('items', 'title'));
    }
    public function pastEvents()
    {
        return view('visitors.past-events');
    }
    public function reports()
    {
        $items = Reports::latest()->get();
        $title = 'Latest Reports';
        return view('visitors.reports', compact('items', 'title'));

    }
    public function books()
    {
        $items = Resources::where('type', 'Books')->latest()->get();
        $title = 'Latest Books';
        $type = 'Books';
        return view('visitors.books', compact('items', 'title', 'type'));
    }
    public function PDFresources()
    {
        $items = Resources::where('type', 'PDF-Resource')->latest()->get();
        $title = 'Latest PDF Resources';
        return view('visitors.books', compact('items', 'title'));
    }
    public function videoresources()
    {
        $items = Resources::where('type', 'Video-Resource')->latest()->get();
        $title = 'Latest Video Resources';
        return view('visitors.books', compact('items', 'title'));
    }
    public function blogs()
    {
        $items = Resources::where('type', 'Research-Blogs')->latest()->get();
        $title = 'Latest Research & Blogs';
        return view('visitors.books', compact('items', 'title'));
    }

    public function registration()
    {
        return view('visitors.registration');
    }
    public function gallery()
    {
        $items = Gallery::latest()->get();
        $title = 'Our Gallery';
        return view('visitors.gallery', compact('items', 'title'));

    }
    public function contact()
    {
        return view('visitors.contact');
    }
    public function submitBasic(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'id' => 'required',
            'email' => 'required',
            'phone' => 'required',
        ]);


        $items = Resources::findOrFail($request->id);
        $insrt = new Enquiry();

        $insrt->name = $request->name;
        $insrt->email = $request->email;
        $insrt->phone = $request->code.$request->phone;
        $insrt->type = $request->type;

        $insrt->messg  = $items->title;
        $insrt->save();
        session(['resource_enabled' => $request->name]);

        return redirect()->route('view_resource', $request->id)->with('success', 'Your Details has been sent successfully');
    }
    public function view_resource(Request $request,$id)
    {
        $items = Resources::findOrFail($id);
        $title = $items->title;
        return view('visitors.viewResource', compact('items', 'title'));
    }
    public function submitRegistration(Request $request)
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

}
