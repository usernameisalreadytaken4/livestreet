<?php

/*-------------------------------------------------------
*
*   LiveStreet Engine Social Networking
*
*--------------------------------------------------------*/

class PluginLsemoji_HookLsemoji extends Hook {
	
	public function RegisterHook() {
		$this->AddHook('engine_init_complete','addFiles');
		$this->AddHook('template_html_head_end','addJs');
	}

	public function addFiles() {
		$this->Viewer_AppendStyle(Plugin::GetTemplatePath(__CLASS__).'css/lsemoji.css');
		$this->Viewer_AppendScript(Plugin::GetTemplatePath(__CLASS__).'js/lsemoji.js');
	}
	
	public function addJs() {
		return "<script>var LSEMOJI_TINYMCE = " . json_encode(Config::Get('view.tinymce')) . "; var LSEMOJI_TEMPLATE_PATH = " . json_encode(Plugin::GetTemplateWebPath(__CLASS__)) . ";</script>";
	}	
}
?>