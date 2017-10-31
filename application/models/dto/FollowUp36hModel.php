<?php

class FollowUp36hModel extends Model {

    protected $k_id_follow_up_36h;
    protected $k_id_user;

    //Los campos que desea ocultar para que no se reflejen en la vista.
    protected $table = "follow_up_36h";
    //Los campos que desea exculir del modelo.
    protected $exclude = ["hidden", "exclude", "table", "class", "db", "__data"];

    public function __construct($properties = null) {
        parent::__construct($properties);
        $this->class = get_class($this);
    }

        public function setKIdFollowUp36h($k_id_follow_up_36h) {
        $this->k_id_follow_up_36h = $k_id_follow_up_36h;
    }
    public function getKIdFollowUp36h() {
        return $this->k_id_follow_up_36h;
    }
    public function setKIdUser($k_id_user) {
        $this->k_id_user = $k_id_user;
    }
    public function getKIdUser() {
        return $this->k_id_user;
    }


}
