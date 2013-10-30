<?php

if(! mdh_plugin_is_ready(mdh_current_plugin_name())) {
	mdh_handle_error_ugly();
}

switch(Params::getParam("page")) {
	case "ajax":
		$do = new Madhouse_HelloWorld_Controllers_Web();
		$do->doModel();
	break;
	default:
		mdh_handle_error_ugly();
	break;
}

?>