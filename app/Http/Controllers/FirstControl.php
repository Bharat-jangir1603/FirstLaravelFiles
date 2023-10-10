<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use PhpParser\Node\Stmt\ElseIf_;

use function Laravel\Prompts\alert;

class FirstControl extends Controller
{
    public function login($warn = null)
    {
        $data = [];
        if($warn == 'warn'){
            $data['warn'] = 'Please Login to your account before search.';
        }elseif($warn == 'error'){
            $data['warn'] = 'Please Login for open files';
        }
        elseif($warn == 'dismiss'){
            $data['warn'] = 'First Login or signup for logout';
        }else{
            $data['warn'] = '';
        }
        return view('Ecom.login', $data);
    }
    public function signup()
    {
        return view('Ecom.signup');
    }
    public function hello(Request $req)
    {
        $req->validate([
            'email' => 'required|email',
            'pass' => 'required|alpha_num',
            'check' => 'required',
        ]);
        $check = DB::table('login')
            ->select('id')
            ->where('email', $req->email)
            ->get('id');
        $id = $check[0]->id;
        session(['id' => $id]);
        if (session('id') != '') {
            return redirect()->to('/main');
        }
    }
    public function signupMain(Request $req)
    {
        $req->validate([
            'email' => 'required|email',
            'pass' => 'required|alpha_num',
            're_pass' => 'required|same:pass',
            'check' => 'required',
        ]);
        $check = DB::table('login')
            ->select('id')
            ->where('email', $req->email)
            ->get('id');
        echo $check;
        if (count($check) == 1) {
            echo '<script>alert(' . $req->email . 'is already exist.';
            return redirect()->to('/signup');
        } else {
            $time = time();
            $insert = DB::table('login')->insert([
                'id' => $time,
                'email' => $req->email,
                'pass' => $req->pass,
                'time' => '09-10-23',
            ]);
            if ($insert) {
                session(['id', $time]);
                return redirect()->to('/main');
            }
        }
    }
    public function main()
    {
        if (session('id') != '') {
            echo session('id');
            $data['files'] = DB::table('files')
                ->select('*')
                ->where('id', session('id'))
                ->get();
            $data['login'] = 'by';
            $data['signup'] = 'by';
            return view('Ecom.main', $data);
        } else {
            $warn = 'error';
            return redirect()->to('/login/'.$warn);
        }
    }
    public function uplode(Request $req)
    {
        if ($req->getMethod() === 'POST') {
            $req->validate([
                'desc' => 'required|max:30',
                'file' => 'required',
            ]);
            if ($_FILES['file']['size'] <= 10000000) {
                echo 'file size is done';
                if (
                    move_uploaded_file(
                        $_FILES['file']['tmp_name'],
                        'images/' . $_FILES['file']['name']
                    )
                ) {
                    echo 'done';
                    $user = DB::table('files')->insert([
                        'id' => session('id'),
                        'file' => $_FILES['file']['name'],
                        'desc' => $req->desc,
                        'time' => '08-10-23',
                    ]);
                    if ($user) {
                        return redirect()->to('/main');
                    } else {
                        echo 'Failed';
                    }
                }
            } else {
                echo 'file size is grater than 10mb';
            }
        } else {
            return view('Ecom.main');
        }
    }
    public function search($id = null)
    {
        if (session('id') != '') {
            $in = '';
            $data = DB::table('files')
                ->select('*')
                ->where('file', 'Like', '%'.$id.'%')
                ->where('id', session('id'))
                ->get();
            for($i = 0; $i < count($data); $i++){
                $in .= 
            '<div class="file">
            <div class="img_b">
                <img src="images/'.$data[$i]->file.'" alt="">
            </div>
            <div class="desc">
                <b class="F_Name">'.$data[$i]->file.'</b>
                <p class="F_Desc">'.$data[$i]->desc.'</p>
                <a href="images\"'.$data[$i]->file.'" target="_blank"><button>Open</button></a>
            </div>
        </div>';
            }
            echo $in;
        } else {
            echo 'empty';
            // $warn = 'warn';
            // return redirect()->to('/login/'.$warn);
        }
    }
    public function logout()
    {
        if (session('id') != '') {
            session()->flash('id');
            return redirect()->to('/login');
        } else {
            $warn = 'dismiss';
            return redirect()->to('/login/'.$warn);
        }
    }
}
