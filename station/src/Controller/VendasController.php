<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Vendas Controller
 *
 * @property \App\Model\Table\VendasTable $Vendas
 */
class VendasController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Jogos', 'Consoles', 'Users']
        ];
        $vendas = $this->paginate($this->Vendas);

        $this->set(compact('vendas'));
        $this->set('_serialize', ['vendas']);
    }

    /**
     * View method
     *
     * @param string|null $id Venda id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $venda = $this->Vendas->get($id, [
            'contain' => ['Jogos', 'Consoles', 'Users']
        ]);

        $this->set('venda', $venda);
        $this->set('_serialize', ['venda']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $venda = $this->Vendas->newEntity();
        if ($this->request->is('post')) {
            $venda = $this->Vendas->patchEntity($venda, $this->request->data);
            if ($this->Vendas->save($venda)) {
                $this->Flash->success(__('The venda has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The venda could not be saved. Please, try again.'));
            }
        }
        $jogos = $this->Vendas->Jogos->find('list', ['limit' => 200]);
        $consoles = $this->Vendas->Consoles->find('list', ['limit' => 200]);
        $users = $this->Vendas->Users->find('list', ['limit' => 200]);
        $this->set(compact('venda', 'jogos', 'consoles', 'users'));
        $this->set('_serialize', ['venda']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Venda id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $venda = $this->Vendas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $venda = $this->Vendas->patchEntity($venda, $this->request->data);
            if ($this->Vendas->save($venda)) {
                $this->Flash->success(__('The venda has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The venda could not be saved. Please, try again.'));
            }
        }
        $jogos = $this->Vendas->Jogos->find('list', ['limit' => 200]);
        $consoles = $this->Vendas->Consoles->find('list', ['limit' => 200]);
        $users = $this->Vendas->Users->find('list', ['limit' => 200]);
        $this->set(compact('venda', 'jogos', 'consoles', 'users'));
        $this->set('_serialize', ['venda']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Venda id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $venda = $this->Vendas->get($id);
        if ($this->Vendas->delete($venda)) {
            $this->Flash->success(__('The venda has been deleted.'));
        } else {
            $this->Flash->error(__('The venda could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
