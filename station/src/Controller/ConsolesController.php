<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Consoles Controller
 *
 * @property \App\Model\Table\ConsolesTable $Consoles
 */
class ConsolesController extends AppController
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
        $consoles = $this->paginate($this->Consoles);

        $this->set(compact('consoles'));
        $this->set('_serialize', ['consoles']);
    }

    /**
     * View method
     *
     * @param string|null $id Console id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $console = $this->Consoles->get($id, [
            'contain' => ['Users']
        ]);

        $this->set('console', $console);
        $this->set('_serialize', ['console']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $console = $this->Consoles->newEntity();
        if ($this->request->is('post')) {
            $console = $this->Consoles->patchEntity($console, $this->request->data);
            if ($this->Consoles->save($console)) {
                $this->Flash->success(__('The console has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The console could not be saved. Please, try again.'));
            }
        }
        $users = $this->Consoles->Users->find('list', ['limit' => 200]);
        $this->set(compact('console', 'users'));
        $this->set('_serialize', ['console']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Console id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $console = $this->Consoles->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $console = $this->Consoles->patchEntity($console, $this->request->data);
            if ($this->Consoles->save($console)) {
                $this->Flash->success(__('The console has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The console could not be saved. Please, try again.'));
            }
        }
        $users = $this->Consoles->Users->find('list', ['limit' => 200]);
        $this->set(compact('console', 'users'));
        $this->set('_serialize', ['console']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Console id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $console = $this->Consoles->get($id);
        if ($this->Consoles->delete($console)) {
            $this->Flash->success(__('The console has been deleted.'));
        } else {
            $this->Flash->error(__('The console could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
