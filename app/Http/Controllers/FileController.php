<?php

namespace App\Http\Controllers;

use App\Models\File;
use Illuminate\Http\Request;
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

        return view('file.index', ['files' => $user->files]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('file.create', ['accessType' =>  File::accessType()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $data =  $request->validate($this->rules($request->all()));
        if($request->hasFile('file')){
            if($request->file('file')->isValid()){
                $data['file'] = \Storage::disk('local')->put('files', $request->get('file'));
            }
        }
        $data['user_id'] = \Auth::user()->id;
        File::create($data);
        return redirect()->route('file.index')->with(['success' => 'The File Was Uploded']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\File  $file
     * @return \Illuminate\Http\Response
     */
    public function show(File $file)
    {
        return view('file.show', compact('file'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\File  $file
     * @return \Illuminate\Http\Response
     */
    public function edit(File $file)
    {
        return view('file.edit',[
            'file' => $file,
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
      $data =  $request->validate($this->rules($request->all()));
      $new  = false;
      if($request->hasFile('file')){
          if($request->file('file')->isValid()){
            $newImage = \Storage::disk('local')->put('files', $request->file);
            $new = true;
          }
      }
      if($new){
          \Storage::disk('local')->delete('files', $file->file);
      }
      $data['file'] = $newImage;

      $file->update($data);
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
        \Storage::disk('local')->delete($file->file);
        $file->delete();
        return  redirect()->route('file.index')->with(['success' => 'File Deleted Successfully']);
    }


    protected  function rules($request)
    {
        return  [
            'unique'  => ['required', 'string',],
            'user_id' => ['required', 'exists:users,id'],
            'name' => ['required', 'string', 'min:4', 'max:255'],
            'access' => ['required', 'boolean'],
            'bin' => ['nullable', 'min:4', 'max:255'],
            'file' => ['file', 'size:50000'],
            'access_type' => ['required', Rule::in(['global', 'private',  'group'])],
        ];
    }
}
