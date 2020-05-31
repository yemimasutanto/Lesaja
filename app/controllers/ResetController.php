<?php  

namespace App\Controllers;
Use App\Models\Murid;

class ResetController extends ControllerBase  
{  
    public function indexAction()   
    {  
        
    }  

    public function resetSubmitAction()
    {
        if ($this->request->isPost()) 
        {

            // get value
            $email_murid = $this->request->getPost('email', 'string');
            $nama_murid = $this->request->getPost('name', 'string');
            $password_baru = $this->request->getPost('password', 'string');

            $exist = Murid::findFirst(
                [
                    'conditions' => 'email_murid = :email:',
                    'bind'       => [
                        'email' => $email_murid,
                    ],
                ]
            );

            if (!$exist) {
                $this->flashSession->error("Email anda salah");
                return $this->response->redirect('reset');
            }

            else {
                if ($nama_murid !== $exist->nama_murid) {
                    $this->flashSession->error("Nama yang Anda masukkan tidak sesuai");
                    return $this->response->redirect('reset');
                } else {  
                    // set value
                    $exist->password_murid = $password_baru;
                    
                    // Store and check for errors
                    $success = $exist->update();
                    $this->flashSession->success("Password berhasil diubah!");
                    return $this->response->redirect('login');
                }
            }
        }
    }
}