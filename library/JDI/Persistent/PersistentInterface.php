<?php

namespace JDI\Persistent;

interface PersistentInterface {

    /**
     * @param $adapter
     * @return $this
     */
    public function setAdapter($adapter);

    /**
     * @param $adapter
     * @return mixed
     */
    public function getAdapter($adapter);

    /**
     * @param int $id
     * @param string $table
     * @return array|null
     */
    public function find($id, $table);

    /**
     * @param array $data
     * @param string $table
     * @return bool
     */
    public function insert($data, $table);

    /**
     * @return null|int
     */
    public function getLastInsertId();

    /**
     * @param int $id
     * @param array $data
     * @param string $table
     * @return bool
     */
    public function update($id, $data, $table);

    /**
     * @param int $id
     * @param string $table
     * @return mixed
     */
    public function delete($id, $table);

} 