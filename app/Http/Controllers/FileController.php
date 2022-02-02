<?php

namespace App\Http\Controllers;

use App\Models\File;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware(['auth'])->except(['download']);
    }
    public function index()
    {
        $user = \Auth::user();

        return view('file.index', ['files' => $user->files()->latest()->paginate(5)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $file  = new File;
        return view('file.create', [
            'accessType' =>  File::accessType(),
            'file' => $file,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate($this->rules($request->all()));
        $data = $request->all();
        $data['file'] = $request->file('file')->store('files');
        if (isset($data['access'])) {
            $data['access'] = true;
        } else {
            $data['access'] = false;
        }
        if (isset($request->bin)) {
            $data['bin'] = bcrypt($request->bin);
        }
        $data['user_id'] = \Auth::id();
        $data['unique'] = Str::uuid();
        File::create($data);
        notify()->success('File Upload', 'File Uploaded Successfully');
        return redirect()->route('file.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\File  $file
     * @return \Illuminate\Http\Response
     */
    public function show(File $file)
    {
        $fileInfo = pathinfo(Storage::disk('private')->url($file->file));

        $extension = $fileInfo['extension'];

        return view('file.show', compact('file', 'extension'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\File  $file
     * @return \Illuminate\Http\Response
     */
    public function edit(File $file)
    {

        return view('file.edit', [
            'file' => $file,
            'date' => $this->getDate($file->expired_date),
            'accessType' => File::accessType(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\File  $file
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, File $file)
    {
        // dd($request->all());
        $request->validate($this->rules($request->all()));
        $data = $request->all();
        $new  = false;
        if ($request->hasFile('file')) {
            if ($request->file('file')->isValid()) {
                $newImage = $request->file('file')->store('files');
                // $newImage = Storage::putFile('files', $request->file('file'));
                // $newImage = $request->file('file')->disk('local')->store('files');
                $new = true;
            }
        }
        if ($new) {
            \Storage::disk('private')->delete('files', $file->file);
            $data['file'] = $newImage;
        }

        if (isset($request->access)) {
            $data['access'] = true;
        } else {
            $data['access'] = false;
        }
        if (isset($request->bin)) {
            $data['bin'] = bcrypt($request->bin);
        }
        $file->update($data);
        notify()->success('Update File', 'File updated successfully');
        return  redirect()->route('file.index')->with(['success' => 'File Updated Successfully']);;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\File  $file
     * @return \Illuminate\Http\Response
     */
    public function destroy(File $file)
    {
        \Storage::disk('private')->delete($file->file);
        $file->delete();
        return  redirect()->route('file.index')->with(['success' => 'File Deleted Successfully']);
    }


    protected  function rules($request)
    {
        return  [
            'name' => ['required', 'string', 'min:4', 'max:255'],
            'bin' => ['nullable', 'min:4', 'max:255'],
            'expired_date' => ['nullable', 'date'],
            'file' => ['mimes:jpeg,png,jpg,svg,doc,docx,odt,pdf,tex,txt,wpd,tiff,tif,csv,psd,key,odp,pps,ppt,pptx,ods,xls,xlsm,xlsx', 'max:50000'],
            'access_type' => ['required', "in:global,private,group"],
        ];
    }

    public function getDate($value)
    {
        if ($value) {
            return Carbon::parse($value)->format('Y-m-d\TH:i');
        } else {
            return null;
        }
    }
}
