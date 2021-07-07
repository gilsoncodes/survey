<?php
if($R[3]==""){
	$S[1]="Obs.: Contataremos você por telefone porque não recebemos seu endereço de email.";
	$to="virgilio@sitiorecantoverdefeliz.com.br";<<<====
	$subject=$R[7];
	$txt="Olá, ".$R[2]."\n\nRecebemos a sua mensagem\n\tNome: ".$R[2]."\n\tTelefone: + ".$R[5]."\n\tEmail: ".$R[3]."\n\tAssunto: ".$R[7].
				"\n\tMensagem: ".$R[6]."\n\nContataremos você em breve.\n\nObrigado pelo seu interesse,\n\nVirgílio\n\n".$S[1];
	$headers="From: virgilio@sitiorecantoverdefeliz.com.br"."\r\n"; <<<====
	$headers.='Content-type: text/plain; charset=UTF-8'."\r\n";
	mail($to,$subject,$txt,$headers);
}else{
	$to=$R[3];
	$subject=$R[7];
	$txt="Olá, ".$R[2]."\n\nRecebemos a sua mensagem\n\tNome: ".$R[2]."\n\tTelefone: + ".$R[5]."\n\tEmail: ".$R[3]."\n\tAssunto: ".
	$R[7]."\n\tMensagem: ".$R[6]."\n\nContataremos você em breve.\n\nObrigado pelo seu interesse,\n\nVirgílio";
	$headers="From: virgilio@sitiorecantoverdefeliz.com.br"."\r\n"."Bcc: virgilio@sitiorecantoverdefeliz.com.br"."\r\n";<<<====
	$headers.='Content-type: text/plain; charset=UTF-8'."\r\n";
	if(@mail($to,$subject,$txt,$headers)){
		$S[1]="Está mensagem também foi enviada para o seu email:".$R[3];
	}else{
		$S[1]="Não conseguimos enviar uma confirmação que recebemos sua mensagem pelo email ".$R[3]."\nContataremos você pelo telefone ".$R[5];
	}
}
?>
