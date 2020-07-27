<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Articles Controller
 *
 * @property \App\Model\Table\ArticlesTable $Articles
 * @method \App\Model\Entity\Article[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ArticlesController extends AppController
{
    //public $components = array('RequestHandler');
    public function initialize(): void
    {
        parent::initialize();
        $this->loadComponent('RequestHandler');
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'limit' => 10,
            'contain' => ['Categories','Users'],
            'order' => [
                'Articles.date_created' => 'DESC'
            ]
        ];
        $articles = $this->paginate($this->Articles);


        //debug(json_encode( $articles, JSON_PRETTY_PRINT)); exit;
        $categories = $this->Articles->Categories->find('list', ['limit' => 200]);
        $users = $this->Articles->Users->find('list', ['limit' => 200]);
        $this->set(compact('categories', 'users'));
        $this->set(compact('articles'));
        $this->viewBuilder()->setLayout('admin');
    }

    /**
     * View method
     *
     * @param string|null $id Article id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $article = $this->Articles->get($id, [
            'contain' => ['Categories', 'Users'],
        ]);

        //$related = $this->Articles->find()->where(['id !='=>$id]);
        $related = $this->paginate( $this->Articles->find('all')
          ->where(['Articles.id !='=>$id])->where(['Articles.category_id ='=>$article->category_id])
          ->contain(['users','categories'])
        );
        //debug(json_encode( $related, JSON_PRETTY_PRINT)); exit;

        $this->set('article', $article);
        $this->set('related', $related);
        $this->viewBuilder()->setLayout('admin');
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $article = $this->Articles->newEmptyEntity();
        if ($this->request->is('post')) {
            $article = $this->Articles->patchEntity($article, $this->request->getData());
            $article->user_id = $this->Auth->user('id');
            if ($this->Articles->save($article)) {
                $this->Flash->success(__('The article has been saved.'));

                return $this->redirect($this->referer());
            }
            $this->Flash->error(__('The article could not be saved. Please, try again.'));
        }
        $categories = $this->Articles->Categories->find('list', ['limit' => 200]);
        $users = $this->Articles->Users->find('list', ['limit' => 200]);
        $this->set(compact('article', 'categories', 'users'));
        $this->viewBuilder()->setLayout('admin');
    }

    /**
     * Edit method
     *
     * @param string|null $id Article id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $article = $this->Articles->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $article = $this->Articles->patchEntity($article, $this->request->getData());
            //debug(json_encode( $this->Auth->user('id'), JSON_PRETTY_PRINT)); exit;
            $article->user_id = $this->Auth->user('id');
            $article->date_created = date("Y-m-d h:m:s");
            if ($this->Articles->save($article)) {
                $this->Flash->success(__('The article has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The article could not be saved. Please, try again.'));
        }
        $categories = $this->Articles->Categories->find('list', ['limit' => 200]);
        $users = $this->Articles->Users->find('list', ['limit' => 200]);
        $this->set(compact('article', 'categories', 'users'));
        $this->viewBuilder()->setLayout('admin');
    }

    /**
     * Delete method
     *
     * @param string|null $id Article id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $article = $this->Articles->get($id);
        if ($this->Articles->delete($article)) {
            $this->Flash->success(__('The article has been deleted.'));
        } else {
            $this->Flash->error(__('The article could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function saveimage(){
        // Get image name
        $image = $_FILES['post_image']['name'];

        // image file directory
        $target = "img/" . basename($image);

        if (move_uploaded_file($_FILES['post_image']['tmp_name'], $target)) {
            echo BASE_URL . $target;
            exit();
        }else{
            echo "Failed to upload image";
            exit();
        }
    }

    public function fullsearch(){
      $search = $_POST['searchText'];
      $sql = $this->Articles->find('all',[
        'conditions' => [
          'OR'=> [
            ['title LIKE' => '%'.$search.'%']
          ]
        ],
        'order' => ['Articles.id' => 'DESC']
      ]);
      $this->set('results', $this->paginate($sql));
    }

    public function results(){
      //debug(json_encode( "vincent oti", JSON_PRETTY_PRINT)); exit;
      $search = $_POST['searchText'];
      $sql = $this->Articles->find('all',[
        'conditions' => [
          'OR'=> [
            ['title LIKE' => '%'.$search.'%']
          ]
        ],
        'order' => ['Articles.id' => 'DESC']
      ]);
      $this->set('results', $this->paginate($sql));
    }

    public function details($id = null)
    {
        $article = $this->Articles->get($id, [
            'contain' => ['Categories', 'Users'],
        ]);

        //$related = $this->Articles->find()->where(['id !='=>$id]);
        $related = $this->paginate( $this->Articles->find('all')
          ->where(['Articles.id !='=>$id])->where(['Articles.category_id ='=>$article->category_id])
          ->contain(['users','categories'])
        );
        //debug(json_encode( $related, JSON_PRETTY_PRINT)); exit;

        $this->set('article', $article);
        $this->set('related', $related);
        $this->viewBuilder()->setLayout('user');
    }

    public function beforeFilter(\Cake\Event\EventInterface $event) {
      $this->Auth->allow(['saveimage','results','details']);
      //$this->getEventManager()->off($this->Csrf);

      if (!$this->Auth->user()) {
          $this->Auth->setConfig('authError', false);
      }
    }
}
