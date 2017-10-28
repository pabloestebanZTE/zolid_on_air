<?php

class StatusVm extends Model {

    protected $K_ID_SVM;
    protected $N_NAME_VM;

    //Los campos que desea ocultar para que no se reflejen en la vista.
    protected $table = "status_vm";
    //Los campos que desea exculir del modelo.
    protected $exclude = ["hidden", "exclude", "table", "class", "db", "__data"];

    public function __construct($properties = null) {
        parent::__construct($properties);
        $this->class = get_class($this);
    }

        public function setId($K_ID_SVM) {
        $this->K_ID_SVM = $K_ID_SVM;
    }
    public function getId() {
        return $this->K_ID_SVM;
    }
    public function setName($N_NAME_VM) {
        $this->N_NAME_VM = $N_NAME_VM;
    }
    public function getName() {
        return $this->N_NAME_VM;
    }


}
