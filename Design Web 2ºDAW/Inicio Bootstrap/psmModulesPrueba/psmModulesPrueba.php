<?php
if (!defined('_PS_VERSION_')) {
    exit;
}
class PsmModulesPrueba extends Module

{
    public function __construct(){

       
        $this->name = 'psmmodulesprueba'; //nombre del módulo el mismo que la carpeta y la clase.
        $this->tab = 'front_office_features'; // pestaña en la que se encuentra en el backoffice.
        $this->version = '1.0.0'; //versión del módulo
        $this->author ='joan'; // autor del módulo
        $this->need_instance = 0; //si no necesita cargar la clase en la página módulos,1 si fuese necesario.
       
        $this->bootstrap = true; //si usa bootstrap plantilla responsive.

            parent ::__construct();

            $this->displayName=$this->l('Test module');
            $this->description=$this->l('Description test module.');
            // $this->confirmUninstall = $this->l('Are you sure you want to uninstall?'); //mensaje de alerta al desinstalar el módulo.


    }

    public function install():bool
    {
        if(!parent::install() || $this->registerHook('displayProductAdditionalInfo')){
            return false;
        }
        return true;
    }

    public function uninstall():bool{
        if(!parent::uninstall() || !$this->unregisterHook('displayProductAdditionalInfo')){
            return false;
        }
        return true;
    }

    public function hookDisplayProductAdditionalInfo($params): string{

        echo 'Hola Mundo';
    }
}