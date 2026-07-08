# Read file content
$content = Get-Content "c:\xampp\htdocs\job\css\style.css" -Raw

# ── IMPORTANT: Process replacements in order from longest/most-specific to shortest ──
# This prevents partial matches

# Skip the :root block - we need to preserve hex values there
# Strategy: extract :root block, do replacements on the rest, then recombine

# Find the end of :root block (closing brace after all variables)
$rootEnd = $content.IndexOf("`n}", $content.IndexOf(":root {"))
$rootBlock = $content.Substring(0, $rootEnd + 2)
$rest = $content.Substring($rootEnd + 2)

# ── Border colors ──
$rest = $rest -replace '#e2e8f0', 'var(--border-light)'
$rest = $rest -replace '#cbd5e1', 'var(--border-medium)'
$rest = $rest -replace '#dce0e5', 'var(--border-muted)'
$rest = $rest -replace '#dee2e6', 'var(--border-subtle)'
$rest = $rest -replace '#E5E7EB', 'var(--border-faint)'
$rest = $rest -replace '#e5e7eb', 'var(--border-faint)'
$rest = $rest -replace '#e8e8e8', 'var(--border-soft)'
$rest = $rest -replace '#eee', 'var(--border-hairline)'

# ── Gray text ──
$rest = $rest -replace '#64748b', 'var(--gray-medium)'
$rest = $rest -replace '#6b7280', 'var(--gray-500)'
$rest = $rest -replace '#6B7280', 'var(--gray-500)'
$rest = $rest -replace '#6c757d', 'var(--gray-400)'
$rest = $rest -replace '#334155', 'var(--text-dark)'
$rest = $rest -replace '#374151', 'var(--text-darker)'
$rest = $rest -replace '#111827', 'var(--text-heading)'
# Be careful with #555 - only replace standalone (not inside longer hex like #555555)
$rest = $rest -replace '(?<![0-9a-fA-F])#555(?![0-9a-fA-F])', 'var(--text-muted)'
$rest = $rest -replace '(?<![0-9a-fA-F])#444(?![0-9a-fA-F])', 'var(--text-muted-alt)'
$rest = $rest -replace '(?<![0-9a-fA-F])#666(?![0-9a-fA-F])', 'var(--text-dim)'
$rest = $rest -replace '#8b9fbb', 'var(--text-info-muted)'
$rest = $rest -replace '#b8c0cc', 'var(--text-timeline-arrow)'

# ── Backgrounds ──
$rest = $rest -replace '#f8fafc', 'var(--bg-main)'
$rest = $rest -replace '#F8FAFC', 'var(--bg-main)'
$rest = $rest -replace '#f1f5f9', 'var(--bg-light-gray)'
$rest = $rest -replace '#f7f7f7', 'var(--bg-neutral)'
$rest = $rest -replace '#f1f1f1', 'var(--bg-soft)'
$rest = $rest -replace '#ededed', 'var(--bg-map)'
$rest = $rest -replace '#e8ecf1', 'var(--bg-viewer)'
$rest = $rest -replace '#e8f8ef', 'var(--bg-stats-green)'
$rest = $rest -replace '#F4F6FB', 'var(--bg-map-icon)'
$rest = $rest -replace '#EEF4FF', 'var(--bg-bottom-info)'
$rest = $rest -replace '#eff6ff', 'var(--bg-light-blue)'
$rest = $rest -replace '#cfd8e5', 'var(--bg-timeline)'
$rest = $rest -replace '#d1fae5', 'var(--bg-step-line)'
$rest = $rest -replace '#d0c2e4', 'var(--bg-wcu)'
$rest = $rest -replace '#c0efd9', 'var(--bg-stay-connected)'
$rest = $rest -replace '#f0f9ff', 'var(--bg-alt-blue)'
$rest = $rest -replace '#ecfdf5', 'var(--bg-light-green)'

# ── Chip borders ──
$rest = $rest -replace '#bfdbfe', 'var(--chip-blue-border)'
$rest = $rest -replace '#ddd6fe', 'var(--chip-purple-border)'
$rest = $rest -replace '#bbf7d0', 'var(--chip-green-border)'
$rest = $rest -replace '#fef08a', 'var(--chip-yellow-border)'
$rest = $rest -replace '#fecaca', 'var(--chip-red-border)'
$rest = $rest -replace '#99f6e4', 'var(--chip-teal-border)'
$rest = $rest -replace '#fcd34d', 'var(--chip-brown-border)'

