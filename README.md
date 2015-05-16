shaarlis_list
=============

Liste des shaarlis générée par https://github.com/Oros42/find_shaarlis  
  
C'est dispo à ces adresses :  
https://raw.githubusercontent.com/Oros42/shaarlis_list/master/shaarlis.opml  
https://raw.githubusercontent.com/Oros42/shaarlis_list/master/shaarlis.json  
https://ecirtam.net/find_shaarlis/out/shaarlis.opml  
https://ecirtam.net/find_shaarlis/out/shaarlis.json  
Pour un visualisation simple :  
https://ecirtam.net/find_shaarlis/out/read_shaarlis_json.php  
  
Pour les shaarlis qui sont HS :
https://raw.githubusercontent.com/Oros42/shaarlis_list/master/shaarlis_HS.json  
https://ecirtam.net/find_shaarlis/out/shaarlis_HS.json  
Pour un visualisation simple :  
https://ecirtam.net/find_shaarlis/out/read_shaarlis_HS_json.php  


Format de shaarlis.json
=======================

```json
{ "http:\/\/sebsauvage.net\/links\/?do=rss":{
	"text":"Liens en vrac de sebsauvage",
	"htmlUrl":"http:\/\/sebsauvage.net\/links\/",
	...
 },
 ...
}
```

Format de shaarlis_HS.json
==========================

```json
{	
	"https:\/\/lienspersos.accessibilisation.net\/shaarli\/?do=rss":{
		"type":"XML",
		"error":[
			[
				"<?xml version...",
				"Fatal Error 4: ",
				"Start tag expected, '<' not found",
				1,
				1
			]
		],
		"text":"Choses partag\u00e9es",
		"htmlUrl":"https:\/\/lienspersos.accessibilisation.net\/shaarli\/"
	},
	"http:\/\/www.famille-boucher.org\/links\/?do=rss":{
		"type":"URL",
		"error":[],
		"text":"Nos liens",
		"htmlUrl":"http:\/\/www.famille-boucher.org\/links\/"
	},
	...
}
```