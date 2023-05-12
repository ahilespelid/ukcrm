<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\User;

class AdminController extends Controller
{
    /**
     * Instantiate a new controller instance.
     */
    public function __construct()
    {
        $this->middleware('auth');
        //$this->middleware('role:super-admin');
        //$this->middleware('role:manager');
    }

    public function index(Request $request): View {
        if (auth()->user()->hasRole('super-admin') || auth()->user()->hasRole('manager')) {
            return view('admin.pages.index', [
                'user' => $request->user(),
            ]);
        }
    }

    public function users(): View {
        if (auth()->user()->hasRole('super-admin')) {
            return view('admin.pages.users.list.list', [
                'users' => User::all(),
            ]);
        }
    }

    public function roles(): View {
        if (auth()->user()->hasRole('super-admin')) {
            return view('admin.pages.users.role.list', [
                'users' => User::all(),
            ]);
        }
    }

    public static function editUsers($id)
    {
        if (auth()->user()->hasRole('super-admin')) {
            return view('admin.pages.account.settings.settings', [
                'user' => User::findOrFail($id),
            ]);
        }
    }

    public static function reklama()
    {
        if (auth()->user()->hasRole('super-admin')) {
            return view('admin.pages.reklama.settings', [
                'items' => '', //из модели reklama
            ]);
        }
    }

    public static function getSvgIcon($path, $class = '') {
        $path = str_replace('\\', '/', trim($path));
        if ( ! file_exists($path)) {
                return "<!--SVG file not found: $path-->\n";
        }

        $svg_content = file_get_contents($path);

        $asd = explode('/media/', $path);
        if (isset($asd[1])) {
            $path = 'assets/media/'.$asd[1];
        }

        // remove empty lines
        $string = preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $svg_content);

        $output  = "<!--begin::Svg Icon | path: $path-->\n";
        $output .= '<span class="'.$class.'">'.$string.'</span>';
        $output .= "\n<!--end::Svg Icon-->";

        return $output;
    }
}
