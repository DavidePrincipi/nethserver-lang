<?php 

/* NethServer_Module_NetworkAdapter translation, language: en */

$L['bootproto_dhcp_label'] = 'DHCP';
$L['bootproto_label'] = 'Назначения IP';
$L['bootproto_none_label'] = 'Постояный';
$L['blue_label'] = 'Гости (синий)';
$L['device_label'] = 'Устройство';
$L['gateway_label'] = 'Шлюз';
$L['green_label'] = 'LAN (green)';
$L['hwaddr_label'] = 'Адрес MAC';
$L['ipaddr_label'] = 'Адрес IP';
$L['orange_label'] = 'DMZ (orange)';
$L['Key_label'] = 'Устройство';
$L['netmask_label'] = 'Сетевая маска';
$L['NetworkAdapter_Description'] = 'Изменить настройки сети';
$L['NetworkAdapter_Tags'] = 'network adapter ethernet networks';
$L['NetworkAdapter_Title'] = 'Сеть';
$L['red_label'] = 'Internet (Красный)';
$L['role_label'] = 'Роль';
$L['update_header_label'] = 'Обновить устройство';
$L['interface-config_label'] = 'Настройка интерфейса';
$L['valid_platform,interface-config,interface-role,3'] = "DHCP может быть использован только на Красных интерфейсах";
$L['valid_platform,interface-config,interface-role,4'] = "Невозможно удалить последний Зеленый интерфейс";
$L['No'] = 'Нет';
$L['Yes'] = 'Да';
$L['type_alias_label'] = 'Псевдоним';
$L['type_bridge_label'] = 'Мост';
$L['type_bond_label'] = 'Bond';
$L['type_vlan_label'] = 'VLAN';
$L['SetIpAddress_header'] = 'Configure IP assignment - ${0}';
$L['CreateLogicalInterface_label'] = 'Новый интерфейс';
$L['CreateLogicalInterface_header'] = 'Новый логический интерфейс';
$L['vlanTag_label'] = 'Тэг';
$L['vlan_label'] = 'Интерфейс';
$L['InterfaceType_label'] = 'Тип';
$L['Next_label'] = 'Далее';
$L['Back_label'] = 'Назад';
$L['Edit_label'] = 'Изменить';
$L['Edit_header'] = 'Изменить ${dev} - ${bus} ${model}';
$L['Edit_description'] = "Состояние соединения \${link}\nСкорость \${speed} Mbit/s\nДрайвер \${driver}\nАдрес Mac \${mac}";
$L['Link_status_up'] = 'up';
$L['Link_status_down'] = 'down';
$L['Link_status_na'] = 'N/A';
$L['speed_label'] = 'Скорость ${0}';
$L['Confirm_header'] = 'Создать ${role} устройство ${device}';
$L['Action_create_bridge'] = 'Создать новый мост ${device} с ${parts}';
$L['Action_create_bond'] = 'Create a new bond interface ${device} with ${parts}';
$L['Action_create_vlan'] = 'Создать новое устройство VLAN ${device} на ${parts}';
$L['Action_create_role'] = 'Установить роль "${role}"';
$L['Action_set_static_ip'] = 'Установить постоянный IP ${ipaddr}/${netmask}';
$L['Action_use_dhcp'] = 'Получить настройку IP с сервера DHCP';
$L['Action_use_gateway'] = 'Использовать шлюз ${gateway}';
$L['Action_use_no_gateway'] = 'Не устанавливать шлюз';
$L['Create_label'] = 'Создать интерфейс';
$L['bridged_label'] = 'Bridged';
$L['slave_label'] = 'Slave';
$L['CreateIpAlias_header'] = 'Создать псевдоним "${0}"';
$L['ReleasePhysicalInterface_header'] = 'Освободить ${0}';
$L['ReleasePhysicalInterface_roled_message'] = 'Очистить роль ${role} назначенную физическому устройству ${device}?';
$L['ReleasePhysicalInterface_slave_message'] = 'Remove ${device} from bond ${parent}?';
$L['ReleasePhysicalInterface_bridged_message'] = 'Удалить ${device} из моста ${parent}?';
$L['DeleteLogicalInterface_label'] = 'Удалить';
$L['DeleteLogicalInterface_header'] = 'Подтвердить удаление ${0}';
$L['DeleteLogicalInterface_bond_message'] = "Deleting bond interface \${device}.\nPick a successor from its slave interfaces to give it the current role and IP settings.";
$L['DeleteLogicalInterface_bridge_message'] = "Удаление моста \${device}.\nИспользовать освободившееся устройство для назначения текущих значений роли и IP/";
$L['DeleteLogicalInterface_vlan_message'] = "Подтверждение удаления VLAN \${device}.";
$L['DeleteLogicalInterface_alias_message'] = "Подтверждение удаления псевдонима \${device}.";
$L['ReleasePhysicalInterface_label'] = 'Освободить роль';
$L['Release_label'] = 'Освободить роль';
$L['CleanPhysicalInterface_label'] = 'Удалить';
$L['CreateIpAlias_label'] = 'Создать псевдоним IP';
$L['successor_label'] = 'Преемник';
$L['NoSuccessor_label'] = 'Ничего';
$L['bond_label'] = 'Bond';
$L['bridge_label'] = 'Мост';
$L['alias_label'] = 'Псевдоним';
$L['hotspot_label'] = 'Hotspot';
$L['RenameInterface_header'] = 'Назначить роль физическому устройству';
$L['[leave untouched]'] = '-';
$L['cards_label'] = 'Физическое устройство';
$L['CleanPhysicalInterface_header'] = 'Удалить ${0}';
$L['Confirm device ${0} removal'] = 'Удалить устройство ${0} из базы данных?';
$L['Clean_label'] = 'Удалить';
$L['Refresh_label'] = 'Обновить состояние соединения';
$L['roleis_label'] = 'роль';
$L['MAC: ${0}'] = 'MAC ${0}';
$L['Model: ${0}'] = 'Модель ${0}';
$L['All roles are correctly assigned to network cards.'] = 'Все роли назначены сетевым платам.';