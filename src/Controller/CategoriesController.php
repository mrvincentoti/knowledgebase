<?php
declare(strict_types=1);

namespace App\Controller;
use Cake\ORM\TableRegistry;

/**
 * Categories Controller
 *
 * @property \App\Model\Table\CategoriesTable $Categories
 * @method \App\Model\Entity\Category[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CategoriesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        
        $this->paginate = [
            'limit' => 10,
            'contain' => ['Articles'],
            'order' => [
                'Categories.id' => 'DESC'
            ]
        ];
        $categories = $this->paginate($this->Categories);
        //debug(json_encode( $categories, JSON_PRETTY_PRINT)); exit;
        $this->set(compact('categories'));
        $this->viewBuilder()->setLayout('admin');
    }

    public function category($id = null){
        $article = TableRegistry::get('Articles');
        $articles = $this->paginate( $article->find('all')
          ->where(['category_id'=>$id])
          ->contain(['users','categories'])
        );

        $category = $this->Categories->get($id, [
            'contain' => ['Articles'],
        ]);


        $categories = $article->Categories->find('list', ['limit' => 200]);
        $users = $article->Users->find('list', ['limit' => 200]);

       //debug(json_encode( $users, JSON_PRETTY_PRINT)); exit;
        $this->set('articles', $articles);
        $this->set('category', $category);
        $this->set(compact('categories', 'users'));
        $this->viewBuilder()->setLayout('admin');
    }


    public function fullsearch(){
      $article = TableRegistry::get('Articles');
      $search = $_POST['searchText'];
      $sql = $this->$article->find('all',[
        'conditions' => [
          'OR'=> [
            ['title LIKE' => '%'.$search.'%']
          ]
        ],
        'order' => ['Articles.id' => 'DESC']
      ]);
      $this->set('results', $this->paginate($sql));
    }

    // for fronten
    public function cats(){
        $this->paginate = [
            'limit' => 10,
            'contain' => ['Articles'],
            'order' => [
                'Categories.id' => 'DESC'
            ]
        ];
        $cats = $this->paginate($this->Categories);
        //debug(json_encode( $categories, JSON_PRETTY_PRINT)); exit;
        $this->set(compact('cats'));
        //debug(json_encode( $cats, JSON_PRETTY_PRINT)); exit;
        $this->viewBuilder()->setLayout('user');
    }

    public function articles($id = null){
        $article = TableRegistry::get('Articles');
        $articles = $this->paginate( $article->find('all')
          ->where(['category_id'=>$id])
          ->contain(['users','categories']),
          ['limit'=>10]
        );

        $category = $this->Categories->get($id, [
            'contain' => ['Articles'],
        ]);


        $categories = $article->Categories->find('list', ['limit' => 200]);
        $users = $article->Users->find('list', ['limit' => 200]);

       //debug(json_encode( $users, JSON_PRETTY_PRINT)); exit;
        $this->set('articles', $articles);
        $this->set('category', $category);
        $this->set(compact('categories', 'users'));
        $this->viewBuilder()->setLayout('user');
    }

    /**
     * View method
     *
     * @param string|null $id Category id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $category = $this->Categories->get($id, [
            'contain' => ['Articles'],
        ]);

        $this->set('category', $category);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $category = $this->Categories->newEmptyEntity();
        if ($this->request->is('post')) {
            //debug(json_encode( $this->request->getData(), JSON_PRETTY_PRINT));exit;
            $category = $this->Categories->patchEntity($category, $this->request->getData());
            if ($this->Categories->save($category)) {
                $this->Flash->success(__('The category has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The category could not be saved. Please, try again.'));
        }
        $this->set(compact('category'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Category id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $id = $this->request->getData('id');
        $category = $this->Categories->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            //debug(json_encode( $this->request->getData(), JSON_PRETTY_PRINT)); exit;
            $category = $this->Categories->patchEntity($category, $this->request->getData());
            $category->description = $this->request->getData('description');
            if ($this->Categories->save($category)) {
                $this->Flash->success(__('The category has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The category could not be saved. Please, try again.'));
        }
        $this->set(compact('category'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Category id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $category = $this->Categories->get($id);
        if ($this->Categories->delete($category)) {
            $this->Flash->success(__('The category has been deleted.'));
        } else {
            $this->Flash->error(__('The category could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function beforeFilter(\Cake\Event\EventInterface $event) {
      $this->Auth->allow(['cats','articles']);
      if (!$this->Auth->user()) {
          $this->Auth->setConfig('authError', false);
      }
    }

}
