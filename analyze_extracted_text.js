const fs = require('fs');
const lines = fs.readFileSync('extracted_text_via_pdftotext.txt', 'utf8').split('\n');

console.log("Total lines in extracted text:", lines.length);

console.log("\n--- First 50 lines ---");
for (let i = 0; i < Math.min(50, lines.length); i++) {
    console.log(`${String(i+1).padStart(3, ' ')}: ${lines[i]}`);
}

// Let's write another block to inspect hex values of characters in the first line that has non-standard text
console.log("\n--- Font/Glyph Hex analysis of line 42 ---");
const sampleLine = lines.find(l => l.includes('Q.') || l.includes('Section'));
if (sampleLine) {
    console.log("Found line:", sampleLine);
    const hex = [...sampleLine].map(c => {
        const code = c.charCodeAt(0);
        return `${c}(0x${code.toString(16).toUpperCase()})`;
    }).join(' ');
    console.log(hex);
}
