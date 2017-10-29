<?php

class ScaledOnAir extends Model {

    protected $k_id_scaled_on_air;
    protected $k_id_onair;
    protected $k_id_sacled;
    protected $d_time_escalado__;
    protected $d_fecha_escalado;
    protected $i_cont_esc_imp;
    protected $time_esc_imp__;
    protected $i_cont_esc_rf__;
    protected $i_time_esc_rf__;
    protected $cont_esc_npo__;
    protected $i_time_esc_npo__;
    protected $cont_esc_care__;
    protected $i_time_esc_care__;
    protected $i_cont_esc_gdrt__;
    protected $i_time_esc_gdrt__;
    protected $i_cont_esc_oym__;
    protected $time_esc_oym__;
    protected $cont_esc_calidad__;
    protected $i_time_esc_calidad__;
    protected $n_tipificacion_solucion;
    protected $n_detalle_solucion;
    protected $n_ultimo_subestado_de_escalamiento;
    
    //Los campos que desea ocultar para que no se reflejen en la vista.    
    protected $table = "scaled_on_air";
    //Los campos que desea exculir del modelo.
    protected $exclude = ["hidden", "exclude", "table", "class", "db", "__data"];

    public function __construct($properties = null) {
        parent::__construct($properties);
        $this->class = get_class($this);
    }
    
        public function setKIdScaledOnAir($k_id_scaled_on_air) {
        $this->k_id_scaled_on_air = $k_id_scaled_on_air;
    }
    public function getKIdScaledOnAir() {
        return $this->k_id_scaled_on_air;
    }
    public function setKIdOnair($k_id_onair) {
        $this->k_id_onair = $k_id_onair;
    }
    public function getKIdOnair() {
        return $this->k_id_onair;
    }
    public function setKIdSacled($k_id_sacled) {
        $this->k_id_sacled = $k_id_sacled;
    }
    public function getKIdSacled() {
        return $this->k_id_sacled;
    }
    public function setDTimeEscalado($d_time_escalado__) {
        $this->d_time_escalado__ = $d_time_escalado__;
    }
    public function getDTimeEscalado() {
        return $this->d_time_escalado__;
    }
    public function setDFechaEscalado($d_fecha_escalado) {
        $this->d_fecha_escalado = $d_fecha_escalado;
    }
    public function getDFechaEscalado() {
        return $this->d_fecha_escalado;
    }
    public function setIContEscImp($i_cont_esc_imp) {
        $this->i_cont_esc_imp = $i_cont_esc_imp;
    }
    public function getIContEscImp() {
        return $this->i_cont_esc_imp;
    }
    public function setTimeEscImp($time_esc_imp__) {
        $this->time_esc_imp__ = $time_esc_imp__;
    }
    public function getTimeEscImp() {
        return $this->time_esc_imp__;
    }
    public function setIContEscRf($i_cont_esc_rf__) {
        $this->i_cont_esc_rf__ = $i_cont_esc_rf__;
    }
    public function getIContEscRf() {
        return $this->i_cont_esc_rf__;
    }
    public function setITimeEscRf($i_time_esc_rf__) {
        $this->i_time_esc_rf__ = $i_time_esc_rf__;
    }
    public function getITimeEscRf() {
        return $this->i_time_esc_rf__;
    }
    public function setContEscNpo($cont_esc_npo__) {
        $this->cont_esc_npo__ = $cont_esc_npo__;
    }
    public function getContEscNpo() {
        return $this->cont_esc_npo__;
    }
    public function setITimeEscNpo($i_time_esc_npo__) {
        $this->i_time_esc_npo__ = $i_time_esc_npo__;
    }
    public function getITimeEscNpo() {
        return $this->i_time_esc_npo__;
    }
    public function setContEscCare($cont_esc_care__) {
        $this->cont_esc_care__ = $cont_esc_care__;
    }
    public function getContEscCare() {
        return $this->cont_esc_care__;
    }
    public function setITimeEscCare($i_time_esc_care__) {
        $this->i_time_esc_care__ = $i_time_esc_care__;
    }
    public function getITimeEscCare() {
        return $this->i_time_esc_care__;
    }
    public function setIContEscGdrt($i_cont_esc_gdrt__) {
        $this->i_cont_esc_gdrt__ = $i_cont_esc_gdrt__;
    }
    public function getIContEscGdrt() {
        return $this->i_cont_esc_gdrt__;
    }
    public function setITimeEscGdrt($i_time_esc_gdrt__) {
        $this->i_time_esc_gdrt__ = $i_time_esc_gdrt__;
    }
    public function getITimeEscGdrt() {
        return $this->i_time_esc_gdrt__;
    }
    public function setIContEscOym($i_cont_esc_oym__) {
        $this->i_cont_esc_oym__ = $i_cont_esc_oym__;
    }
    public function getIContEscOym() {
        return $this->i_cont_esc_oym__;
    }
    public function setTimeEscOym($time_esc_oym__) {
        $this->time_esc_oym__ = $time_esc_oym__;
    }
    public function getTimeEscOym() {
        return $this->time_esc_oym__;
    }
    public function setContEscCalidad($cont_esc_calidad__) {
        $this->cont_esc_calidad__ = $cont_esc_calidad__;
    }
    public function getContEscCalidad() {
        return $this->cont_esc_calidad__;
    }
    public function setITimeEscCalidad($i_time_esc_calidad__) {
        $this->i_time_esc_calidad__ = $i_time_esc_calidad__;
    }
    public function getITimeEscCalidad() {
        return $this->i_time_esc_calidad__;
    }
    public function setNTipificacionSolucion($n_tipificacion_solucion) {
        $this->n_tipificacion_solucion = $n_tipificacion_solucion;
    }
    public function getNTipificacionSolucion() {
        return $this->n_tipificacion_solucion;
    }
    public function setNDetalleSolucion($n_detalle_solucion) {
        $this->n_detalle_solucion = $n_detalle_solucion;
    }
    public function getNDetalleSolucion() {
        return $this->n_detalle_solucion;
    }
    public function setNUltimoSubestadoDeEscalamiento($n_ultimo_subestado_de_escalamiento) {
        $this->n_ultimo_subestado_de_escalamiento = $n_ultimo_subestado_de_escalamiento;
    }
    public function getNUltimoSubestadoDeEscalamiento() {
        return $this->n_ultimo_subestado_de_escalamiento;
    }


}

