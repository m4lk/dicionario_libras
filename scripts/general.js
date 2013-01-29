var video_url = '';
var loop = false;


$(function() {
	$('input#txt_busca').focus();

	$('div#busca-opcoes').buttonset();
	
	$('button#btn_buscar').button({
		icons: {
			primary: "ui-icon-search"
		}
	});

	$('button.play').button({
		icons: {
			primary: "ui-icon-play"
		}
	});
	$('input.loop').button({
		icons: {
			primary: "ui-icon-refresh"
		}
	});

	$('fieldset#assuntos ul.menu, fieldset#palavras ul.menu').menu();


	$('#frm_busca').bind('submit', txt_busca_handler);
	$('#busca-alfabetica a').bind('click', busca_alfabetica_handler);

	$('button.play').bind('click', btn_play_handler);
	$('input.loop').bind('change', btn_loop_handler);
});

var txt_busca_handler = function(event) {
	var qry = $('input#txt_busca').val().toLowerCase();
	var opcao = $('#busca-opcoes input:checked').val();

	limparCampos();

	$.ajax('ajax.php', {
		data: {
			'minhapalavra': encodeURI(escape(qry)),
			'opcao': opcao
		},
		dataType: 'xml',
		type: 'GET',
		beforeSend: function() {
			$('#preloader').show();
		},
		complete: function(resp) {
			var xml = $.parseXML(resp.responseText);
			var items = $(xml).find('item');

			if(items.length > 0) {
				var menu, 
					handler, 
					opcao = $('#busca-opcoes input:checked').val();
				if(opcao == 4) {
					menu = $('fieldset#assuntos ul.menu').menu('destroy').html('');
					handler = assunto_select_handler;
				} else {
					menu = $('fieldset#palavras ul.menu').menu('destroy').html('');
					handler = palavra_select_handler;
				}
				
				items.each(function() {
					menu.append('<li><a href="">' + $(this).attr('palavra') + '</a></li>');
				});
				menu.menu({
					select: handler
				});
			} else {
				$('#erro').html('Desculpe, nenhum resultado foi obtido.');
			}

			$('#preloader').hide();
		}
	});

	event.preventDefault();
}

var palavra_select_handler = function(event, ui) {
	var qry = ui.item.text();
	$(this).find('li').removeClass('ui-corner-all ui-state-focus');
	ui.item.addClass('ui-corner-all ui-state-focus');

	$('fieldset#video nav').hide();
	$('#videoPlayer').html('');
	
	$.ajax('ajax.php', {
		data: {
			'palavra': encodeURI(escape(qry))
		},
		dataType: 'xml',
		type: 'GET',
		beforeSend: function() {
			$('#preloader').show();
		},
		complete: function(resp) {
			var xml = $.parseXML(resp.responseText);
			var item = $(xml).find('item');
			$('fieldset#acepcao article p').html(item.attr('descricao'));
			$('fieldset#exemplo article p').html(item.attr('exemploPortugues'));
			$('fieldset#exemplo-libras article p').html(item.attr('libras'));

			$('article#extra_info .classe_gramatical span').html(item.attr('classe'));
			$('article#extra_info .origem span').html(item.attr('origem'));
			$('article#extra_info .mao span').html('<img src="http://www.acessobrasil.org.br/libras/confmao/cg' + item.attr('mao').toLowerCase() + '" />');

			video_url = 'http://www.acessobrasil.org.br/libras/filme/' + item.attr('video');
			
			$('#videoPlayer').flashembed({
				src: video_url,
				width: 200,
				height: 155
			});

			$('fieldset#video nav').show();
			$('#preloader').hide();
		}
	});
	event.preventDefault();
}

var assunto_select_handler = function(event, ui) {
	var qry = ui.item.text();
	var menu = $('fieldset#palavras ul.menu').menu('destroy').html('');

	$(this).find('li').removeClass('ui-corner-all ui-state-focus');
	ui.item.addClass('ui-corner-all ui-state-focus');

	$.ajax('ajax.php', {
		data: {
			'assunto': encodeURI(escape(qry))
		},
		dataType: 'xml',
		type: 'GET',
		beforeSend: function() {
			$('#preloader').show();
		},
		complete: function(resp) {
			var xml = $.parseXML(resp.responseText);
			var items = $(xml).find('item');

			items.each(function() {
				menu.append('<li><a href="">' + $(this).attr('palavra') + '</a></li>');
			});
			menu.menu({
				select: palavra_select_handler
			});

			$('#preloader').hide();
		}
	});
	event.preventDefault();
}

var busca_alfabetica_handler = function(event) {
	var letra = $(this).attr('href');

	if(letra === '#') {
		window.location = '';
		return false;
	}

	$('input#txt_busca').val(letra);
	$('#frm_busca').trigger('submit');

	event.preventDefault();
}

/* Controle de video */
var btn_play_handler = function(event) {
	loadVideo();
	event.preventDefault();
}

var btn_loop_handler = function(event) {
	loop = (loop) ? false : true;

	if(loop) {
		loadVideo();
	} else {
		window.clearInterval();
	}

	event.preventDefault();
}

var loadVideo = function() {
	$('#videoPlayer').flashembed({
		src: video_url,
		width: 200,
		height: 155
	});

	if(loop) {
		window.setTimeout('loadVideo()', 3000);
	}
}

var limparCampos = function() {
	$('ul.menu').html('');
	$('#acepcao article p').html('');
	$('#exemplo article p').html('');
	$('#exemplo-libras article p').html('');

	$('#extra_info span').html('');

	$('#videoPlayer').html('');

	$('#erro').html('');
}