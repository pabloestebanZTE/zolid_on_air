<?php

class WorkModel extends Model {

    protected $k_id_work;
    protected $n_name_ork;

    //Los campos que desea ocultar para que no se reflejen en la vista.
    protected $table = "work";
    //Los campos que desea exculir del modelo.
    protected $exclude = ["hidden", "exclude", "table", "class", "db", "__data"];

    public function __construct($properties = null) {
        parent::__construct($properties);
        $this->class = get_class($this);
    }

        public function setKIdWork($k_id_work) {
        $this->k_id_work = $k_id_work;
    }
    public function getKIdWork() {
        return $this->k_id_work;
    }
    public function setNNameOrk($n_name_ork) {
        $this->n_name_ork = $n_name_ork;
    }
    public function getNNameOrk() {
        return $this->n_name_ork;
    }


}
