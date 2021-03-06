<?php
class VpnServer extends AppModel {

  public $validate = array(
			   'enabled1' => array('required' => array('rule' => array('notEmpty'), 'message' => 'A WIFI adapter name is required')),
			   'callsign1' => array('required' => array('rule' => array('notEmpty'), 'message' => 'An SSID is required')),
			   'password1' => array('required' => array('rule' => '/^(((128|192|224|240|248|252|254)\.0\.0\.0)|(255\.(0|128|192|224|240|248|252|254)\.0\.0)|(255\.255\.(0|128|192|224|240|248|252|254)\.0)|(255\.255\.255\.(0|128|192|224|240|248|252|254)))$/i', 'message' => 'A valid netmask is required')),
			   'client_ip1' => array('rule' => array('ip'), 'message' => 'Please supply a valid IP address.'),
			   'server_ip1' => array('required' => array('rule' => array('notEmpty'), 'message' => 'Please supply a valid IP address.')),
			   'lan_netmask' => array('required' => array('rule' => '/^(((128|192|224|240|248|252|254)\.0\.0\.0)|(255\.(0|128|192|224|240|248|252|254)\.0\.0)|(255\.255\.(0|128|192|224|240|248|252|254)\.0)|(255\.255\.255\.(0|128|192|224|240|248|252|254)))$/i', 'message' => 'A valid netmask is required')),
			   'lan_dhcp_start' => array('number' => array('rule' => array('range', 0, 254), 'message' => 'A DHCP address between 0 and 254 is required')),
			   'lan_dhcp_end' => array('number' => array('rule' => array('range', 0, 254), 'message' => 'A DHCP address between 0 and 254 is required')),
			   'wired_adapter_name' => array('required' => array('rule' => array('notEmpty'), 'message' => 'A wired adapter name is required')),
			   'wired_interface_mode' => array('required' => array('rule' => '/^(WAN|LAN)$/i', 'message' => 'The wired interface mode must be set to WAN or LAN.')),
			   'wifi_channel' => array('required' => array('rule' => '/^(1|2|3|4|5|6|7|8|9|10|11)$/i', 'message' => 'Specify a valid channel-id.')),
			   'wan_dns1' => array('rule' => array('ip'), 'message' => 'Please supply a valid IP address.'),
			   'wan_dns2' => array('rule' => array('ip'), 'message' => 'Please supply a valid IP address.'),
			   'node_name' => array('required' => array('rule' => array('notEmpty'), 'message' => 'A globally unique nodename with your callsign is required')),
			   'mesh_olsrd_secure_key' => array('required' => array('rule' => array('notEmpty'), 'message' => 'A secure key value is required')),
			   'callsign' => array('required' => array('rule' => array('notEmpty'), 'message' => 'A valid callsign is required'), array('rule' => array('between', 3, 9), 'message' => 'Callsign must be between 3 and 9 characters')), 
			   'ntp_server' => array('required' => array('rule' => array('notEmpty'), 'message' => 'A NTP server is required')),
               
			   );

}

?>
