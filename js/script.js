$('#footer').html(`Copyright &copy; 2020 IMFDP`);

const footer = document.getElementById('footer');
//const attFooterId = footer.getAttribute('id');

const judulWeb = document.getElementsByTagName('h1')[0];

if(footer == null){
	console.log('Tolong jangan hapus id footer');
}

const attFooterHidden = footer.getAttribute('hidden');
if(attFooterHidden == null){
	console.log('Protection 1 Secure');
}else{
	judulWeb.innerHTML = 'Toko ini Pake Website Bajakan';
	console.log('Hapus hidden pada footer');
}

const attFooterStyle = footer.getAttribute('style');
if(attFooterStyle == null){
	console.log('Protection 2 Secure');
}else{
	console.log('Hapus Style pada footer');
}