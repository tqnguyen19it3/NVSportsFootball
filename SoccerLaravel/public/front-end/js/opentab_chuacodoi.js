function Opentab_2(e, tabId) {

	var i;
	var tab_2 = document.getElementsByClassName("tab-2");

	for (i = 0; i < tab_2.length; i ++) {
		tab_2[i].style.display = 'none';
	}

	tab_2[tabId - 1].style.display = 'block';

	var tabLink_2 = document.getElementsByClassName("tabLink-2");

	for (i = 0; i < tabLink_2.length; i ++) {
		tabLink_2[i].className = tabLink_2[i].className.replace(' active_2', '');
	}

	event.currentTarget.className += ' active_2';

}