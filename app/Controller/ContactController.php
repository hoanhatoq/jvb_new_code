<?php
    App::uses('AppController', 'Controller');

    class ContactController extends AppController {

        public function index() {
            $token = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890abcdefghijklmnopqrstuvwxyz'; 
            $token = substr(str_shuffle($token), 0, 9);
            $this->set('token', $token);
            if($this->request->is('post') && ($this->Session->read('token') == $this->request->data['Contact']['token']))
            {
                $data = array(
                        'name' => $this->request->data['Contact']['name'],
                        'phone' => $this->request->data['Contact']['phone'],
                        'email' => $this->request->data['Contact']['email'],
                        'subject' => $this->request->data['Contact']['subject'],
                        'content' => $this->request->data['Contact']['content'],
                        'date_add' => date('Y-m-d H:i:s')
                );
                if ($this->Contact->save($data))
                    $this->Session->setFlash(__('Your contact has been saved.', 'success'));
                else 
                    $this->Session->setFlash(__('Your contact could not save.', 'error'));
            }

            $this->Session->write('token', $token);
        }
    }