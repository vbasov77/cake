<?php


namespace App\Controller;


class PersonsController extends AppController
{
    /**
     * @var \Cake\Datasource\RepositoryInterface|null
     */
    /**
     * @var \Cake\Datasource\RepositoryInterface|null
     */
    /**
     * @var \Cake\Datasource\RepositoryInterface|null
     */


    public function index()
    {
        $personsTable = $this->getTableLocator()->get('Persons');
        //Выполнится, если метод POST
        if ($this->request->is('post')) {
            // Создание новой записи в базе...
            $persons = $personsTable->newEntity();
            $persons->name = strip_tags($this->request->getData('name'));// strip_tags - Удалили теги
            $persons->age = strip_tags($this->request->getData('age'));
            if ($personsTable->save($persons)) { // Записали в базу
                return $this->redirect('/');
            }
        }
        // Выполнится, если метод GET
        if ($this->request->is('get')) {
            $persons = $personsTable->find()->toArray(); // Получили все записи
            $allAge = []; // Создали возрастной массив
            foreach ($persons as $person) { // Добавили в массив все записи с возрастом
                $allAge[] = $person->age;
            }
            $this->set(compact('allAge'));
            $this->set(compact('persons'));
        }
    }

    public function edit($id = null)
    {
        // Редактирование в БД  Persons

        // Выполнится, если метод GET
        if ($this->request->is('get')) {
            // Получим данные по ID для редактирования
            $person = $this->Persons->find('all')->where(['id' => $id])->first();
            $this->set(compact('person', $person));
        }

        //Выполнится, если метод POST
        if ($this->request->is('post')) {
            $query = $this->getTableLocator()->get('Persons')->find();
            // Изменение в базе Persons по ID
            $query->update()
                ->set([
                    'name' => strip_tags($this->request->getData('name')),
                    'age' => strip_tags($this->request->getData('age')),
                ])
                ->where(['id' => $id])
                ->execute();
            return $this->redirect('/');
        }
    }

    public function delete($id = null)
    {
        // Удаление из БД Persons
        $person = $this->Persons->find('all')->where(['id' => $id])->first();
        if ($this->Persons->delete($person)) {
            return $this->redirect('/');
        }
    }
}
