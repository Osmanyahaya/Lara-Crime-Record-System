/*
	*	Original script by: Shafiul Azam
	*	ishafiul@gmail.com
	*	Version 3.0
	*	Modified by: Luigi Balzano

	*	Description:
	*	Inserts Countries and/or States as Dropdown List
	*	How to Use:

		In Head section:
		<script type= "text/javascript" src = "countries.js"></script>
		In Body Section:
		Select Country:   <select onchange="print_state('state',this.selectedIndex);" id="country" name ="country"></select>
		<br />
		City/District/State: <select name ="state" id ="state"></select>
		<script language="javascript">print_country("country");</script>	

	*
	*	License: OpenSource, Permission for modificatin Granted, KEEP AUTHOR INFORMATION INTACT
	*	Aurthor's Website: http://shafiul.progmaatic.com
	*
*/

var country_arr = new Array("Greater Accra", "Ashanti Region","Western Region","Northern Region", "Upper Est Region","Upper West Region","Eastern Region","Central Region","Volta Region","Brong Ahafo Region"
);
var s_a = new Array();
s_a[0]="";
s_a[1]=
"Accra Metropolis District|Adenta Municipal District|Ashaiman Municipal District|Dangme East District (Ada East)|Dangme West District|LEDZOKUKU-KROWOR Municipal Assembly|Ga East Municipal District|Ga West District (Shai Osudoku)|Tema Municipal District|Weija Municipal District";
s_a[2]=
"Kumasi Metropolitan District|Adansi North District|Adansi South District|Afigya-Kwabre District|Afigya-Sekyere District|Ahafo Ano North District|Ahafo Ano South District|Amansie Central District|Amansie East District|Amansie West District|Asante Akim North District|Asante Akim South District|Atwima Mponua District|  Atwima Nwabiagya District|Atwima Kwanwoma District|Botsomtwi/Atwima/Kwanhuma District|Bosome Freho District|Ejisu-Juabeng District|Ejura/Sekyedumase District|Kwabre District|Kumawu Afram Plains District|Obuasi Municipal District|Offinso North District| Offinso District|Sekyere East District|Sekyere West District";
s_a[3]=
"Shama Ahanta East Metropolitan District|SEKONDI - TAKORADI|Ahanta West District|Aowin/Suaman District|Bia District| Bibiani/Anhwiaso/Bekwai District|Ellembelle District|Jomoro District|Juabeso District|Mpohor/Wassa East District|  Nzema East District|Prestea-Huni Valley District|Sefwi-Wiawso District|Sefwi Akontombra district|Shama District|Wasa Amenfi East District| Wasa Amenfi West District|Wassa West District";
s_a[4]=
"Tamale Muncicipal District|Central Gonja District|Chereponi District|West Gonja District |East Gonja District|Tolon/Kumbungu District|Savelugu/Nanton District|Sawla-Tuna-Kalba District|Bole District|Karaga District|Kpandai District|Yendi Municipal District|Nanumba North District| Nanumba South District|Zabzugu/Tatale District|Saboba/Chereponi District|Gushiegu District|East Mamprusi District|Bunkpurugu-Yunyoo District|West Mamprusi District| ";
s_a[5]=
"Bolgatanga Municipal District|Bawku Municipal District|Bawku West District|Bongo District|Builsa District|Garu-Tempane District| Kassena/Nankana District|Kassena Nankana West District|Talensi-Nabdam District";
s_a[6]=
"Wa Municipal District |Jirapa/Lambussie District|Lambussie Karni District|Nadowli District|NADOWLI Sissala East District|Sissala West District|Wa East District|Wa West District|";
s_a[7]=
"New-Juaben Municipal District|Upper Manya Krobo District|Afram Plains District|Akuapim North District|Akuapim South District|Akyemansa District|Asuogyaman District Atiwa District|Birim North District|Birim Central MunicipalBirim South District|East Akim District|Fanteakwa District|Kwaebibirem District|Kwahu South District|";

s_a[8]=
"Cape Coast Municipal District|Abura/Asebu/Kwamankese District|Agona District|Ajumako/Enyan/Essiam District|Asikuma/Odoben/Brakwa District|Assin North District|Assin South District|Awutu/Effutu/Senya District|Awutu-Senya District|Gomoa District|   Gomoa East District|Komenda/Edina/Eguafo/Abirem District|Mfantsiman District|Twifo/Heman/Lower Denkyira District|Upper Denkyira District|Upper Denkyira West District|";
s_a[9]=
"Ho Municipal District|  Adaklu-Anyigbe District|Akatsi District|Hohoe District|Jasikan District|Kadjebi District|Keta District|Ketu District|Ketu North District|Kpando District|Krachi West District| Krachi East District|Nkwanta District| Nkwanta North District|North Tongu District|South Dayi District|South Tongu District|";
s_a[10]=
"Sunyani Municipal District|Sunyani West District|Tano North District|Tano South District|Berecum District|Techiman Municipal District|Asutifi District|Dormaa District|Dormaa East District|Asunafo North District|  Asunafo South District|  Jaman North District|Jaman South District|  Tain District|Kintampo North District|Kintampo South District|Nkoranza District|Nkoranza North Plains District|Pru District|  Atebubu-Amantin District|Sene District| ";
function print_country(country_id){
	// given the id of the <select> tag as function argument, it inserts <option> tags
	var option_str = document.getElementById(country_id);
	option_str.length=0;
	option_str.options[0] = new Option('Select Region','');
	option_str.selectedIndex = 0;
	for (var i=0; i<country_arr.length; i++) {
		option_str.options[option_str.length] = new Option(country_arr[i],country_arr[i]);
	}
}

function print_state(state_id, state_index){
	var option_str = document.getElementById(state_id);
	option_str.length=0;	// Fixed by Julian Woods
	option_str.options[0] = new Option('Select District','');
	option_str.selectedIndex = 0;
	var state_arr = s_a[state_index].split("|");
	for (var i=0; i<state_arr.length; i++) {
		option_str.options[option_str.length] = new Option(state_arr[i],state_arr[i]);
	}
}
