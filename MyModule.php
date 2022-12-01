<?php
namespace Stanford\MyModule;

class MyModule extends \ExternalModules\AbstractExternalModule {
	public function __construct() {
		parent::__construct();
		// Other code to run when object is instantiated
	}
	
	public function redcap_add_edit_records_page( int $project_id, string $instrument, int $event_id ) {
		
	}

	
	public function redcap_module_configure_button_display( ) {
		
	}

	

}