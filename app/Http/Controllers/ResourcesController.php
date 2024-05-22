<?php

namespace App\Http\Controllers;

use App\Models\Resources;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;

class ResourcesController extends Controller
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
            $rows = Resources::count();
        }

        // Get the table columns
        $allColumns = Schema::getColumnListing((new Resources())->getTable());

        $items = Resources::select('*')->when(isset($keyword), function ($query) use ($keyword, $allColumns) {
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
        $title = 'View Resources';
        return view('admin.ress.index', compact('items', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Add New Resources';
        return view('admin.ress.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $type = $request->type;
         if($type=='PDF-Resource'){
            $request->validate([
                'pdf' => 'required|mimes:pdf|max:10000',
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            ]);
            $image = $request->file('pdf');
            $pdfName = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public/pdfs', $pdfName);
            $request->merge(['pdf' => $pdfName]);
        }
        if($type=='Video-Resource'){
            $request->validate([
                'pdf' => 'required|mimes:mp4,ogx,oga,ogv,ogg,webm|max:50000',
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            ]);
            $image = $request->file('pdf');
            $pdfName = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public/videos', $pdfName);
            $request->merge(['pdf' => $pdfName]);
        }
        if($type=='Research-Blogs'){
            $request->validate([
                'pdf' => 'required',
                'pdf.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            ]);

            $images = array();
            if ($files = $request->file('pdf')) {
                foreach ($files as $key => $file) {
                    $imageName = time() . '.' . $file->getClientOriginalExtension();
                    $file->storeAs('public/images', $imageName);
                    $images[$key] = $imageName;
                }
            }
            $str = implode(",", $images);
            $request->merge(['pdf' => $str]);
        }
        if($type=='Books'){
            $request->validate([
                'pdf' => 'required|mimes:pdf|max:10000',
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            ]);

            $image = $request->file('pdf');
            $pdfName = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public/pdfs', $pdfName);
            $request->merge(['pdf' => $pdfName]);
        }

        $image = $request->file('image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->storeAs('public/images', $imageName);
        $request->merge(['image' => $imageName]);


        Resources::create($request->post());

        return redirect()->route('ress.index')->with('success', 'Resource Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Resources  $resources
     * @return \Illuminate\Http\Response
     */
    public function show(Resources $resources)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Resources  $resources
     * @return \Illuminate\Http\Response
     */
    public function edit(Resources $resources)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Resources  $resources
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Resources $resources)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Resources  $resources
     * @return \Illuminate\Http\Response
     */
    public function destroy(Resources $resources, $id)
    {
        $orderDetail = Resources::find($id);
        $orderDetail->delete();
        return redirect()->route('ress.index')->with('success', 'Resource has been successfully deleted.');
    }
}
