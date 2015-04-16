============
Port forward
============

E' possibile usare questo pannello per modificare le regole del firewall
così da aprire una specifica porta (o un intervallo di porte) sul server
ed inoltrare una porta ad un altra. In questo modo è possibile
permettere l'accesso ad host privato nella rete locale.

Crea / Modifica
===============

Porta di origine
    Specifica la porta aperta sul IP pubblico.

Porta destinazione
    Specifica la porta sul host interno e destinazione del traffico.

Host destinazione
    Selezionare la macchina interna alla LAN a cui verrà rediretto il traffico.

Permetti solo da 
    Permette il forward del traffico solo da alcune reti o host.
    Inserire una lista separata da virgole di indirizzi IP o reti in formato CIDR.

Descrizione
    Descrizione opzionale della regola di port forwarding.


Abilita / Disabilita
====================

Le regole di Port Forwarding vengono abilitate di default al momento
della creazione, è possibile abilitare/disabilitare momentaneamente
attraverso questo pulsante

Haripin NAT
============

Abilitare hairpin NAT per rendere accessibili i port forward anche dalla rete locale.
