<?php
declare(strict_types=1);

namespace App\Controllers;
Use App\Models\Murid;
Use App\Models\Tentor;

class LoginController extends ControllerBase{
    public function indexAction(){
    }

    public function loginSubmitAction(){

        // // Jika masih terotentikasi ketika login
        // if($this->session->has('AUTH_ID')){
        //     $this->flashSession->error("Already Login");
        //     return $this->response->redirect('dashboard');
        // }

        // Jika menekan tombol Masuk
        if ($this->request->isPost()) {
            $email_input = $this->request->getPost("email");
            $password_input = $this->request->getPost("password");

            if ($email_input === "" && $password_input === ""){
                $this->flashSession->error("Anda belum mengisi email dan password");
                return $this->view->pick("login/index");
            }

            if ($email_input === "") {
                $this->flashSession->error("Isi email anda");
                //pick up the same view to display the flash session errors
                return $this->view->pick("login/index");
            }

            if ($password_input === "") {
                $this->flashSession->error("Password anda kosong");
                //pick up the same view to display the flash session errors
                return $this->view->pick("login/index");
            }

            $user_murid = Murid::findFirst([ 
                'email_murid = :email:',
                'bind' => [
                   'email' => $email_input,
                ]
            ]);

            $user_tentor = Tentor::findFirst([ 
                'email_tentor = :email:',
                'bind' => [
                   'email' => $email_input,
                ]
            ]);

            if ($user_murid) {
                if ($password_input === $user_murid->password_murid){
                    $this->session->set('AUTH_ID', $user_murid->id_murid);
                    $this->session->set('AUTH_NAME', $user_murid->nama_murid);
                    $this->session->set('AUTH_TGLLAHIR', $user_murid->tgl_lahir);
                    $this->session->set('AUTH_NOHP', $user_murid->no_hp);
                    $this->session->set('AUTH_EMAIL', $user_murid->email_murid);
                    $this->session->set('AUTH_PASS', $user_murid->password_murid);   

                    return $this->response->redirect('/dashboard');
                }
            } elseif ($user_tentor) {
                if ($password_input === $user_tentor->password_tentor){
                    $this->session->set('AUTH_ID', $user_tentor->id_tentor);
                    $this->session->set('AUTH_NAME', $user_tentor->nama_tentor);
                    $this->session->set('AUTH_EMAIL', $user_tentor->email_tentor);
                    $this->session->set('AUTH_PASS', $user_tentor->password_tentor);   
                    return $this->response->redirect('/index');
                }
            } else {
                // The validation has failed
                $this->flashSession->error("User tidak terdaftar");
                return $this->response->redirect('login');
            }
            // The validation has failed
            $this->flashSession->error("Password Salah");
            return $this->response->redirect('login');
        }
    }
}