<?php

class Users extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    public $id;

    /**
     *
     * @var string
     */
    public $nama_awal;

    /**
     *
     * @var integer
     */
    public $nama_belakang;

    /**
     *
     * @var integer
     */
    public $jenis_kelamin;

    /**
     *
     * @var integer
     */
    public $tanggal_lahir;

    /**
     *
     * @var integer
     */
    public $alamat;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("oop_php");
        $this->setSource("users");
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Users[]|Users|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null): \Phalcon\Mvc\Model\ResultsetInterface
    {
        return parent::find($parameters);
    }

    // /**
    //  * Allows to query the first record that match the specified conditions
    //  *
    //  * @param mixed $parameters
    //  * @return Users|\Phalcon\Mvc\Model\ResultInterface
    //  */
    // public static function findFirst($parameters = null)
    // {
    //     return parent::findFirst($parameters);
    // }

}
