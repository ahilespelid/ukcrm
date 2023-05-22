<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\ImportFm;

class FmController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function import(Request $request)
    {
        $data['items'] = '';
        return view('admin.pages.file-manager.import')->with('data', $data);
    }
    /**
     * Display a listing of the resource.
     */
    public function export()
    {
        $data['items'] = '';
        return view('admin.pages.file-manager.export')->with('data', $data);
    }
    /**
     * Display a listing of the resource.
     */
    public function setting()
    {
        $data['items'] = '';
        return view('admin.pages.file-manager.settings')->with('data', $data);
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function import_post(Request $request)
    {
        $validatedData = $request->validate([
            'table' => 'required',
            'file' => 'required',
        ]);

        if(isset($request->table)){
            $class =  'App\Imports\Import'.$request->table;
        }
        else {
            return redirect('/file-manager/import')->with('error', 'Не выбран объект для загрузки') ;
        }

        $array = Excel::toArray(new $class, request()->file('file'));
        return dump($array);

        /*
        Excel::import(new $class, request()->file('file'));
        return redirect('/file-manager/import')->with('status', 'Экспорт данных успешно завершен.');
        */
    }
}
