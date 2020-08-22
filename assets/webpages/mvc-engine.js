function control(article, major, pages)
{
	var origin	= window.location.origin;
	var path	= '/smk/';
	// console.log([article, major, pages]);
	if (article != null || major != null || pages != null) {
		if (article != null) {
			switch (article) {}
		}

		if (major != null) {
			//
		}

		if (pages != null) {
			//
		}
	} else {
		$('#main-app').load('main/beranda.html');
	}
	if (article != null) {
		// switch (article) {
		// 	case 
		// }
	} else if (major != null) {
		// switch
	} else if (pages != null) {
		switch (pages) {
			case 'tentang':
				$('#main-app').load('main/tentang.html');
				break;

			case 'kegiatan':
				$

			default:
				$('#main-app').load('main/beranda.html');
				break;
		}
	} else {
		
	}
}

function parseURL(url)
{
	let params	= (new URL(url)).searchParams;
	var pages	= params.get('p');
	var article	= params.get('a');
	var major	= params.get('j');
	
	control(article, major, pages);
}

var url = window.location.href;
parseURL(url);