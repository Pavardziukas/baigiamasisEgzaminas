<?php


namespace App\Reviews;

use App\App;

class Model
{
    private $table_name = 'reviews';

    public function __construct()
    {
        App::$db->createTable($this->table_name);
    }

    public function insert(Review $review)
    {
        return App::$db->insertRow($this->table_name, $review->getData());
    }

    /**
     * @param array $conditions
     * @return array
     */
    public function get($conditions = [])
    {
        $reviews = [];
        $rows = App::$db->getRowsWhere($this->table_name, $conditions);

        foreach ($rows as $row_id => $row_data) {
            $row_data['id'] = $row_id;
            $reviews[] = new Review($row_data);
        }

        return $reviews;
    }

    public function __destruct()
    {
        App::$db->save();
    }
}