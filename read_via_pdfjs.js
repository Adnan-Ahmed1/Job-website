const fs = require('fs');
const pdfjs = require('pdfjs-dist/legacy/build/pdf.js');

const loadingTask = pdfjs.getDocument('question-paper/SSC-GD-Constable-4-2-2025-Morning-Shift-1-Paper.pdf');

loadingTask.promise.then(async function(pdfDoc) {
    console.log("PDF loaded successfully.");
    console.log("Total Pages:", pdfDoc.numPages);
    
    const meta = await pdfDoc.getMetadata();
    console.log("\n--- Metadata ---");
    console.log(JSON.stringify(meta, null, 2));
    
    // Read first page details
    const page = await pdfDoc.getPage(1);
    const tc = await page.getTextContent();
    
    console.log("\n--- Page 1 Text Content Items Count:", tc.items.length);
    console.log("Sample items (first 15):");
    tc.items.slice(0, 15).forEach((item, idx) => {
        console.log(`${idx}: str="${item.str}", fontName="${item.fontName}", width=${item.width}, height=${item.height}, transform=[${item.transform.join(',')}]`);
    });
    
    // Collect all text from all pages and print it
    let fullText = "";
    for (let p = 1; p <= pdfDoc.numPages; p++) {
        const pg = await pdfDoc.getPage(p);
        const content = await pg.getTextContent();
        const pageText = content.items.map(item => item.str).join(' ');
        fullText += `\n--- Page ${p} ---\n` + pageText;
    }
    
    fs.writeFileSync('extracted_pdfjs_text.txt', fullText);
    console.log("\nFull text extracted and written to extracted_pdfjs_text.txt");
    
}).catch(function(err) {
    console.error("Error loading PDF via pdfjs-dist:", err);
});
