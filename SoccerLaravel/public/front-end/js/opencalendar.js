function OpenCalendar(e, tabId) {

	var i;
	var tab_gio = document.getElementsByClassName("tab-gio");

	for (i = 0; i < tab_gio.length; i ++) {
		tab_gio[i].style.display = 'none';
	}

	tab_gio[tabId - 1].style.display = 'block';

	var tabLink_3 = document.getElementsByClassName("tab-lich");
	var a = tabLink_3.length;
	console.log(a);

	for (i = 0; i < tabLink_3.length; i ++) {
		tabLink_3[i].className = tabLink_3[i].className.replace(' active_4', '');
	}

	event.currentTarget.className += ' active_4';

}