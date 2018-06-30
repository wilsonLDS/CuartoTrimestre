/*js function Login*/
	/*correo*/
		function cambiacorreo(){
			document.getElementById('correo').style.color = '#1A24C6';
			document.getElementById('correo').style.fontSize = '2em';

		}

		function restablecercorreo(){
			document.getElementById('correo').style.color = '#8E8E8E';
			document.getElementById('correo').style.fontSize = '12px';
		}
		/*finalida*/
				/*correo*/
				document.getElementById('correo').addEventListener('click', cambiacorreo);
				document.getElementById('correo').addEventListener('blur', restablecercorreo);
		/*terminacion*/
			/*Asunto*/
		function cambiaAsunto(){
			document.getElementById('Asunto').style.color = '#1A24C6';
			document.getElementById('Asunto').style.fontSize = '2em';

		}

		function restablecerAsunto(){
			document.getElementById('Asunto').style.color = '#8E8E8E';
			document.getElementById('Asunto').style.fontSize = '12px';
		}
		/*finalida*/
				/*Asunto*/
				document.getElementById('Asunto').addEventListener('click', cambiaAsunto);
				document.getElementById('Asunto').addEventListener('blur', restablecerAsunto);
		/*terminacion*/
/*js mensaje*/
/*mensaje*/
		function cambiamensaje(){
			document.getElementById('mensaje').style.color = '#1A24C6';
			document.getElementById('mensaje').style.fontSize = '1em';

		}

		function restablecermensaje(){
			document.getElementById('mensaje').style.color = '#8E8E8E';
			document.getElementById('mensaje').style.fontSize = '12px';
		}
		/*finalida*/
				/*name*/
				document.getElementById('mensaje').addEventListener('click', cambiamensaje);
				document.getElementById('mensaje').addEventListener('blur', restablecermensaje);
		/*terminacion*/

