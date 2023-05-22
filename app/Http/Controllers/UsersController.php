<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Role;
use App\Models\Permission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Exports\ExportUser;
use App\Imports\ImportUser;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Collection;

class UsersController extends Controller
{
    /**
     * Отображает список ресурсов
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*
        $users = User::get();
        return view('admin.pages.users.list.list', compact('users'));
        */

        $users = User::orderBy('id', 'desc')->paginate(30);
        return view('admin.pages.users.list.list')->with('users', $users);
    }

    /**
     * Выводит форму для создания нового ресурса
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //return view('admin.pages.users.list.create');
    }

    /**
     * Помещает созданный ресурс в хранилище
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        //User::create($request->all());
        $new = new User();
        $new->name = $request->name;
        $new->email = $request->email;
        $new->password = Hash::make($request->password);
        $new->save();

        //$createPermission = Permission::where('slug','create-tasks')->first();
        $role = Role::where('slug', $request->role)->first();
        $new->roles()->attach($role);
        //$new->permissions()->attach($createPermission);

        return redirect()->route('users.index')->with('success','Создан новый пользователь');
    }

    /**
     * Отображает указанный ресурс.
     *
     * @param  \App\Models\User  $data
     * @return \Illuminate\Http\Response
     */
    public function show(User $data)
    {
        //return view('posts.show',compact('data'));
        return view('admin.pages.users.list.list',compact('data'));
    }

    /**
     * Выводит форму для редактирования указанного ресурса
     *
     * @param  \App\Models\User  $data
     * @return \Illuminate\Http\Response
     */
    public function edit(User $data)
    {
        return view('users.edit',compact('data'));
    }

    /**
     * Обновляет указанный ресурс в хранилище
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Users  $data
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $data)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
        ]);

        $data->update($request->all());

        return redirect()->route('user.index')->with('success','User updated successfully');
    }

    /**
     * Удаляет указанный ресурс из хранилища
     *
     * @param  \App\Models\Users  $data
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $data)
    {
        $data->delete();

        return redirect()->route('users.index')
                    ->with('success','user deleted successfully');
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function export($file_format='XLS')
    {
        //$file_format = XLS | XLSX | CSV | HTML | MPDF | DOMPDF | TCPDF
        switch($file_format){
            case 'XLS':
                $format = \Maatwebsite\Excel\Excel::XLS;
                break;
            case 'XLSX':
                $format = \Maatwebsite\Excel\Excel::XLSX;
                break;
            case 'CSV':
                $format = \Maatwebsite\Excel\Excel::XLSX;
                break;
            case 'HTML':
                $format = \Maatwebsite\Excel\Excel::HTML;
                break;
        }
        return Excel::download(new ExportUser, 'users-'.date("dmY-His").'.'.mb_strtolower($file_format), $format);
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function import(Request $request)
    {
        $validatedData = $request->validate([
            'file' => 'required',
        ]);
        $array = Excel::toArray(new ImportUser, request()->file('file'));
        return $array;

        //Excel::import(new ImportUser, request()->file('file'));
        //return redirect('fm_import')->with('status', 'The file has been imported in laravel');

        //return back();
        //return redirect('/')->with('success', 'All good!');
    }
}
