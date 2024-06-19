<?php

namespace App\Http\Controllers;

use App\Models\Committee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;

class CommitteeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $keyword = request()->keyword;
        $rows = request()->rows ?? 25;

        if ($rows == 'all') {
            $rows = Committee::count();
        }

        // Get the table columns
        $allColumns = Schema::getColumnListing((new Committee())->getTable());

        $items = Committee::select('*')->when(isset($keyword), function ($query) use ($keyword, $allColumns) {
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
        $title = 'View Order Details';
        $title = 'Added Members';
        return view('admin.committee.index', compact('items', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Add New Member';
        return view('admin.committee.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->post());
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
        ]);
        $image = $request->file('image');
        $imageName = time(). '.'. $image->getClientOriginalExtension();
        $image->storeAs('public/images', $imageName);

        // $insrt = new Committee();

        // $insrt->name = $request->name;
        // $insrt->image = $imageName;
        // $insrt->type = $request->type;
        // $insrt->position = $request->position;
        // $insrt->fb = $request->fb;
        // $insrt->insta = $request->insta;
        // $insrt->twitt = $request->twitt;
        $request->merge(['image' => $imageName]);
        Committee::create($request->post());

        return redirect()->route('committee.index')->with('success', 'Member Added Successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Committee  $committee
     * @return \Illuminate\Http\Response
     */
    public function show(Committee $committee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Committee  $committee
     * @return \Illuminate\Http\Response
     */
    public function edit(Committee $committee)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Committee  $committee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Committee $committee)
    {
        //
    }
    public function reorderView(Request $request)
    {
        $type = $request->type;
        $items = Committee::where('type', $type)->orderBy('display_order', 'ASC')->get();
        $title = 'Reorder '.$type.' Committee';
        return view('admin.committee.reorder', compact('items', 'title'));
    }
    public function reorderAction(Request $request)
    {
        if (isset($request) && $request['order'] != '') {
            $order  = explode(",", $request["order"]);
            for ($i = 0; $i < count($order); $i++) {
                Committee::where('id', '=', $order[$i])
                    ->update(['display_order' => $i]);
            }
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Committee  $committee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {

        $orderDetail = Committee::find($id);
        $orderDetail->delete();
        return redirect()->route('committee.index')->with('success', 'Member has been successfully deleted.');
    }
}
