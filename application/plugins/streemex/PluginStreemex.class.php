<?php 

class PluginStreemex extends Plugin {

	protected $aInherits = array(
            'module'  =>array('ModuleComment'=>'_ModuleComment')
          );
          
  public function Activate() {
    return true;
	}

	public function Init() {

  }

}

?>
