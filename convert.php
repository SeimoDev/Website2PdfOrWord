<?php

if (isset($_POST['url']) && !empty($_POST['url'])) {
	$url = $_POST['url'];
	if (filter_var($url, FILTER_VALIDATE_URL)) {
		$format = $_POST['format'];
		if ($format == 'pdf') {
			// 使用 wkhtmltopdf 将网页转换为 PDF 文件
			exec("wkhtmltopdf $url output.pdf");
			// 下载生成的 PDF 文件
			header('Content-Type: application/pdf');
			header('Content-Disposition: attachment; filename="output.pdf"');
			readfile('output.pdf');
			unlink('output.pdf');
		} elseif ($format == 'word') {
			// 使用 pandoc 将网页转换为 Word 文件
			exec("pandoc -f html -t docx $url -o output.docx");
			// 下载生成的 Word 文件
			header('Content-Type: application/vnd.openxmlformats-officedocument.wordprocessingml.document');
			header('Content-Disposition: attachment; filename="output.docx"');
			readfile('output.docx');
			unlink('output.docx');
		} else {
			echo '格式错误';
		}
	} else {
		echo '链接错误';
	}
} else {
	echo '请输入链接';
}
