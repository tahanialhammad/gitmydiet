<?php
namespace App\Controllers;
use App\Core\App;


class LoginController
{
    public function __construct($function = null)
    {
        if (!empty($function)) {
            if (method_exists(get_class(), $function)) {
                $this->$function();
            }
        }
    }

    /**
     * Return the login view or,
     * when there's already a login session (user), then
     * redirect to he home page
     */
    public function index()
    {
        if (isset($_SESSION['user'])) {
            return redirect('');
        }

        return view('login');
    }
    
    /**
     * Check user credentials
     */
    public function login()
    {
        if (isset($_REQUEST['email']) && isset($_REQUEST['password'])) {

            $res = App::get('database')->query();
            //var_dump($res);
            // var_dump($_REQUEST);
            // var_dump($res['password']);
            if ($res !== false) {
                if (password_verify($_REQUEST['password'], $res[0]->password) ) {
                    $this->setUserSession($res[0]);
                    redirect('');
                } else {
                    echo 'Wrong password';
                    return redirect('login');
                }
            }
        }
    }

    public function logout()
    {
        session_destroy();

        return redirect('');
    }

    /**
     * Write user data to SESSION
     */
    private function setUserSession($data) : void
    {
        $_SESSION['user'] = [
            'id'   => $data->id,
            'name' => $data->name,
            'email' => $data->email,
            'groupType' => $data->groupType,
        ];
    }
}