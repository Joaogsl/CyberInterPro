const { degrees, PDFDocument, rgb, StandardFonts } = PDFLib

document.getElementById('proximo').onclick = async function() {

    document.getElementById('step2').classList.add("progress-step-active");

    // //Colocar os dados nas variáveis
    // var nome = 'HUDSON';            /* ESPERANDO FRONTEND */
    // var nomeMeio = 'CARVALHO DE';    /* ESPERANDO FRONTEND */
    // var ultimoNome = 'CAMARGO';    /* ESPERANDO FRONTEND */
    // var cpf = '30720402030';        /* ESPERANDO FRONTEND */

    // //posição do texto
    // //0 = inferior direito 1= superior direito 2= superior esquerdo 3= inferior esquerdo
    // var posicao = 0;                /* ESPERANDO FRONTEND */

    // // Url do Pdf
    // const url = '../exports/pdfAssinado.pdf' /* ESPERANDO FRONTEND */
    // const existingPdfBytes = await fetch(url).then(res => res.arrayBuffer())

    // // Carregar o pdf
    // const pdfDoc = await PDFDocument.load(existingPdfBytes)

    // // Carregar a fonte
    // const helveticaFont = await pdfDoc.embedFont(StandardFonts.Helvetica)

    // // Carregar as páginas
    // const pages = pdfDoc.getPages()
    // const firstPage = pages[0]

    // // Carregar o tamanho do PDF
    // const { width, height } = firstPage.getSize()

    // //Posição do texto
    // switch (posicao) {
    //     case 0:
    //         Assinatura(400, 50);
    //         break;
    //     case 1:
    //         Assinatura(400, 750);
    //         break;
    //     case 2:
    //         Assinatura(50, 750);
    //         break;
    //     case 3:
    //         Assinatura(50, 50);
    //         break;
    // }

    // // Salvar o PDF
    // const pdfBytes = await pdfDoc.save()

    // // Nome do PDF
    // download(pdfBytes, "Documento Assinado.pdf", "application/pdf");


    // //Função para fazer a Assinatura
    // function Assinatura(x, y) {
    //     firstPage.drawText(nome, {
    //         x: x,
    //         y: y,
    //         size: 10,
    //         font: helveticaFont,
    //         color: rgb(0, 0, 0),
    //     })
    //     firstPage.drawText(`${nomeMeio}`, {
    //         x: x,
    //         y: y - 10,
    //         size: 10,
    //         font: helveticaFont,
    //         color: rgb(0, 0, 0),
    //     })
    //     firstPage.drawText(`${ultimoNome}:`, {
    //         x: x,
    //         y: y - 20,
    //         size: 10,
    //         font: helveticaFont,
    //         color: rgb(0, 0, 0),
    //     })
    //     firstPage.drawText(cpf, {
    //         x: x,
    //         y: y - 30,
    //         size: 10,
    //         font: helveticaFont,
    //         color: rgb(0, 0, 0),
    //     })
    //     firstPage.drawText('Assinado de forma digital por', {
    //         x: x + 75,
    //         y: y,
    //         size: 6,
    //         font: helveticaFont,
    //         color: rgb(0, 0, 0),
    //     })
    //     firstPage.drawText(`${nome}${nomeMeio}`, {
    //         x: x + 75,
    //         y: y - 10,
    //         size: 6,
    //         font: helveticaFont,
    //         color: rgb(0, 0, 0),
    //     })
    //     firstPage.drawText(`${ultimoNome}:${cpf}`, {
    //         x: x + 75,
    //         y: y - 20,
    //         size: 6,
    //         font: helveticaFont,
    //         color: rgb(0, 0, 0),
    //     })
    //     let now = new Date();
    //     firstPage.drawText(`Dados: ${now.toLocaleDateString()} ${now.toLocaleTimeString()}`, {
    //         x: x + 75,
    //         y: y - 30,
    //         size: 6,
    //         font: helveticaFont,
    //         color: rgb(0, 0, 0),
    //     })
    // }
}