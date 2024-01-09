<?php

namespace App\Controllers;
use App\Models\PagesModel;
use CodeIgniter\Shield\Models\UserModel;
class Login extends BaseController
{
    public function __construct(){
       
        helper(['url', 'session']);
       
    }
    public function index() 
    {
        $users = new UserModel();
        $pagemodel = new PagesModel();
        
        $user = auth()->user();
        if (auth()->loggedIn()) {
           
            $session = session();
            $session->set('isLoggedIn', true);
    
        
            $session->set('user_id', $user->id); 
            $session->set('role', $user->role);
            return redirect()->to(base_url('/homes'));
        } else {
          
        }
        $pages = $pagemodel->findAll();

        return view('auth/login', [
            "pages" => $pages,
            "loggedIn" => session()->get('isLoggedIn'),
            "user" => $user,
            "users" => $users
        ]);
    }

public function logout()
{
    session()->remove('isLoggedIn');

   
    return redirect()->to('/login'); 
}

public function register(){

    return view('auth/register');
}


}

?>