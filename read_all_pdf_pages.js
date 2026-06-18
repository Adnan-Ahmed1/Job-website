const fs = require('fs');
const pdf = require('pdf-parse');

const dataBuffer = fs.readFileSync('question-paper/SSC-GD-Constable-4-2-2025-Morning-Shift-1-Paper.pdf');

pdf(dataBuffer).then(function(data) {
    console.log("PDF Pages Count:", data.numpages);
    console.log("\n--- PDF INFO ---");
    console.log(JSON.stringify(data.info, null, 2));
    
    console.log("\n--- RAW TEXT EXCERPT (First 1500 chars) ---");
    console.log(data.text.substring(0, 1500));
    
    // Write full text to a temporary file to analyze it line by line
    fs.writeFileSync('extracted_pdf_text.txt', data.text);
    console.log("\nFull extracted text written to extracted_pdf_text.txt");
}).catch(function(err) {
    console.error("Error reading PDF:", err);
});
