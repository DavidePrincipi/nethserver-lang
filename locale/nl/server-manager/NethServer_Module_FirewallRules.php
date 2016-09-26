<?php 

/* NethServer_Module_FirewallRules translation, language: en */

$L['FirewallRules_Description'] = 'Beheer firewall regels';
$L['FirewallRules_Tags'] = 'firewall rule policy traffic shaping';
$L['FirewallRules_Title'] = 'Firewall regels';

$L['general_header'] = 'Algemeen';
$L['General_Title'] = 'Algemene opties';
$L['ExternalPing_label'] = 'Ping vanaf Internet';
$L['permissive_label'] = 'Toegestaan';
$L['Policy_label'] = 'Verkeer naar Internet (rode interface)';
$L['strict_label'] = 'Geblokkeerd';
$L['enabled_label'] = 'Ingeschakeld';
$L['disabled_label'] = 'Uitgeschakeld';
$L['MACValidation_label'] = 'MAC validatie (IP/MAC binding)';
$L['MACValidationPolicy_label'] = 'Beleid voor hosts zonder IP/MAC binding (DHCP reservering)';
$L['drop_label'] = 'Verkeer blokkeren';
$L['accept_label'] = 'Verkeer toestaan';

$L['Edit_header'] = 'Regel #${0} bewerken';
$L['status_label'] = 'Ingeschakeld';
$L['Action_label'] = 'Actie';
$L['Rule_label'] = 'Rule';
$L['ActionReject_label'] = 'Afwijzen';
$L['ActionAccept_label'] = 'Accepteren';
$L['ActionDrop_label'] = 'Negeren';
$L['Source_label'] = 'Bron';
$L['Destination_label'] = 'Bestemming';
$L['Service_label'] = 'Service';
$L['Time_label'] = 'Time condition';
$L['PickSource_label'] = 'Selecteer er een...';
$L['PickDestination_label'] = 'Selecteer er een...';
$L['PickService_label'] = 'Selecteer er een...';
$L['LogType_label'] = 'Schrijf naar log als deze regel overeenkomt';

$L['PickObject_SrcRaw_header'] = 'Kies het bron pakket voor "${RuleId}"';
$L['PickObject_DstRaw_header'] = 'Kies het doel pakket voor "${RuleId}"';
$L['PickObject_ServiceRaw_header'] = 'Kies het service protocol voor regel "${RuleId}"';
$L['PickObject_TimeRaw_header'] = 'Choose the time condition for rule "${RuleId}"';

$L['Create_last_label'] = 'Creëer de regel onderaan';
$L['Create_first_label'] = 'Creëer de regel bovenaan';
$L['Create_header'] = 'Creëer firewall regel';
$L['Copy_header'] = 'Creëer een kopie van #${0}';
$L['Commit_label'] = 'Veranderingen toepassen';
$L['Edit_label'] = 'Aanpassen';
$L['EditRule_label'] = 'Edit rule';
$L['EditService_label'] = 'Edit service';
$L['Copy_label'] = 'Kopiëren';
$L['Delete_label'] = 'Verwijderen';
$L['Index_header'] = 'Firewall regels';
$L['RuleId_label'] = '#${0}';
$L['SearchPlaceholder_label'] = 'Zoeken...';

$L['Delete_header'] = 'Verwijder regel #${0}';
$L['Delete_message'] = 'Bevestig verwijderen van firewall regel #${id}';
$L['HostGroups_create'] = 'Creëer host groep "${0}"';
$L['Hosts_create'] = 'Creëer host "${0}"';
$L['Zones_create'] = 'Creeer zone"${0}"';
$L['Services_create'] = 'Create service object "${0}"';
$L['Time_create'] = 'Create time condition "${0}"';
$L['IpRange_create'] = 'Creëer IP bereik "${0}"';
$L['Cidr_create'] = 'Creëer CIDR netwerk "${0}"';

$L['A_new_rule_label'] = "Nieuwe regel";
$L['NoRulesDefined_label'] = 'Er zijn regels gedefinieerd. Creeer de eerste nu!';

$L['any_service_label'] = 'Iedere service';
$L['any_src_dst_label'] = 'eke host';
$L['Time_always'] = 'Always';
$L['Type_any_label'] = 'any';
$L['Type_fw_label'] = 'firewall';
$L['host_label'] = 'host';
$L['zone_label'] = 'zone';
$L['iprange_label'] = 'IP bereik';
$L['cidr_label'] = 'CIDR netwerk';
$L['host-group_label'] = 'groep';
$L['role_label'] = 'interface';
$L['confirm_reload_label'] = 'Er is geen verandering toegepast.';

$L['FirewallObject_any_Title'] = 'Iedere';
$L['FirewallObject_fw_Title'] = 'Firewall';
$L['FirewallObject_host_Title'] = 'Host ${key}';
$L['FirewallObject_local_Title'] = 'LAN host ${key}';
$L['FirewallObject_remote_Title'] = 'Host ${key}';
$L['FirewallObject_role_Title'] = 'Rol ${key}';
$L['FirewallObject_zone_Title'] = 'Zone ${key}';
$L['FirewallObject_host-group_Title'] = 'Host groep ${key}';
$L['FirewallObject_fwservice_Title'] = '${key} - service object';
$L['FirewallObject_time_Title'] = '${key} - time condition';
$L['FirewallObject_service_Title'] = '${key} - network service';
$L['FirewallObject_ndpi_Title'] = '${key} - DPI protocol';
$L['FirewallObject_iprange_Title'] = 'IP bereik ${key}';
$L['FirewallObject_cidr_Title'] = 'CIDR netwerk ${key}';

$L['Show_x_outof_y_label'] = 'Overzicht van ${partial} resultaten van ${total}';
$L['ActionRoute_label'] = 'Route to ${0}';
$L['ActionRouteIndex_label'] = '${0}';
$L['ActionLog_label'] = 'Log';

$L['ShowAction_label'] = 'Show';
$L['ShowRules_label'] = 'Firewall';
$L['ShowRoutes_label'] = 'Policy routing';
$L['ShowServices_label'] = 'Network services';
$L['ShowTrafficShaping_label'] = 'Traffic shaping';

$L['ActionPriorityHigh_label'] = 'High priority';
$L['ActionPriorityLow_label'] = 'Low priority';
$L['ActionPrioLo_label'] = 'Lo-Prio';
$L['ActionPrioHi_label'] = 'Hi-Prio';

$L['valid_platform,fwrule-modify,fwrule-route2provider,3'] = 'Route rules do not allow the red zone to be set as Source.';
$L['valid_platform,fwrule-modify,fwrule-route2provider,4'] = 'Route rules allow only the following Destination types: zone, host, ip range, cidr, red.';
$L['valid_platform,fwrule-modify,fwrule-localservice,3'] = 'Selecting "local service" requires the "firewall" destination.';
$L['valid_platform,fwrule-modify,fwrule-trafficshaping,3'] = 'Traffic shaping rules do not allow the red zone to be set as source';
$L['valid_platform,fwrule-modify,fwrule-trafficshaping,4'] = 'Traffic shaping rules allow only the following Destination types: zone, host, IP range, CIDR, red';