<?php

class OnAir24hModel extends Model {

    protected $k_id_24h_real;
    protected $k_id_onair;
    protected $k_id_follow_up_24h;
    protected $d_fin24h;
    protected $n_comentario;
    //Los campos que desea ocultar para que no se reflejen en la vista.
    protected $table = "on_air24h";
    //Los campos que desea exculir del modelo.
    protected $exclude = ["hidden", "exclude", "table", "class", "db", "__data"];

    public function __construct($properties = null) {
        parent::__construct($properties);
        $this->class = get_class($this);
    }

    public function setKId24hReal($k_id_24h_real) {
        $this->k_id_24h_real = $k_id_24h_real;
    }

    public function getKId24hReal() {
        return $this->k_id_24h_real;
    }

    public function setKIdOnair($k_id_onair) {
        $this->k_id_onair = $k_id_onair;
    }

    public function getKIdOnair() {
        return $this->k_id_onair;
    }

    public function setKIdFollowUp24h($k_id_follow_up_24h) {
        $this->k_id_follow_up_24h = $k_id_follow_up_24h;
    }

    public function getKIdFollowUp24h() {
        return $this->k_id_follow_up_24h;
    }

    public function setDFin24h($d_fin24h) {
        $this->d_fin24h = $d_fin24h;
    }

    public function getDFin24h() {
        return $this->d_fin24h;
    }

    public function setNComentario($n_comentario) {
        $this->n_comentario = $n_comentario;
    }

    public function getNComentario() {
        return $this->n_comentario;
    }

}