# ── Dark theme ──
$rest = $rest -replace '#1e293b', 'var(--dark-surface)'
$rest = $rest -replace '#020617', 'var(--dark-deepest)'
# #334155 already replaced as --text-dark (same value, dual purpose)
$rest = $rest -replace '#2d3748', 'var(--dark-toolbar)'

# ── Accent colors ──
$rest = $rest -replace '#38bdf8', 'var(--accent-sky)'
$rest = $rest -replace '#0ea5e9', 'var(--accent-sky-hover)'
$rest = $rest -replace '#10b981', 'var(--accent-emerald)'
$rest = $rest -replace '#059669', 'var(--accent-emerald-hover)'
$rest = $rest -replace '#ef4444', 'var(--accent-rose)'
$rest = $rest -replace '#a78bfa', 'var(--accent-violet)'
$rest = $rest -replace '#f43f5e', 'var(--accent-rose-btn)'

# ── Blue variants ──
$rest = $rest -replace '#3b82f6', 'var(--blue-hover)'
$rest = $rest -replace '#2563eb', 'var(--blue-link)'
$rest = $rest -replace '#93c5fd', 'var(--blue-focus-border)'
$rest = $rest -replace '#1e3a8a', 'var(--blue-dark)'

# ── Special ──
$rest = $rest -replace '#ff0033', 'var(--youtube-red)'
$rest = $rest -replace '#eab308', 'var(--icon-key-color)'
$rest = $rest -replace '#f97316', 'var(--icon-yojana-color)'
$rest = $rest -replace '#065f46', 'var(--badge-correct-text)'
$rest = $rest -replace '#991b1b', 'var(--badge-wrong-text)'
$rest = $rest -replace '#92400e', 'var(--badge-unattempted-text)'

# ── Colors that map to existing vars but were hardcoded ──
$rest = $rest -replace '#16a34a', 'var(--primary)'
$rest = $rest -replace '#8b5cf6', 'var(--purple)'
$rest = $rest -replace '#dc2626', 'var(--red)'
$rest = $rest -replace '#0d9488', 'var(--teal)'
$rest = $rest -replace '#1d4ed8', 'var(--blue)'
$rest = $rest -replace '#0f172a', 'var(--dark)'
$rest = $rest -replace '#475569', 'var(--gray-dark)'
$rest = $rest -replace '#f59e0b', 'var(--orange)'
$rest = $rest -replace '#fef2f2', 'var(--bg-light-red)'
$rest = $rest -replace '#fffbeb', 'var(--bg-light-orange)'

# Recombine
$finalContent = $rootBlock + $rest

# Write back
Set-Content "c:\xampp\htdocs\job\css\style.css" -Value $finalContent -NoNewline

Write-Output "style.css color replacement complete!"

# Now process responsive.css
$rcontent = Get-Content "c:\xampp\htdocs\job\css\responsive.css" -Raw

$rcontent = $rcontent -replace '#f1f5f9', 'var(--bg-light-gray)'
$rcontent = $rcontent -replace '#64748b', 'var(--gray-medium)'
$rcontent = $rcontent -replace '#334155', 'var(--text-dark)'
$rcontent = $rcontent -replace '#f8fafc', 'var(--bg-main)'
$rcontent = $rcontent -replace '#0f172a', 'var(--dark)'
$rcontent = $rcontent -replace '#16a34a', 'var(--primary)'
$rcontent = $rcontent -replace '#2563eb', 'var(--blue-link)'
$rcontent = $rcontent -replace '#8b5cf6', 'var(--purple)'
$rcontent = $rcontent -replace '#eab308', 'var(--icon-key-color)'
$rcontent = $rcontent -replace '#dc2626', 'var(--red)'
$rcontent = $rcontent -replace '#0d9488', 'var(--teal)'
$rcontent = $rcontent -replace '#f97316', 'var(--icon-yojana-color)'
$rcontent = $rcontent -replace '#e2e8f0', 'var(--border-light)'

Set-Content "c:\xampp\htdocs\job\css\responsive.css" -Value $rcontent -NoNewline

Write-Output "responsive.css color replacement complete!"
