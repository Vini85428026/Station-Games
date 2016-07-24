<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Jogos Controller
 *
 * @property \App\Model\Table\JogosTable $Jogos
 */
class JogosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users']
        ];
        $jogos = $this->paginate($this->Jogos);

        $this->set(compact('jogos'));
        $this->set('_serialize', ['jogos']);
    }

    /**
     * View method
     *
     * @param string|null $id Jogo id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $jogo = $this->Jogos->get($id, [
            'contain' => ['Users']
        ]);

        $this->set('jogo', $jogo);
        $this->set('_serialize', ['jogo']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $jogo = $this->Jogos->newEntity();
        if ($this->request->is('post')) {
            $jogo = $this->Jogos->patchEntity($jogo, $this->request->data);
            if ($this->Jogos->save($jogo)) {
                $this->Flash->success(__('The jogo has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The jogo could not be saved. Please, try again.'));
            }
        }
        $users = $this->Jogos->Users->find('list', ['limit' => 200]);
        $this->set(compact('jogo', 'users'));
        $this->set('_serialize', ['jogo']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Jogo id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $jogo = $this->Jogos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $jogo = $this->Jogos->patchEntity($jogo, $this->request->data);
            if ($this->Jogos->save($jogo)) {
                $this->Flash->success(__('The jogo has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The jogo could not be saved. Please, try again.'));
            }
        }
        $users = $this->Jogos->Users->find('list', ['limit' => 200]);
        $this->set(compact('jogo', 'users'));
        $this->set('_serialize', ['jogo']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Jogo id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $jogo = $this->Jogos->get($id);
        if ($this->Jogos->delete($jogo)) {
            $this->Flash->success(__('The jogo has been deleted.'));
        } else {
            $this->Flash->error(__('The jogo could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
