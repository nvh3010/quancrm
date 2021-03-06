<?php
/*+**********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.0
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is:  vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 ************************************************************************************/
 /*********************************************************************************
 * $Header:  \modules\ConfigEditor\language\hu_hu.lang.php - 9:46 2011.11.11. $
 * Description:  Defines the Hungarian language pack for the ConfigEditor module vtiger 5.3.x
 * All Rights Reserved.
 * Contributor(s): Istvan Holbok,  e-mail: holbok@gmail.com , mobil: +3670-3420900 , Skype: holboki
 ********************************************************************************/
$mod_strings = array(
	'LBL_SALES_STAGE_FORM_TITLE' => 'Tölcsér értékesítési fázisok szerint',
	'LBL_SALES_STAGE_FORM_DESC' => 'A kumulált Lehetőségek összegének mutatása a kiválasztott értékesítési fázis szerint a kiválasztott Felhasználóknak, ahol a várható lezárási dátum a megadott dátum intervallumban van.',
	'LBL_MONTH_BY_OUTCOME' => 'Tölcsér Hónap és Kihozatal szerint',
	'LBL_MONTH_BY_OUTCOME_DESC' => 'A kumulált Lehetőségek összegének mutatása Hónap és Kihozatal szerint a kiválasztott Felhasználóknak, ahol a várható lezárási dátum a megadott dátum intervallumban van. A Kihozatal azon alapul, hogy az értékesítési fázis Lezárt - Megkötött, Lezárt - Elvesztett vagy bármilyen más érték.',
	'LBL_LEAD_SOURCE_FORM_TITLE' => 'Minden lehetőség a Jelölt Forrás szerint',
	'LBL_LEAD_SOURCE_FORM_DESC' => 'A kumulált Lehetőségek összegének mutatása a kiválasztott Jelölt Forrás szerint a kiválasztott Felhasználóknak.',
	'LBL_LEAD_SOURCE_BY_OUTCOME' => 'Minden Lehetőség Jelölt Forrás és Kihozatal szerint',
	'LBL_LEAD_SOURCE_BY_OUTCOME_DESC' => 'A kumulált Lehetőségek összegének mutatása a kiválasztott Jelölt Forrás és Kihozatal szerint a kiválasztott Felhasználóknak, ahol a várható lezárási dátum a megadott dátum intervallumban van. A Kihozatal azon alapul, hogy az értékesítési fázis Lezárt - Megkötött, Lezárt - Elvesztett vagy bármilyen más érték.',
	'LBL_PIPELINE_FORM_TITLE_DESC' => 'A kumulált Lehetőségek összegének mutatása a kiválasztott értékesítési fázis szerint, ahol a várható lezárási dátum a megadott dátum intervallumban van.',
	'LBL_DATE_RANGE' => 'Dátum intervallum: ',
	'LBL_DATE_RANGE_TO' => '-tól eddig: ',
	'ERR_NO_OPPS' => 'Kérjük, hogy hozz létre néhány Lehetőséget, hogy a grafikus megjelenítést láthasd.',
	'LBL_TOTAL_PIPELINE' => 'Tölcsér teljes összege ',
	'LBL_ALL_OPPORTUNITIES' => 'Az összes lehetöség teljes összege ',
	'LBL_OPP_SIZE' => 'Diagram beosztása: ',
	'LBL_OPP_SIZE_VALUE' => ' 1ezer',
	'NTC_NO_LEGENDS' => 'Nincs',
	'LBL_LEAD_SOURCE_OTHER' => 'Másik',
	'LBL_EDIT' => 'Szerkeszt',
	'LBL_REFRESH' => 'Frissít',
	'LBL_CREATED_ON' => 'Utolsó futás: ',
	'LBL_OPPS_IN_STAGE' => 'lehetőségek, ahol az értékesítési fázis: ',
	'LBL_OPPS_IN_LEAD_SOURCE' => 'lehetőségek, ahol a Jelölt forrás: ',
	'LBL_OPPS_OUTCOME' => 'lehetőségek, ahol a kihozatal: ',
	'LBL_USERS' => 'Felhasználók:',
	'LBL_SALES_STAGES' => 'Értékesítési Fázisok:',
	'LBL_LEAD_SOURCES' => 'Jelölt Források:',
	'LBL_DATE_START' => 'Kezdő Dátum:',
	'LBL_DATE_END' => 'Befejező Dátum:',
	'LBL_NO_PERMISSION' => 'Sajnáljuk, de nincs hozzáférésed a modul grafikonjának megtekintéséhez',
	'LBL_NO_PERMISSION_FIELD' => 'Sajnáljuk, de nincs hozzáférésed a modul vagy mező grafikonjának megtekintéséhez',
	'leadsource' => 'Jelöltek forrás szerint',
	'leadstatus' => 'Jelöltek állapot szerint',
	'leadindustry' => 'Jelöltek iparág szerint',
	'salesbyleadsource' => 'Megrendelés Jelölt forrás szerint',
	'salesbyaccount' => 'Megrendelés Cégenként',
	'salesbyuser' => 'Megrendelés Felhasználók szerint',
	'salesbyteam' => 'Megrendelés Csapatok szerint',
	'accountindustry' => 'Cégek iparág szerint',
	'productcategory' => 'Termékek Kategória szerint',
	'productbyqtyinstock' => 'Termékek Készlet szerint',
	'productbypo' => 'Termékek Rendelések szerint',
	'productbyquotes' => 'Termékek Ajánlatok szerint',
	'productbyinvoice' => 'Termékek Díjbekérők szerint',
	'sobyaccounts' => 'Megrendelések Cégenként',
	'sobystatus' => 'Megrendelések állapot szerint',
	'pobystatus' => 'Beszerzések állapot szerint',
	'quotesbyaccounts' => 'Ajánlatok Cégenként',
	'quotesbystage' => 'Ajánlatok fázis szerint',
	'invoicebyacnts' => 'Díjbekérők Cégenként',
	'invoicebystatus' => 'Díjbekérők állapot szerint',
	'ticketsbystatus' => 'Kérések állapot szerint',
	'ticketsbypriority' => 'Kérések prioritás szerint',
	'ticketsbycategory' => 'Kérések kategória szerint',
	'ticketsbyuser' => 'Kérések felhasználók szerint',
	'ticketsbyteam' => 'Kérések csapatok szerint',
	'ticketsbyproduct' => 'Kérések termékek szerint',
	'contactbycampaign' => 'Kapcsolatok Kampányok szerint',
	'ticketsbyaccount' => 'Kérések cégenként',
	'ticketsbycontact' => 'Kérések/Jegyek a Kapcsolatok szerint',
	'LBL_DASHBRD_HOME' => 'Műszerfal Kezdőlap',
	'LBL_HORZ_BAR_CHART' => 'Vízszintes oszlop Diagram',
	'LBL_VERT_BAR_CHART' => 'Függőleges oszlop Diagram',
	'LBL_PIE_CHART' => 'Tortaszelet Diagram',
	'LBL_NO_DATA' => 'Nincs elérhető adat',
	'DashboardHome' => 'Műszerfal Kezdőlap',
	'GRIDVIEW' => 'Rács nézet',
	'NORMALVIEW' => 'Normál nézet',
	'VIEWCHART' => 'Diagram nézet',
	'LBL_DASHBOARD' => 'Műszerfal',
	'Approved' => 'Jóváhagyott',
	'Created' => 'Létrehozott',
	'Cancelled' => 'Törölt',
	'Delivered' => 'Kiszállított',
	'Received Shipment' => 'Fogadott szállítmány',
	'Sent' => 'Elküldött',
	'Credit Invoice' => 'Utalásos Díjbekérő',
	'Paid' => 'Fizetett',
	'Un Assigned' => 'Nincs Felelöse',
	'Cold Call' => 'Hideg Hívás',
	'Existing Customer' => 'Meglévö ügyfél',
	'Self Generated' => 'Saját magától jelentkezett',
	'Employee' => 'Alkalmazott',
	'Partner' => 'Partner',
	'Public Relations' => 'Public Relations',
	'Direct Mail' => 'Direct Mail',
	'Conference' => 'Konferencia',
	'Trade Show' => 'Árubemutató',
	'Web Site' => 'Weboldal',
	'Word of mouth' => 'Szóbeszéd',
	'Other' => 'Egyéb',
	'--None--' => 'Nincs',
	'Attempted to Contact' => 'Megkísérelt kapcsolatfelvétel',
	'Cold' => 'Hideg',
	'Contact in Future' => 'Jövöbeni kapcsolatfelvétel',
	'Contacted' => 'Kapcsolatba léptünk',
	'Hot' => 'Forró',
	'Junk Lead' => 'Alkalmatlan Jelölt',
	'Lost Lead' => 'Elvesztett Jelölt',
	'Not Contacted' => 'Nem lépett kapcsolatba',
	'Pre Qualified' => 'Elözetesen minösített',
	'Qualified' => 'Minösített',
	'Warm' => 'Meleg',
	'Apparel' => 'Ruházat - Felszerelés',
	'Banking' => 'Bank',
	'Biotechnology' => 'Biotechnológia',
	'Chemicals' => 'Vegyipar',
	'Communications' => 'Kommunikáció',
	'Construction' => 'Építőipar',
	'Consulting' => 'Tanácsadás',
	'Education' => 'Oktatás',
	'Electronics' => 'Elektronika',
	'Energy' => 'Energia szektor',
	'Engineering' => 'Mérnöki tevékenység',
	'Entertainment' => 'Szórakoztató ipar',
	'Environmental' => 'Környezetvédelem',
	'Finance' => 'Pénzügyek',
	'Food & Beverage' => 'Élelmiszer ipar',
	'Government' => 'Államigazgatás',
	'Healthcare' => 'Egészségügy',
	'Hospitality' => 'Vendéglátás',
	'Insurance' => 'Biztosítás',
	'Machinery' => 'Gépipar',
	'Manufacturing' => 'Gyártás',
	'Media' => 'Média',
	'Not For Profit' => 'Non-Profit',
	'Recreation' => 'Wellness',
	'Retail' => 'Kiskereskedelem',
	'Shipping' => 'Szállítás',
	'Technology' => 'Technológia',
	'Telecommunications' => 'Telekommunikáció',
	'Transportation' => 'Közlekedés',
	'Utilities' => 'Szolgáltatás',
	'Hardware' => 'Hardware',
	'Software' => 'Software',
	'CRM Applications' => 'CRM Alkalmazások',
	'Open' => 'Nyitott',
	'In Progress' => 'Folyamatban',
	'Wait For Response' => 'Válaszra vár',
	'Closed' => 'Lezárt',
	'Low' => 'Alacsony',
	'Normal' => 'Normál',
	'High' => 'Magas',
	'Urgent' => 'Sürgös',
	'Big Problem' => 'Nagy Probléma',
	'Small Problem' => 'Kis Probléma',
	'Other Problem' => 'Más Probléma',
	'Accepted' => 'Elfogadott',
	'Rejected' => 'Visszautasított',
	'Prospecting' => 'Kiválasztás',
	'Qualification' => 'Minösítés',
	'Needs Analysis' => 'Elemzés szükséges',
	'Value Proposition' => 'Ajánlat meghatározás',
	'Id. Decision Makers' => 'Döntéshozók meghatározása',
	'Perception Analysis' => 'Kifogáskezelés',
	'Proposal/Price Quote' => 'Javaslat/Árajánlat',
	'Negotiation/Review' => 'Tárgyalás/Felülvizsgálat',
	'Closed Won' => 'Lezárt - megkötött',
	'Closed Lost' => 'Lezárt - elveszített',
	'AutoCreated' => 'Automatikusan létrehozva',
	'LBL_AMOUNT_FORM_TITLE_TKS' => 'Összeg',
	'LBL_TOTAL_PIPELINE_TKS' => 'Marketing tölcsér',
	'LBL_SALES_STAGE_FORM_DESC_TKS' => 'Értékesítési állapot'
);
?>