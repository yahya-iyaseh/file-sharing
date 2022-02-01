<?php

namespace App\Http\Controllers;

use App\Models\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class RedirectController extends Controller
{
    public function redirect($id)
    {
        $file = File::where('unique', $id)->first();
        if (!$file->access) {
            return view('redirect.forbidden');
        }
        if ($file->bin) {
            return redirect()->route('redirect.bin', ['id' => $id]);
        }
        return redirect()->route('redirect.file2', $id);
    }
    public function bin($id)
    {
        return view('redirect.bin', [
            'id' => $id,
        ]);
    }

    public function file(Request $request, $id)
    {
        $file = File::where('unique', $id)->first();

        if (Hash::check($request->bin, $file->bin)) {
            $file = $file->file;
            return view('img', compact('file'));
            return response()->download($filePath);
        }
        return view('redirect.forbidden');
    }
    public function file2(Request $request, $id)
    {
        $file = File::where('unique', $id)->first();
        $headers = array(
            'Content-Disposition' => 'inline',
        );
        $filePath = Storage::url($file->file);
        return view('img', ['file' => $file->file]);

            // return response()->download(  $filePath, $file->file, $headers);

    }
}
