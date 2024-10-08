[System.Net.ServicePointManager]::ServerCertificateValidationCallback = { $true }
$headersToken = New-Object "System.Collections.Generic.Dictionary[[String],[String]]"
$headersToken.Add("Content-Type", "application/json")

$bodyToken = "{
`n    `"username`": `"user1`",
`n    `"password`": `"nimda123`"
`n}"

$loginToken = Invoke-RestMethod 'https://ec2-54-175-132-165.compute-1.amazonaws.com/certdog/api/login' -Method 'POST' -Headers $headersToken -Body $bodyToken
$tokenJson = $loginToken.token | ConvertTo-Json
$tokenBearer = "Bearer $tokenJson"
$token = $tokenBearer.Replace('"','')

$headers = New-Object "System.Collections.Generic.Dictionary[[String],[String]]"
$headers.Add("Content-Type", "application/json")
$headers.Add("Authorization", "$token")

$name = Get-Content .\name.txt
$cpf = Get-Content .\cpf.txt
$senha = Get-Content .\senha.txt

$body = "{
`n    `"caName`" : `"CyperInterProIssuer`",
`n    `"dn`"  : `"CN="+$name+":"+$cpf+",OU=Centro Paula Souza, OU=Etec Carmargo Aranha, O=CyberInterPro, C=BR`",
`n    `"teamName`" : `"`",
`n    `"csrGeneratorName`" : `"RSA_2048_CSR`",
`n    `"p12Password`" : `"$senha`",
`n    `"subjectAltNames`" : [`"`"],
`n    `"extraEmails`" : [`"`"],
`n    `"extraInfo`" : `"`"
`n}"

$filename = $name+'_'+$cpf+'.p12'
$response = Invoke-RestMethod 'https://ec2-54-175-132-165.compute-1.amazonaws.com/certdog/api/certs/request' -Method 'POST' -Headers $headers -Body $body
$response | ConvertTo-Json
$response.p12Data | Out-File -FilePath "C:\wamp642\www\cyberinterpro\aws\files\$filename"
