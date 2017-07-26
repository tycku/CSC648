<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 *
 * @method \App\Model\Entity\User[] paginate($object = null, array $settings = [])
 */
class UsersController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => []
        ];
        $users = $this->paginate($this->Users);

        $this->set(compact('users'));
        $this->set('_serialize', ['users']);
    }

    /**
     * View method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => ['Users']
        ]);

        $this->set('user', $user);
        $this->set('_serialize', ['user']);
    }

     /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $current_time = date('Y-m-d G:i:s',time());
            $salt = sha1(substr(str_shuffle(str_repeat("0123456789qwertyuiopasdfghjklzxcvbnm,.;'*&^", 15)),0,15));
            $data = $this->request->getData();
            $current_time = date('Y-m-d G:i:s',time());
            $salt = sha1(substr(str_shuffle(str_repeat("0123456789qwertyuiopasdfghjklzxcvbnm,.;'*&^", 15)),0,15));
            $data = $this->request->getData();
            $data["registered_date"] = $current_time;
            $data["last_login_date"] = $current_time;
            $data['token'] = "";
            $data['salt'] = $salt;
            $data['role'] = 0;
            
            
            $user = $this->Users->patchEntity($user, $data);
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));
                return $this->redirect(['action' => 'index']);
                
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $users = $this->Users->Users->find('list', ['limit' => 200]);
        $this->set(compact('user', 'users'));
        $this->set('_serialize', ['user']);
    }
    
 
    public function login(){
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $current_time = date('Y-m-d G:i:s',time());
            $salt = sha1(substr(str_shuffle(str_repeat("0123456789qwertyuiopasdfghjklzxcvbnm,.;'*&^", 15)),0,15));
            $data = $this->request->getData();
            
            
            $this->set(compact('data','data'));
            $this->set('_serialize',['data']);
        if ($this->request->is('post')) {
            $user = $this->Auth->identify();
            if ($user) {
                $this->Auth->setUser($user);
              return $this->redirect(['controller' => 'posts']);
            }
            $this->Flash->error(__('Invalid username or password, try again'));
        }
        }
        
    }
 
    public function beforeFilter(Event $event){
        $this->Auth->allow();
        
        
    }
    
    public function test(){
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $current_time = date('Y-m-d G:i:s',time());
            $salt = sha1(substr(str_shuffle(str_repeat("0123456789qwertyuiopasdfghjklzxcvbnm,.;'*&^", 15)),0,15));
            $data = $this->request->getData();
            
            
            $this->set(compact('data','data'));
            $this->set('_serialize',['data']);
            
            if ($this->request->is('post')) {
            $user = $this->Auth->identify();
            if ($user) {
                $this->Auth->setUser($user);
               return $this->redirect(['controller' => 'Users']);
            }
            $this->Flash->error(__('Invalid username or password, try again'));
        }
            
            
            
            
        }
    }

    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $users = $this->Users->Users->find('list', ['limit' => 200]);
        $this->set(compact('user', 'users'));
        $this->set('_serialize', ['user']);
    }

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('The user has been deleted.'));
        } else {
            $this->Flash->error(__('The user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
