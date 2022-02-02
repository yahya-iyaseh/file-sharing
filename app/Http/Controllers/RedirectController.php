<?php

namespace App\Http\Controllers;

use App\Models\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Response;

class RedirectController extends Controller
{
    public function redirect($id)
    {
        $file = File::where('unique', $id)->first();
        // Check File Access: False ? redirect to forbidden : Check Expired Date
        // $file->increment('failed_visit');
        if(isset($file->access)){


        if (!$file->access) {
            return view('redirect.forbidden');
            }
        }
        // Check File Expired Date : true ? redirect to forbidden and update access to false
        if(isset($file->expired_date)){
        if ($file->expired_date) {
            if ($file->expired_date <= now()) {
                $file->increment('failed_visit');
                $file->update(['access' => false]);
                return view('redirect.forbidden');
            }
        }
    }
        if ($file->bin) {
            return redirect()->route('redirect.bin', ['id' => $id]);
        }
        return redirect()->route('redirect.download', $file->unique);
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
            $file->increment('success_visit');
            return view('redirect.download', ['file' => $file]);
            // $file = $file->file;
            // return view('img', compact('file'));
            // return response()->download($filePath);
        }
        $file->increment('failed_visit');
        return view('redirect.forbidden');
    }

    public function file2(Request $request, $id)
    {

        $headers = array(
            'Content-Disposition' => 'inline',
        );
        // $filePath = Storage::disk('local')->url($file->file);
        // $filePath = asset('storage/' . $file->file);
        // $filePath = public_path() . '/storage/' . $file ->$file;
        // return view('img', ['file' => $file->file, 'filePath' => $filePath]);
        // $name = $file->name . rand(0, 30) . '.' . $fileInfo['extension'];

        // return \Response::download($filePath, 'File', $headers);
        // return response()->download($filePath, 'File', $headers);
    }

    public function download($id)
    {
        $file = File::where('unique', $id)->first();
        $file->increment('success_visit');
        return view('redirect.download', ['file' => $file]);
    }

    public function fileDownload($id)
    {

        $file = File::where('unique', $id)->first();
        $fileInfo = pathinfo(Storage::url($file->file));
        $name = $file->name . rand(0, 30) . '.' . $fileInfo['extension'];
        $file->increment('downloads');
        // dd(\Storage::url($file->file));
        return  Storage::download($file->file, $name);
    }
}
