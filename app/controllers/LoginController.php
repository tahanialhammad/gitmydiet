<?php
namespace App\Controllers;
use App\Core\App;
//use App\Core\Database\QueryBuilder;

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
        // $securityIssue = decryptToken($_REQUEST['crf_token'], $_SESSION['token']) === false;
        
        if (isset($_REQUEST['email']) && isset($_REQUEST['password'])) {
           // $sql = "SELECT * FROM users WHERE email='{$_REQUEST['email']}'";
            
            //$res = QueryBuilder::query($sql)->fetch();
            $res = App::get('database')->query();
            //var_dump($res);
            // var_dump($_REQUEST);
            // var_dump($res['password']);
            if ($res !== false) {
                if (password_verify($_REQUEST['password'], $res[0]->password) ) {
                    $this->setUserSession($res[0]);
                    redirect('');
                // return json_encode([
                    //     'success'  => true,
                    //     'message'  => "Succesfull loged in.",
                    //     'redirect' =>  ""
                    // ]);
                } else {
                    echo 'Wrong password';
                    return redirect('login');
                    // return json_encode([
                    //     'success' => false,
                    //     'message' => "Username and/or password incorrect"
                    // ]);
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
