<?php

/**
 * @copyright   Copyright (C) 2019 Jeffrey Bostoen
 * @license     https://www.gnu.org/licenses/gpl-3.0.en.html
 *
 * Localized data
 */

Dict::Add('ES CR', 'Spanish', 'Español, Castellaño', array(

	'Class:SSID' => 'SSID',
	'Class:SSID+' => 'Red inalámbrica',
	'Class:SSID/Attribute:org_id' => 'Organización',
	'Class:SSID/Attribute:name' => 'Nombre',
	'Class:SSID/Attribute:password' => 'Contraseña',
	'Class:SSID/Attribute:vlan_tag_id' => 'Etiqueta VLAN',
	'Class:SSID/Attribute:security_protocol' => 'Protocolo',
	'Class:SSID/Attribute:security_protocol+' => '¿Qué protocolo de seguridad se aplica? De mejor a peor: WPA3 / WPA2 / WPA / WEP / Abierto',
	'Class:SSID/Attribute:security_protocol/Value:wep' => 'WEP',
	'Class:SSID/Attribute:security_protocol/Value:wpa' => 'WPA',
	'Class:SSID/Attribute:security_protocol/Value:wpa2' => 'WPA2',
	'Class:SSID/Attribute:security_protocol/Value:wpa3' => 'WPA3',
	'Class:SSID/Attribute:security_protocol/Value:open' => 'Abierto',
	'Class:SSID/Attribute:security_target' => 'Objetivo',
	'Class:SSID/Attribute:security_target/Value:personal' => 'Personal (Pre Shared Key)',
	'Class:SSID/Attribute:security_target/Value:enterprise' => 'Empresarial (verificación 802.1)',
	'Class:SSID/Attribute:security_target/Value:not_applicable' => 'No aplica',
	'Class:SSID/Attribute:security_tkip' => 'TKIP',
	'Class:SSID/Attribute:security_tkip/Value:yes' => 'Si',
	'Class:SSID/Attribute:security_tkip/Value:no' => 'No',
	'Class:SSID/Attribute:security_aes' => 'AES',
	'Class:SSID/Attribute:security_aes/Value:yes' => 'Si',
	'Class:SSID/Attribute:security_aes/Value:no' => 'No',
	'Class:SSID/Attribute:band_2_4_GHz' => 'Banda 2.4 GHz',
	'Class:SSID/Attribute:band_2_4_GHz/Value:yes' => 'Si',
	'Class:SSID/Attribute:band_2_4_GHz/Value:no' => 'No',
	'Class:SSID/Attribute:band_5_GHz' => 'Banda 5 GHz',
	'Class:SSID/Attribute:band_5_GHz/Value:yes' => 'Si',
	'Class:SSID/Attribute:band_5_GHz/Value:no' => 'No',
	'Class:SSID/Attribute:channel_choice' => 'Elección de canal',
	'Class:SSID/Attribute:channel_choice/Value:automatic' => 'Automático',
	'Class:SSID/Attribute:channel_choice/Value:manual' => 'Manual',
	'Class:SSID/Attribute:channel_number' => 'Canal número',
	'Class:SSID/Attribute:networkdevices_list' => 'Puntos de acceso inalámbricos',
	
	'Class:lnkNetworkDeviceToSSID' => 'Vincular dispositivo de red / SSID',
	'Class:lnkNetworkDeviceToSSID/Attribute:networkdevice_id' => 'Dispositivo de red',
	'Class:lnkNetworkDeviceToSSID/Attribute:ssid_id' => 'SSID',
	
	'Class:VLAN/Attribute:ssid_list' => 'SSIDs',
	
	'SSID:General' => 'General',
	'SSID:Security' => 'Seguridad',
	'SSID:Radio' => 'Radio',
	
));
