const fs = require('fs');
const path = require('path');

function listFiles(dir) {
    if (!fs.existsSync(dir)) {
        console.log("Directory doesn't exist:", dir);
        return;
    }
    const files = fs.readdirSync(dir);
    for (const file of files) {
        const fullPath = path.join(dir, file);
        const stat = fs.statSync(fullPath);
        if (stat.isDirectory()) {
            console.log("Dir:", fullPath);
            listFiles(fullPath);
        } else {
            console.log("File:", fullPath);
        }
    }
}

listFiles(path.join('node_modules', 'pdfjs-dist'));
