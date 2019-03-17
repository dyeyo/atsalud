<?php

    namespace App\Http\Controllers\Auth;

    use App\Http\Controllers\Functions;
    use App\User;
    use Illuminate\Http\Request;
    use App\Http\Controllers\Controller;

    class RecoverPasswordController extends Controller
    {
        public $functions;

        function __construct()
        {
            $this->functions = new Functions();
        }

        public function temporyPassword(Request $request)
        {

            if (!empty($request->email)) {


                $pass = $this->functions->generator_password();
                $email = User::select('email')->where('email', $request->email)->get();
                if (count($email) != 0) {
                    $passsword = bcrypt($pass);
                    $user_pass = User::where('email', $request->email)->update(['password' => $passsword, 'reset_password' => 1]);
                    if ($user_pass) {
                        $affair = "Petición recuperar contraseña";
                        $content = "Hemos recibido su petición para restaurar su contraseña, recuerde que la contraseña  proporsionda es temporal y debera sera cambaiada por su clave personal.";
                        $response = "Cotraseña: " . $pass;
                        $this->functions->send_email($request->email, $affair, $content, $response);

                        return response()->json(['success' => trans('translate.pass_success')]);
                    } else {
                        return response()->json(['error' => trans('translate.pass_error')]);
                    }

                } else {
                    return response()->json(['error' => trans('translate.email_not')]);
                }
            } else {
                return response()->json(['error' => trans('validation.email')]);
            }
        }
        public function changePassword()
        {

        }
    }
