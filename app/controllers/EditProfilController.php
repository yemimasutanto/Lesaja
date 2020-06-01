<?php

namespace App\Controllers;
Use App\Models\Murid;

class EditProfilController extends ControllerBase
{
    public function indexAction(){
    }

    public function editSubmitAction()
    {
        if ($this->request->isPost()) 
        {
            $nama_murid = $this->request->getPost("nama");
            $tgl_lahir = $this->request->getPost("tgl-lahir");

            // if ($nama_murid === null && $tgl_lahir === null)
            // {
            //     $this->flashSession->error("Data tidak boleh kosong");
            //     //pick up the same view to display the flash session errors
            //     return $this->response->redirect('editprofil');
            // }
            $exist = Murid::findFirst(
                [
                    'conditions' => 'email_murid = :email:',
                    'bind'       => [
                        'email' => $email_murid,
                    ],
                ]
            );

            if (!$exist)
            {
                $this->flashSession->error("Error");
                return $this->response->redirect('editprofil');
            }

            else
            {
                // set value
                $exist->nama_murid = $nama_murid;
                $exist->tgl_lahir = $tgl_lahir;
                
                // Store and check for errors
                $success = $exist->update();
                $this->flashSession->success("Data diri berhasil diubah!");
                return $this->response->redirect('dashboard');
            }
        }
        
    }

}