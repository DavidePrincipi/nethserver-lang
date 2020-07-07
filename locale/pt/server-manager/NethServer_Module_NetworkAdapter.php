<?php 

/* NethServer_Module_NetworkAdapter translation, language: en */

$L['bootproto_dhcp_label'] = 'DHCP';
$L['bootproto_label'] = 'Atribuição de IP';
$L['bootproto_none_label'] = 'Estático';
$L['blue_label'] = 'Convidados (azul)';
$L['device_label'] = 'Dispositivo';
$L['gateway_label'] = 'Porta de saída';
$L['green_label'] = 'LAN (verde)';
$L['hwaddr_label'] = 'Endereço MAC';
$L['ipaddr_label'] = 'Endereço IP';
$L['orange_label'] = 'DMZ (laranja)';
$L['Key_label'] = 'Dispositivo';
$L['netmask_label'] = 'Mascara de rede';
$L['NetworkAdapter_Description'] = 'Alterar definições de rede';
$L['NetworkAdapter_Tags'] = 'rede adaptador ethernet redes';
$L['NetworkAdapter_Title'] = 'Rede';
$L['red_label'] = 'Internet (vermelho)';
$L['role_label'] = 'Função';
$L['update_header_label'] = 'Actualizar dispositivo';
$L['interface-config_label'] = 'Configuração do interface';
$L['valid_platform,interface-config,interface-role,3'] = "DHCP can be used only with red and green interfaces";
$L['valid_platform,interface-config,interface-role,4'] = "Não é possível apagar o ultimo interface verde";
$L['No'] = 'Não';
$L['Yes'] = 'Sim';
$L['type_alias_label'] = 'Nome';
$L['type_bridge_label'] = 'Ponte';
$L['type_bond_label'] = 'vinculo';
$L['type_vlan_label'] = 'VLAN';
$L['SetIpAddress_header'] = 'Configure a atribuição de IP - ${0}';
$L['CreateLogicalInterface_label'] = 'Nova interface lógica';
$L['CreateLogicalInterface_header'] = 'Novo interface lógico';
$L['vlanTag_label'] = 'Etiqueta';
$L['vlan_label'] = 'Interface';
$L['InterfaceType_label'] = 'Tipo';
$L['Next_label'] = 'Seguinte';
$L['Back_label'] = 'Anterior';
$L['Edit_label'] = 'Editar';
$L['Edit_header'] = 'Editar ${dev} - ${bus} ${model}';
$L['Edit_description'] = "O estado da ligação é \${link}\nSpeed \${speed} Mbit/s\nDriver \${driver}\nMac address \${mac}";
$L['Link_status_up'] = 'cima';
$L['Link_status_down'] = 'baixo';
$L['Link_status_na'] = 'N/A';
$L['speed_label'] = 'Velocidade ${0}';
$L['Confirm_header'] = 'Novo ${role} interface ${device}';
$L['Action_create_bridge'] = 'Nova ponte ${device} com ${parts}';
$L['Action_create_bond'] = 'Create a new ${bondMode} bond interface ${device} with ${parts}';
$L['Action_create_vlan'] = 'Nova VLAN ${device} em ${parts}';
$L['Action_create_role'] = 'Definir função para "${role}"';
$L['Action_set_static_ip'] = 'Definir IP estático ${ipaddr}/${netmask}';
$L['Action_use_dhcp'] = 'Obter configuração IP a partir de um servidor DHCP';
$L['Action_use_gateway'] = 'Usar a porta de saída ${gateway}';
$L['Action_use_no_gateway'] = 'Não definir porta de saída';
$L['Create_label'] = 'Novo interface';
$L['bridged_label'] = 'Em ponte';
$L['slave_label'] = 'Secundário';
$L['CreateIpAlias_header'] = 'Novo nome IP "${0}"';
$L['ReleasePhysicalInterface_header'] = 'Libertar ${0}';
$L['ReleasePhysicalInterface_roled_message'] = 'Libertar função ${role} atribuída ao interface físico ${device}?';
$L['ReleasePhysicalInterface_slave_message'] = 'Remover ${device} do vinculo ${parent}?';
$L['ReleasePhysicalInterface_bridged_message'] = 'Remover ${device} da ponte ${parent}?';
$L['DeleteLogicalInterface_label'] = 'Apagar';
$L['DeleteLogicalInterface_header'] = 'Confirmar eliminação de ${0}';
$L['DeleteLogicalInterface_bond_message'] = "A apagar vinculo do interface \${device}.\nEscolha um sucessor dos interfaces secundários para configurá-lo com as funções e definições de IP actuais";
$L['DeleteLogicalInterface_bridge_message'] = "A apagar ponte \${device}.\nEscolha um sucessor dos interfaces em ponte para configurá-lo com as funções e definições de IP actuais";
$L['DeleteLogicalInterface_vlan_message'] = "Confirmar eliminação da VLAN \${device}.";
$L['DeleteLogicalInterface_alias_message'] = "Confirmar eliminação do nome \${device}.";
$L['ReleasePhysicalInterface_label'] = 'Função de versão';
$L['Release_label'] = 'Função de versão';
$L['CleanPhysicalInterface_label'] = 'Eliminar';
$L['CreateIpAlias_label'] = 'Novo nome IP';
$L['successor_label'] = 'Sucessor';
$L['NoSuccessor_label'] = 'Nenhum';
$L['bond_label'] = 'Vinculo';
$L['bridge_label'] = 'Ponte';
$L['alias_label'] = 'Nome';
$L['hotspot_label'] = 'Ponto de acesso';
$L['RenameInterface_header'] = 'Atribuir funções aos interfaces físicos';
$L['[leave untouched]'] = '-';
$L['cards_label'] = 'Interfaces físicos';
$L['CleanPhysicalInterface_header'] = 'Remover ${0}';
$L['Confirm device ${0} removal'] = 'Remover o dispositivo ${0} da base de dados?';
$L['Clean_label'] = 'Remover';
$L['Refresh_label'] = 'Actualizar estado da ligação';
$L['roleis_label'] = 'função';
$L['MAC: ${0}'] = 'MAC ${0}';
$L['Model: ${0}'] = 'Modelo ${0}';
$L['All roles are correctly assigned to network cards.'] = 'Todas as funções estão correctamente atribuídas aos adaptadores de rede';
$L['type_xdsl_label'] = 'PPPoE em ppp0';
$L['xdsl_label'] = 'PPPoE';
$L['PppoeUser_label'] = 'Nome do utilizador';
$L['PppoePassword_label'] = 'Palavra-passe';
$L['PppoeInterface_label'] = ' Interface de Ethernet';
$L['PppoeProvider_label'] = 'Fornecedor';
$L['pppoe_label'] = 'PPPoE (vermelho)';
$L['SetPppoeParameters_label'] = 'Configurar PPPoE';
$L['SetPppoeParameters_header'] = 'Configurar dispositivo ppp0 de PPPoE';
$L['ReleasePhysicalInterface_pppoe_message'] = "Release PPPoE red role from \${device}?\nThe associated ppp0 device will be also removed.";
$L['DeleteLogicalInterface_xdsl_message'] = "Remove the logical PPPoE device ppp0?";
$L['valid_pppoe_already_configured'] = 'The PPPoE device ppp0 is already configured';
$L['valid_pppoe_red_role_only'] = 'The PPPoE device ppp0 must be assigned the red role';
$L['PppoeAuthType_label'] = 'Tipo de autenticação';
$L['AuthType_auto'] = 'Automática';
$L['AuthType_pap'] = 'PAP';
$L['AuthType_chap'] = 'CHAP';
$L['bondMode_label'] = 'Modo';
$L['BondMode_0_label'] = 'balance round robin';
$L['BondMode_1_label'] = 'active backup';
$L['BondMode_2_label'] = 'balance XOR';
$L['BondMode_3_label'] = 'broadcast';
$L['BondMode_4_label'] = '802.3ad';
$L['BondMode_5_label'] = 'balance TLB';
$L['BondMode_6_label'] = 'balance ALB';
$L['red_label'] = 'Internet (vermelho)';
$L['multiwan_label'] = 'Múltiplos WAN';
$L['Weight_label'] = 'Link weight';
$L['ProviderName_label'] = 'Link name';
$L['UpstreamProxy_label'] = 'Definições do proxy';
$L['DNS_label'] = 'Servidores de DNS';
$L['trafficshaping_label'] = 'Traffic Shaping';
$L['FwInBandwidth_label'] = 'Largura de banda de "A receber" (kbps)';
$L['FwOutBandwidth_label'] = 'Largura de banda de "A enviar" (kbps)';
$L['valid_platform,logical-interface-create,dhcp-conflicts,3'] = 'Some interfaces have DHCP ranges associated: they must be fixed manually from the DHCP page';