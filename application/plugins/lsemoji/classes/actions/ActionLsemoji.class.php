<?php

/*-------------------------------------------------------
*
*   LiveStreet Engine Social Networking
*
*--------------------------------------------------------*/

class PluginLsemoji_ActionLsemoji extends ActionPlugin {
	
	public function Init() {
		$this->SetDefaultEvent('list');
	}
	
	protected function RegisterEvent() {
		$this->AddEvent('list', 'showSmiles');
	}
	
	//передаем массив смайликов
	protected function showSmiles() {
		$this->Viewer_AssignAjax('aSmiles', Config::Get('plugin.lsemoji.smiles'));
		$this->Viewer_DisplayAjax('json');
	}

	public function EventShutdown() { }
}
?>