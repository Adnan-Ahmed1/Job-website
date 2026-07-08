const fs = require('fs');

function replaceColors(filePath, skipRoot = false) {
    let content = fs.readFileSync(filePath, 'utf8');
    
    let rootBlock = '';
    let rest = content;
    
    if (skipRoot) {
        // Find end of :root block
        const rootStart = content.indexOf(':root {');
        if (rootStart !== -1) {
            let braceCount = 0;
            let rootEndIndex = rootStart;
            for (let i = rootStart; i < content.length; i++) {
                if (content[i] === '{') braceCount++;
                if (content[i] === '}') {
                    braceCount--;
                    if (braceCount === 0) {
                        rootEndIndex = i + 1;
                        break;
                    }
                }
            }
            rootBlock = content.substring(0, rootEndIndex);
            rest = content.substring(rootEndIndex);
        }
    }
    
    // Order matters: longer hex codes first, then shorter ones
    const replacements = [
        // Border colors
        ['#e2e8f0', 'var(--border-light)'],
        ['#cbd5e1', 'var(--border-medium)'],
        ['#dce0e5', 'var(--border-muted)'],
        ['#dee2e6', 'var(--border-subtle)'],
        ['#E5E7EB', 'var(--border-faint)'],
        ['#e5e7eb', 'var(--border-faint)'],
        ['#e8e8e8', 'var(--border-soft)'],
        
        // Gray text colors (6-char hex first)
        ['#64748b', 'var(--gray-medium)'],
        ['#6b7280', 'var(--gray-500)'],
        ['#6B7280', 'var(--gray-500)'],
        ['#6c757d', 'var(--gray-400)'],
        ['#334155', 'var(--text-dark)'],
        ['#374151', 'var(--text-darker)'],
        ['#111827', 'var(--text-heading)'],
        ['#8b9fbb', 'var(--text-info-muted)'],
        ['#b8c0cc', 'var(--text-timeline-arrow)'],
        
        // Backgrounds (6-char hex)
        ['#f8fafc', 'var(--bg-main)'],
        ['#F8FAFC', 'var(--bg-main)'],
        ['#f1f5f9', 'var(--bg-light-gray)'],
        ['#f7f7f7', 'var(--bg-neutral)'],
        ['#f1f1f1', 'var(--bg-soft)'],
        ['#ededed', 'var(--bg-map)'],
        ['#e8ecf1', 'var(--bg-viewer)'],
        ['#e8f8ef', 'var(--bg-stats-green)'],
        ['#F4F6FB', 'var(--bg-map-icon)'],
        ['#EEF4FF', 'var(--bg-bottom-info)'],
        ['#eff6ff', 'var(--bg-light-blue)'],
        ['#cfd8e5', 'var(--bg-timeline)'],
        ['#d1fae5', 'var(--bg-step-line)'],
        ['#d0c2e4', 'var(--bg-wcu)'],
        ['#c0efd9', 'var(--bg-stay-connected)'],
        ['#f0f9ff', 'var(--bg-alt-blue)'],
        ['#ecfdf5', 'var(--bg-light-green)'],
        
        // Chip borders
        ['#bfdbfe', 'var(--chip-blue-border)'],
        ['#ddd6fe', 'var(--chip-purple-border)'],
        ['#bbf7d0', 'var(--chip-green-border)'],
        ['#fef08a', 'var(--chip-yellow-border)'],
        ['#fecaca', 'var(--chip-red-border)'],
        ['#99f6e4', 'var(--chip-teal-border)'],
        ['#fcd34d', 'var(--chip-brown-border)'],
        
        // Dark theme
        ['#1e293b', 'var(--dark-surface)'],
        ['#020617', 'var(--dark-deepest)'],
        ['#2d3748', 'var(--dark-toolbar)'],
        
        // Accent colors
        ['#38bdf8', 'var(--accent-sky)'],
        ['#0ea5e9', 'var(--accent-sky-hover)'],
        ['#10b981', 'var(--accent-emerald)'],
        ['#059669', 'var(--accent-emerald-hover)'],
        ['#ef4444', 'var(--accent-rose)'],
        ['#a78bfa', 'var(--accent-violet)'],
        ['#f43f5e', 'var(--accent-rose-btn)'],
        
        // Blue variants
        ['#3b82f6', 'var(--blue-hover)'],
        ['#2563eb', 'var(--blue-link)'],
        ['#93c5fd', 'var(--blue-focus-border)'],
        ['#1e3a8a', 'var(--blue-dark)'],
        
        // Special
        ['#ff0033', 'var(--youtube-red)'],
        ['#eab308', 'var(--icon-key-color)'],
        ['#f97316', 'var(--icon-yojana-color)'],
        ['#065f46', 'var(--badge-correct-text)'],
        ['#991b1b', 'var(--badge-wrong-text)'],
        ['#92400e', 'var(--badge-unattempted-text)'],
        
        // Colors that map to existing vars but were hardcoded outside :root
        ['#16a34a', 'var(--primary)'],
        ['#8b5cf6', 'var(--purple)'],
        ['#dc2626', 'var(--red)'],
        ['#0d9488', 'var(--teal)'],
        ['#1d4ed8', 'var(--blue)'],
        ['#0f172a', 'var(--dark)'],
        ['#475569', 'var(--gray-dark)'],
        ['#f59e0b', 'var(--orange)'],
        ['#fef2f2', 'var(--bg-light-red)'],
        ['#fffbeb', 'var(--bg-light-orange)'],
    ];
    
    for (const [hex, varRef] of replacements) {
        // Use global replace
        rest = rest.split(hex).join(varRef);
    }
    
    // Handle 3-char hex codes carefully (avoid matching inside longer hex)
    // #555 -> var(--text-muted)
    rest = rest.replace(/(?<![0-9a-fA-F])#555(?![0-9a-fA-F])/g, 'var(--text-muted)');
    // #444 -> var(--text-muted-alt)
    rest = rest.replace(/(?<![0-9a-fA-F])#444(?![0-9a-fA-F])/g, 'var(--text-muted-alt)');
    // #666 -> var(--text-dim)
    rest = rest.replace(/(?<![0-9a-fA-F])#666(?![0-9a-fA-F])/g, 'var(--text-dim)');
    // #eee -> var(--border-hairline)
    rest = rest.replace(/(?<![0-9a-fA-F])#eee(?![0-9a-fA-F])/g, 'var(--border-hairline)');
    
    const finalContent = rootBlock + rest;
    fs.writeFileSync(filePath, finalContent, 'utf8');
    console.log(`✅ ${filePath} - color replacement complete!`);
}

// Process style.css (skip :root block)
replaceColors('c:\\xampp\\htdocs\\job\\css\\style.css', true);

// Process responsive.css (no :root block to skip)
replaceColors('c:\\xampp\\htdocs\\job\\css\\responsive.css', false);

console.log('\\n🎉 All color replacements done!');
