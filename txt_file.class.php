<?php
	class Txt_File {
		public function Write_In_File(String $file_name = '', String $text = '') {
			/* 
				pt_br: Abre o arquivo para escrita com o tipo de acesso 'a'. O arquivo será gerado caso não exista.
					Mais informações em: http://php.net/manual/pt_BR/function.fopen.php
			*/
			$file = fopen($file_name, 'a');

			/*
				pt_br: Escreve o conteúdo de $text no arquivo.
					PHP_EOL é uma constante reservada do PHP. É o simbolo correto de fim de linha (também utilizado para quebra de linhas em arquivos).
					Mais informações em:
					http://php.net/manual/pt_BR/function.fwrite.php
					https://secure.php.net/manual/pt_BR/reserved.constants.php
			*/
			fwrite($file, $text.PHP_EOL);

			/*
				pt_br: Fecha o ponteiro do arquivo que está sendo escrito.
					Mais informações em: http://php.net/manual/pt_BR/function.fclose.php

			*/
			fclose($file);
		}
	}